<?php

namespace FireflyIII\Validation;

use Auth;
use Carbon\Carbon;
use Config;
use Crypt;
use DB;
use FireflyIII\Models\Account;
use FireflyIII\Models\AccountType;
use FireflyIII\User;
use Illuminate\Validation\Validator;
use Navigation;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * Class FireflyValidator
 *
 * @package FireflyIII\Validation
 */
class FireflyValidator extends Validator
{

    /**
     * @param TranslatorInterface $translator
     * @param array               $data
     * @param array               $rules
     * @param array               $messages
     * @param array               $customAttributes
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(TranslatorInterface $translator, array $data, array $rules, array $messages = [], array $customAttributes = [])
    {
        parent::__construct($translator, $data, $rules, $messages, $customAttributes);
    }

    /**
     * @param $attribute
     * @param $value
     * @param $parameters
     *
     * @return bool
     */
    public function validateBelongsToUser($attribute, $value, $parameters)
    {

        $count = DB::table($parameters[0])->where('user_id', Auth::user()->id)->where('id', $value)->count();
        if ($count == 1) {
            return true;
        }

        return false;

    }

    /**
     * @return bool
     */
    public function validatePiggyBankReminder()
    {
        $array = $this->data;
        // no reminder? dont care.
        if (!isset($array['remind_me'])) {
            return true;
        }

        // get or set start date & target date:
        $startDate  = isset($array['startdate']) ? new Carbon($array['startdate']) : new Carbon;
        $targetDate = isset($array['targetdate']) && strlen($array['targetdate']) > 0 ? new Carbon($array['targetdate']) : null;

        // target date is null? reminder period is always good.
        if ($array['remind_me'] == '1' && is_null($targetDate)) {
            return true;
        }

        $nextReminder = Navigation::addPeriod($startDate, $array['reminder'], 0);
        // reminder is beyond target?
        if ($nextReminder > $targetDate) {
            return false;
        }

        return true;
    }

    /**
     * @param $attribute
     * @param $value
     * @param $parameters
     *
     * @return bool
     */
    public function validateUniqueAccountForUser($attribute, $value, $parameters)
    {
        // because a user does not have to be logged in (tests and what-not).
        if (!Auth::check()) {
            return $this->validateAccountAnonymously();
        }

        if (isset($this->data['what'])) {
            return $this->validateByAccountTypeString($value, $parameters);
        }

        if (isset($this->data['account_type_id'])) {
            return $this->validateByAccountTypeId($value, $parameters);
        }


        var_dump($attribute);
        var_dump($value);
        var_dump($parameters);
        var_dump($this->data);

        exit;


        // try to determin type of account:
        if (!empty($this->data['what'])) {
            $search = Config::get('firefly.accountTypeByIdentifier.' . $this->data['what']);
            $type   = AccountType::whereType($search)->first();
        } else {
            $type = AccountType::find($this->data['account_type_id']);
        }

        // ignore itself, if parameter is given:
        if (isset($parameters[0])) {
            $ignoreId = $parameters[0];
        } else {
            $ignoreId = 0;
        }

        // reset to basic check, see what happens:
        $userId   = Auth::user()->id;
        $ignoreId = intval($this->data['id']);

        $set = Account::where('account_type_id', $type->id)->where('id', '!=', $ignoreId)->where('user_id', $userId)->get();
        /** @var Account $entry */
        foreach ($set as $entry) {
            if ($entry->name == $value) {
                return false;
            }
        }

        return true;

    }

    /**
     * @return bool
     */
    protected function validateAccountAnonymously()
    {
        if (!isset($this->data['user_id'])) {
            return false;
        }

        $user  = User::find($this->data['user_id']);
        $type  = AccountType::find($this->data['account_type_id'])->first();
        $value = $this->data['name'];

        // decrypt if necessary
        if (intval($this->data['encrypted']) === 1) {
            $value = Crypt::decrypt($this->data['name']);
        }


        $set = $user->accounts()->where('account_type_id', $type->id)->get();
        /** @var Account $entry */
        foreach ($set as $entry) {
            if ($entry->name == $value) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param $value
     * @param $parameters
     *
     * @return bool
     */
    protected function validateByAccountTypeString($value, $parameters)
    {
        $search = Config::get('firefly.accountTypeByIdentifier.' . $this->data['what']);
        $type   = AccountType::whereType($search)->first();
        $ignore = isset($parameters[0]) ? intval($parameters[0]) : 0;

        $set = Auth::user()->accounts()->where('account_type_id', $type->id)->where('id', '!=', $ignore)->get();
        /** @var Account $entry */
        foreach ($set as $entry) {
            if ($entry->name == $value) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param $value
     * @param $parameters
     *
     * @return bool
     */
    protected function validateByAccountTypeId($value, $parameters)
    {
        $type   = AccountType::find($this->data['account_type_id'])->first();
        $ignore = isset($parameters[0]) ? intval($parameters[0]) : 0;

        // if is encrypted, decrypt:
        if (intval($this->data['encrypted']) === 1) {
            $value = Crypt::decrypt($value);
        }

        $set = Auth::user()->accounts()->where('account_type_id', $type->id)->where('id', '!=', $ignore)->get();
        /** @var Account $entry */
        foreach ($set as $entry) {
            if ($entry->name == $value) {
                return false;
            }
        }

        return true;

    }

    /**
     * @param $attribute
     * @param $value
     * @param $parameters
     *
     * @return bool
     */
    public function validateUniqueForUser($attribute, $value, $parameters)
    {
        $query = DB::table($parameters[0])->where($parameters[1], $value);
        $query->where('user_id', Auth::user()->id);
        if (isset($parameters[2])) {
            $query->where('id', '!=', $parameters[2]);
        }
        $count = $query->count();
        if ($count == 0) {
            return true;
        }

        return false;

    }

    /**
     * Validate an object and its unicity. Checks for encryption / encrypted values as well.
     *
     * parameter 0: the table
     * parameter 1: the field
     * parameter 2: the encrypted / not encrypted boolean. Defaults to "encrypted".
     * parameter 3: an id to ignore (when editing)
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     *
     * @return bool
     */
    public function validateUniqueObjectForUser($attribute, $value, $parameters)
    {
        $table           = $parameters[0];
        $field           = $parameters[1];
        $encrypted       = isset($parameters[2]) ? $parameters[2] : 'encrypted';
        $exclude         = isset($parameters[3]) ? $parameters[3] : null;
        $alwaysEncrypted = false;
        if ($encrypted == 'TRUE') {
            $alwaysEncrypted = true;
        }

        if (is_null(Auth::user())) {
            // user is not logged in.. weird.
            return true;
        } else {
            $query = DB::table($table)->where('user_id', Auth::user()->id);
        }


        if (!is_null($exclude)) {
            $query->where('id', '!=', $exclude);
        }


        $set = $query->get();
        foreach ($set as $entry) {
            if (!$alwaysEncrypted) {
                $isEncrypted = intval($entry->$encrypted) == 1 ? true : false;
            } else {
                $isEncrypted = true;
            }
            $checkValue = $isEncrypted ? Crypt::decrypt($entry->$field) : $entry->$field;
            if ($checkValue == $value) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param $attribute
     * @param $value
     * @param $parameters
     *
     * @return bool
     */
    public function validateUniquePiggyBankForUser($attribute, $value, $parameters)
    {
        $exclude = isset($parameters[0]) ? $parameters[0] : null;
        $query   = DB::table('piggy_banks');
        $query->leftJoin('accounts', 'accounts.id', '=', 'piggy_banks.account_id');
        $query->where('accounts.user_id', Auth::user()->id);
        if (!is_null($exclude)) {
            $query->where('piggy_banks.id', '!=', $exclude);
        }
        $set = $query->get(['piggy_banks.*']);

        foreach ($set as $entry) {
            $isEncrypted = intval($entry->encrypted) == 1 ? true : false;
            $checkValue  = $isEncrypted ? Crypt::decrypt($entry->name) : $entry->name;
            if ($checkValue == $value) {
                return false;
            }
        }

        return true;

    }
}

