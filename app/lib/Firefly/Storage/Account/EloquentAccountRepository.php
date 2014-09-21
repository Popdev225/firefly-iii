<?php


namespace Firefly\Storage\Account;

use Carbon\Carbon;
use Firefly\Exception\FireflyException;
use Illuminate\Database\QueryException;
use Illuminate\Queue\Jobs\Job;

/**
 * Class EloquentAccountRepository
 *
 * @package Firefly\Storage\Account
 */
class EloquentAccountRepository implements AccountRepositoryInterface
{

    protected $_user = null;

    /**
     *
     */
    public function __construct()
    {
        $this->_user = \Auth::user();
    }

    /**
     * @param $id
     *
     * @return |Account|null
     */
    public function findAssetAccountById($id)
    {
        return $this->_user->accounts()->find($id);
    }

    /**
     * @param \Account $from
     * @param \Account $to
     * @param int      $amount
     *
     * @throws FireflyException
     *
     * @return \TransactionType|null
     */
    public function transactionTypeByAccounts(\Account $from, \Account $to, $amount = 0)
    {
        // account types for both:
        $toAT   = $to->accountType->type;
        $fromAT = $from->accountType->type;

        $journalType = null;

        switch (true) {
            case ($from->transactions()->count() == 0 && $to->transactions()->count() == 0):
                $journalType = \TransactionType::where('type', 'Opening balance')->first();
                break;

            case (in_array($fromAT, ['Default account', 'Asset account'])
                && in_array(
                    $toAT, ['Default account', 'Asset account']
                )): // both are yours:
                // determin transaction type. If both accounts are new, it's an initial balance transfer.
                $journalType = \TransactionType::where('type', 'Transfer')->first();
                break;
            case ($amount < 0):
                $journalType = \TransactionType::where('type', 'Deposit')->first();
                break;
            // is deposit into one of your own accounts:
            case ($toAT == 'Default account' || $toAT == 'Asset account'):
                $journalType = \TransactionType::where('type', 'Deposit')->first();
                break;
            // is withdrawal from one of your own accounts:
            case ($fromAT == 'Default account' || $fromAT == 'Asset account'):
                $journalType = \TransactionType::where('type', 'Withdrawal')->first();
                break;
        }

        if (is_null($journalType)) {
            throw new FireflyException('Could not figure out transaction type.');
        }
        return $journalType;
    }


    /**
     * This method finds the expense account mentioned by name. This method is a sneaky little hobbits,
     * because when you feed it "Import account" it will always return an import account of that type.
     *
     * @param $name
     *
     * @return null|\Account
     */
    public function findExpenseAccountByName($name)
    {
        // catch Import account:
        if ($name == 'Import account') {
            $importType = $this->findAccountType('Import account');
            $import     = $this->firstOrCreate(
                [
                    'name'            => 'Import account',
                    'user_id'         => $this->_user->id,
                    'account_type_id' => $importType->id,
                    'active'          => 1
                ]
            );
            return $import;
        }

        // find account:
        $type    = $this->findAccountType('Expense account');
        $account = $this->_user->accounts()->where('name', $name)->where('account_type_id', $type->id)->first();

        // create if not found:
        if (strlen($name) > 0) {
            $set     = [
                'name'            => $name,
                'user_id'         => $this->_user->id,
                'active'          => 1,
                'account_type_id' => $type->id
            ];
            $account = $this->firstOrCreate($set);
        }

        // find cash account as fall back:
        if (is_null($account)) {
            $cashType = $this->findAccountType('Cash account');
            $account  = $this->_user->accounts()->where('account_type_id', $cashType->id)->first();
        }

        // create cash account as ultimate fall back:
        if (is_null($account)) {
            $set     = [
                'name'            => 'Cash account',
                'user_id'         => $this->_user->id,
                'active'          => 1,
                'account_type_id' => $cashType->id
            ];
            $account = $this->firstOrCreate($set);
        }

        if ($account->active == 0) {
            return null;
        }

        return $account;
    }

    /**
     * @param $type
     *
     * @return \AccountType|null
     */
    public function findAccountType($type)
    {
        return \AccountType::where('type', $type)->first();
    }

    public function firstOrCreate(array $data)
    {
        return \Account::firstOrCreate($data);
    }

    /**
     * @param $name
     *
     * @return |Account|null
     */
    public function findRevenueAccountByName($name)
    {
        // catch Import account:
        if ($name == 'Import account') {
            $importType = $this->findAccountType('Import account');
            $import     = $this->firstOrCreate(
                [
                    'name'            => 'Import account',
                    'user_id'         => $this->_user->id,
                    'account_type_id' => $importType->id,
                    'active'          => 1
                ]
            );
            return $import;
        }

        // find account:
        $type    = $this->findAccountType('Revenue account');
        $account = $this->_user->accounts()->where('name', $name)->where('account_type_id', $type->id)->first();

        // create if not found:
        if (strlen($name) > 0) {
            $set     = [
                'name'            => $name,
                'user_id'         => $this->_user->id,
                'active'          => 1,
                'account_type_id' => $type->id
            ];
            $account = $this->firstOrCreate($set);
        }

        // find cash account as fall back:
        if (is_null($account)) {
            $cashType = $this->findAccountType('Cash account');
            $account  = $this->_user->accounts()->where('account_type_id', $cashType->id)->first();
        }

        // create cash account as ultimate fall back:
        if (is_null($account)) {
            $set     = [
                'name'            => 'Cash account',
                'user_id'         => $this->_user->id,
                'active'          => 1,
                'account_type_id' => $cashType->id
            ];
            $account = $this->firstOrCreate($set);
        }

        if ($account->active == 0) {
            return null;
        }

        return $account;
    }

    /**
     * Takes a transaction/account component and updates the transaction journal to match.
     *
     * @param Job   $job
     * @param array $payload
     *
     * @return mixed
     */
    public function importUpdateTransaction(Job $job, array $payload)
    {
        /** @var \Firefly\Storage\Import\ImportRepositoryInterface $repository */
        $repository = \App::make('Firefly\Storage\Import\ImportRepositoryInterface');

        /** @var \Importmap $importMap */
        $importMap = $repository->findImportmap($payload['mapID']);
        $user      = $importMap->user;
        $this->overruleUser($user);

        if ($job->attempts() > 10) {
            \Log::error('Never found budget/account combination "' . $payload['data']['transaction_id'] . '"');

            $importMap->jobsdone++;
            $importMap->save();

            $job->delete(); // count fixed.
            return;
        }

        /** @var \Firefly\Storage\TransactionJournal\TransactionJournalRepositoryInterface $journals */
        $journals = \App::make('Firefly\Storage\TransactionJournal\TransactionJournalRepositoryInterface');
        $journals->overruleUser($user);

        /*
         * Prep some vars from the payload
         */
        $transactionId = intval($payload['data']['transaction_id']);
        $componentId   = intval($payload['data']['component_id']);

        /*
         * Find the import map for both:
         */
        $accountMap     = $repository->findImportEntry($importMap, 'Account', $componentId);
        $transactionMap = $repository->findImportEntry($importMap, 'Transaction', $transactionId);

        /*
         * Either may be null:
         */
        if (is_null($accountMap) || is_null($transactionMap)) {
            \Log::notice('No map found in account/transaction mapper. Release.');
            if (\Config::get('queue.default') == 'sync') {
                $importMap->jobsdone++;
                $importMap->save();
                $job->delete(); // count fixed
            } else {
                $job->release(300); // proper release.
            }
            return;
        }

        /*
         * Find the account and the transaction:
         */
        $account = $this->find($accountMap->new);
        /** @var \TransactionJournal $journal */
        $journal = $journals->find($transactionMap->new);

        /*
         * If either is null, release:
         */
        if (is_null($account) || is_null($journal)) {
            \Log::notice('Map is incorrect in account/transaction mapper. Release.');
            if (\Config::get('queue.default') == 'sync') {
                $importMap->jobsdone++;
                $importMap->save();
                $job->delete(); // count fixed
            } else {
                $job->release(300); // proper release.
            }
            return;
        }

        /*
         * Update one of the journal's transactions to have the right account:
         */
        $importType = $this->findAccountType('Import account');
        /** @var \Transaction $transaction */
        $updated = false;
        \Log::debug(
            'Connect "' . $account->name . '" (#' . $account->id . ') to "' . $journal->description . '" (#'
            . $journal->id . ')'
        );
        foreach ($journal->transactions as $index => $transaction) {
            /*
             * If it's of the right type, update it!
             */
            \Log::debug(
                'Transaction ' . $index . ' (#' . $transaction->id . '): [' . $transaction->account->account_type_id
                . ' vs. ' . $importType->id . ']'
            );
            if ($transaction->account->account_type_id == $importType->id) {
                $transaction->account()->associate($account);
                $transaction->save();
                $updated = true;
                \Log::debug(
                    'Connected expense account "' . $account->name . '" to journal "' . $journal->description . '"'
                );
            }
        }
        if ($updated === false) {
            \Log::error(
                'Did not connect transactions of journal #' . $journal->id . ' to expense account ' . $account->id
            );

        }

        $journal->save();


        $importMap->jobsdone++;
        $importMap->save();

        $job->delete(); // count fixed

    }

    /**
     * @param \User $user
     *
     * @return mixed|void
     */
    public function overruleUser(\User $user)
    {
        $this->_user = $user;
        return true;
    }

    /**
     * @param $accountId
     *
     * @return mixed
     */
    public function find($accountId)
    {
        return $this->_user->accounts()->where('id', $accountId)->first();
    }

    /**
     * @param Job   $job
     * @param array $payload
     *
     * @return mixed
     */
    public function importAccount(Job $job, array $payload)
    {
        /** @var \Firefly\Storage\Import\ImportRepositoryInterface $repository */
        $repository = \App::make('Firefly\Storage\Import\ImportRepositoryInterface');

        /** @var \Importmap $importMap */
        $importMap = $repository->findImportmap($payload['mapID']);
        $user      = $importMap->user;
        $this->overruleUser($user);

        /*
         * maybe Account is already imported:
         */
        $importEntry = $repository->findImportEntry($importMap, 'Account', intval($payload['data']['id']));

        /*
         * if so, delete job and return:
         */
        if (!is_null($importEntry)) {
            \Log::debug('Already imported ' . $payload['data']['name'] . ' of type ' . $payload['account_type']);
            $importMap->jobsdone++;
            $importMap->save();
            $job->delete(); // count fixed
            return;
        }

        /*
         * find the payload's account type:
         */
        $payload['account_type'] = isset($payload['account_type']) ? $payload['account_type'] : 'Expense account';
        $type                    = $this->findAccountType($payload['account_type']);

        /*
         * Create data array for store() procedure.
         */
        $data = [
            'account_type' => $type,
            'name'         => $payload['data']['name'],
        ];
        if (isset($payload['data']['openingbalance'])) {
            $data['openingbalance']     = floatval($payload['data']['openingbalance']);
            $data['openingbalancedate'] = $payload['data']['openingbalancedate'];
        }
        if (isset($payload['data']['inactive'])) {
            $data['active'] = intval($payload['data']['inactive']) == 0 ? 1 : 0;
        }

        /*
         * Try to store:
         */
        $account = $this->store($data);

        /*
         * Check for failure.
         */
        if (count($account->errors()) > 0) {
            \Log::error('Account creation error: ' . $account->errors()->first());

            $importMap->jobsdone++;
            $importMap->save();

            $job->delete(); // count fixed
            return;
        }
        \Log::debug('Imported ' . $payload['account_type'] . ': ' . $payload['data']['name']);

        /*
         * Save meta data
         */
        $repository->store($importMap, 'Account', intval($payload['data']['id']), $account->id);
        $importMap->jobsdone++;
        $importMap->save();
        $job->delete(); // count fixed.
        return;
    }
//
//    /**
//     * @param $name
//     *
//     * @return \Account|mixed|null
//     */
//    public function createOrFindBeneficiary($name)
//    {
//        if (is_null($name) || strlen($name) == 0) {
//            return null;
//        }
//        $type = \AccountType::where('type', 'Expense account')->first();
//        return $this->createOrFind($name, $type);
//    }
//
//    /**
//     * @param              $name
//     * @param \AccountType $type
//     *
//     * @return \Account|mixed
//     */
//    public function createOrFind($name, \AccountType $type = null)
//    {
//        $account = $this->findByName($name, $type);
//        if (!$account) {
//            $data = [
//                'name'         => $name,
//                'account_type' => $type
//            ];
//
//            return $this->store($data);
//        }
//
//        return $account;
//    }
//
//    /**
//     * @param              $name
//     * @param \AccountType $type
//     *
//     * @return mixed
//     */
//    public function findByName($name, \AccountType $type = null)
//    {
//        $type = is_null($type) ? \AccountType::where('type', 'Asset account')->first() : $type;
//
//        return $this->_user->accounts()->where('account_type_id', $type->id)
//            ->where('name', 'like', '%' . $name . '%')
//            ->first();
//    }

    /**
     * @param $data
     *
     * @return \Account
     * @throws \Firefly\Exception\FireflyException
     */
    public function store($data)
    {
        /**
         * If the AccountType has been passed through, use it:
         */
        if (isset($data['account_type']) && is_object($data['account_type'])
            && get_class($data['account_type']) == 'AccountType'
        ) {
            $accountType = $data['account_type'];
        } else if (isset($data['account_type']) && is_string($data['account_type'])) {
            // if it isnt but set as string, find it:
            $accountType = \AccountType::where('type', $data['account_type'])->first();

        } else {
            $accountType = \AccountType::where('type', 'Asset account')->first();
        }
        $active = isset($data['active']) && intval($data['active']) >= 0 && intval($data['active']) <= 1 ? intval(
            $data['active']
        ) : 1;

        /**
         * Create new account:
         */
        $account = new \Account;
        $account->accountType()->associate($accountType);
        $account->user()->associate($this->_user);

        $account->name = $data['name'];
        $account->active
                       =
            isset($data['active']) && intval($data['active']) >= 0 && intval($data['active']) <= 1 ? intval(
                $data['active']
            ) : 1;

        // try to save it:
        try {
            if ($account->save()) {
                // create initial balance, if necessary:
                if (isset($data['openingbalance']) && isset($data['openingbalancedate'])) {
                    $amount = floatval($data['openingbalance']);
                    $date   = new Carbon($data['openingbalancedate']);
                    if ($amount != 0) {
                        $this->_createInitialBalance($account, $amount, $date);
                    }
                }
            }
        } catch (QueryException $e) {
            // do nothing
        }


        // whatever the result, return the account.
        return $account;
    }

    /**
     * @param \Account $account
     * @param int      $amount
     * @param Carbon   $date
     *
     * @return bool
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _createInitialBalance(\Account $account, $amount = 0, Carbon $date)
    {
        /*
         * The repositories we need:
         */
        /** @var \Firefly\Helper\Controllers\TransactionInterface $transactions */
        $transactions = \App::make('Firefly\Helper\Controllers\TransactionInterface');
        $transactions->overruleUser($this->_user);


        /*
         * get account type:
         */
        $initialBalanceAT = $this->findAccountType('Initial balance account');

        /*
         * create new account
         */
        $initial = new \Account;
        $initial->accountType()->associate($initialBalanceAT);
        $initial->user()->associate($this->_user);
        $initial->name   = $account->name . ' initial balance';
        $initial->active = 0;
        if ($initial->validate()) {
            $initial->save();
            /*
             * create new transaction journal (and transactions):
             */

            $set = [
                'account_from_id' => $initial->id,
                'account_to_id'   => $account->id,
                'description'     => 'Initial Balance for ' . $account->name,
                'what'            => 'Opening balance',
                'amount'          => $amount,
                'category'        => '',
                'date'            => $date->format('Y-m-d')
            ];
            $transactions->store($set);

            return true;
        }

        return false;
    }

    /**
     * Gets a list of accounts that have the mentioned type. Will automatically convert
     * strings in this array to actual (model) account types.
     *
     * @param array $types
     *
     * @return Collection
     */
    public function getOfTypes(array $types)
    {
        $accounts = $this->_user->accounts()->accountTypeIn($types)->get(['accounts.*']);
        return $accounts;
    }

    /**
     * @param              $name
     * @param \AccountType $type
     *
     * @return \Account
     */
    public function findByNameAndAccountType($name, \AccountType $type)
    {
        return $this->_user->accounts()->where('name', $name)->where('account_type_id', $type->id)->first();
    }

    /**
     * @return mixed
     */
    public function count()
    {
        return $this->_user->accounts()->count();

    }

//    /**
//     * Used for import
//     *
//     * @param              $name
//     *
//     * @return mixed
//     */
//    public function findByNameAny($name)
//    {
//        return $this->_user->accounts()
//            ->where('name', 'like', '%' . $name . '%')
//            ->first();
//    }

    /**
     * @param \Account $account
     *
     * @return bool|mixed
     */
    public function destroy(\Account $account)
    {
        // find all transaction journals related to this account:
        $journals   = \TransactionJournal::withRelevantData()->accountIs($account)->get(['transaction_journals.*']);
        $accountIDs = [];

        /** @var \TransactionJournal $journal */
        foreach ($journals as $journal) {
            // remember the account id's of the transactions involved:
            foreach ($journal->transactions as $t) {
                $accountIDs[] = $t->account_id;
            }
            $journal->delete();

        }
        $accountIDs = array_unique($accountIDs);
        if (count($accountIDs) > 0) {
            // find the "initial balance" type accounts in this list. Should be just 1.
            $query = $this->_user->accounts()->accountTypeIn(['Initial balance account'])
                ->whereIn('accounts.id', $accountIDs);
            if ($query->count() == 1) {
                $iba = $query->first(['accounts.*']);
                $iba->delete();
            }
        }
        $account->delete();

        /**
         *
         * TODO
         * Also delete: initial balance, initial balance account, and transactions
         */

        return true;
    }

//    /**
//     * @return array|mixed
//     */
//    public function  getActiveDefaultAsSelectList()
//    {
//        $list   = $this->getActiveDefault();
//        $return = [];
//        foreach ($list as $entry) {
//            $return[intval($entry->id)] = $entry->name;
//        }
//
//        return $return;
//    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->_user->accounts()->with('accounttype')->orderBy('name', 'ASC')->get();
    }

//    /**
//     * @return mixed
//     */
//    public function getBeneficiaries()
//    {
//        $list = $this->_user->accounts()->accountTypeIn(['Beneficiary account', 'Expense account'])->where(
//            'accounts.active', 1
//        )->orderBy(
//                'accounts.name', 'ASC'
//            )->get(['accounts.*']);
//
//        return $list;
//    }

    public function getByAccountType(\AccountType $type)
    {
        return $this->_user->accounts()->with('accounttype')->orderBy('name', 'ASC')
            ->where('account_type_id', $type->id)->get();
    }

    /**
     * @param $ids
     *
     * @return array|mixed
     */
    public function getByIds(array $ids)
    {
        if (count($ids) > 0) {
            return $this->_user->accounts()->with('accounttype')->whereIn('id', $ids)->orderBy('name', 'ASC')->get();
        } else {
            return $this->getActiveDefault();
        }
    }

    /**
     * @return mixed
     */
    public function getActiveDefault()
    {
        return $this->_user->accounts()->accountTypeIn(['Default account', 'Asset account'])->where(
            'accounts.active', 1
        )
            ->get(['accounts.*']);
    }

    /**
     * @return mixed
     */
    public function getCashAccount()
    {
        $type = \AccountType::where('type', 'Cash account')->first();
        $cash = $this->_user->accounts()->where('account_type_id', $type->id)->first();
        if (is_null($cash)) {
            $cash = new \Account;
            $cash->accountType()->associate($type);
            $cash->user()->associate($this->_user);
            $cash->name   = 'Cash account';
            $cash->active = 1;
            $cash->save();
        }

        return $cash;

    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->_user->accounts()->accountTypeIn(['Default account', 'Asset account'])
            ->orderBy('accounts.name', 'ASC')->get(['accounts.*']);
    }

    /**
     * @param \Account $account
     * @param          $data
     *
     * @return \Account|mixed
     */
    public function update(\Account $account, $data)
    {
        // update account accordingly:
        $account->name = $data['name'];
        if ($account->validate()) {
            $account->save();
        }
        // update initial balance if necessary:
        if (isset($data['openingbalance']) && floatval($data['openingbalance']) != 0) {

            /** @var \Firefly\Helper\Controllers\AccountInterface $interface */
            $interface = \App::make('Firefly\Helper\Controllers\AccountInterface');

            if ($account->accounttype->type == 'Default account' || $account->accounttype->type == 'Asset account') {


                $journal = $interface->openingBalanceTransaction($account);
                if ($journal) {
                    $journal->date                    = new Carbon($data['openingbalancedate']);
                    $journal->transactions[0]->amount = floatval($data['openingbalance']) * -1;
                    $journal->transactions[1]->amount = floatval($data['openingbalance']);
                    $journal->transactions[0]->save();
                    $journal->transactions[1]->save();
                    $journal->save();
                }
            }
        }

        return $account;
    }


}