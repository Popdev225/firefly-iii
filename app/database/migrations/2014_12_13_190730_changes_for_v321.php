<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Down:
 * 1. Create new Components based on Budgets.
 * 2. Create new Components based on Categories
 * 3. Recreate component_id in limits
 * 4. Update all budget_limits entries (component_id).
 * 5. Add the foreign key to component_id in budget_limits
 * 6. Drop column 'budget_id' in budget_limits.
 * 7. Create table journal_components.
 * 8. create entries for budgets in journal_components.
 * 9. create entries for categories in journal_components.
 * 10. drop table budget_journals
 * 11. drop table category_journals
 * 12. drop table budgets
 * 13. drop table categories.
 * 14. rename budget_limits to limits.
 * 15. Rename piggy_bank_events to piggybank_events
 * 16. Rename field 'budget_limit_id' to 'limit_id' in 'limit_repetitions'
 * 17. Do not recreate component_recurring_transaction
 * 18. Do not recreate component_transaction
 * 19. Do not recreate field 'piggybank_id' in 'transactions'
 *
 *
 *
 * Up:
 *
 * 1. Create new budget table.
 * 2. Create new category table.
 * 3. Create journal_budget table.
 * 4. Create journal_category table.
 * 5. Move budgets to new budgets table AND move journal_components to budget_components.
 * 6. Move categories to categories table AND move journal_components to category_components.
 * 7. Rename limits to budget_limits.
 * 8. Rename piggybank_events to piggy_bank_events
 * 9. Rename field 'limit_id' to 'budget_limit_id' in 'limit_repetitions'
 * 10. Create field budget_id in budget_limits.
 * 11. Update budget_limits with budgets (instead of components).
 * 12. drop table journal_components
 * 13. Drop table component_recurring_transaction
 * 14. Drop table component_transaction
 * 15. Drop field 'piggybank_id' from 'transactions'
 * 16. Drop field 'component_id' from 'budget_limits'
 *
 * Class ChangesForV321
 */
class ChangesForV321 extends Migration
{
    public function down()
    {

        $this->moveBudgetsBack(); // 1.
        $this->moveCategoriesBack(); // 2.
        $this->createComponentId(); // 3.
        $this->updateComponentInBudgetLimits(); // 4.
        $this->createComponentIdForeignKey(); // 5.
        $this->dropBudgetIdColumnInBudgetLimits(); // 6.
        $createComponents = new CreateComponentTransactionJournalTable;  // 7.
        $createComponents->up();
        $this->moveBackEntriesForBudgetsInJoinedTable(); // 8.
        $this->moveBackEntriesForCategoriesInJoinedTable(); // 9.
        $this->dropBudgetJournalTable(); // 10.
        $this->dropCategoryJournalTable(); // 11.
        $this->dropBudgetTable(); // 12.
        $this->dropCategoryTable(); // 13.
        $this->renameBudgetLimits(); // 14.
        $this->renamePiggyBankEvents(); // 15.
        $this->renameBudgetLimitToBudgetInRepetitions(); // 16.
        // 17, 18, 19


    }

    public function createComponentId() {
        Schema::table(
            'budget_limits', function (Blueprint $table) {
            $table->integer('component_id')->unsigned();
        }
        );
    }

    public function createComponentIdForeignKey() {
        Schema::table(
            'budget_limits', function (Blueprint $table) {
            $table->foreign('component_id')->references('id')->on('components')->onDelete('cascade');
        }
        );
    }

    public function moveBudgetsBack()
    {
        Budget::get()->each(
            function (Budget $budget) {
                Component::firstOrCreate(
                    [
                        'name'    => $budget->name,
                        'user_id' => $budget->user_id,
                        'class'   => 'Budget'
                    ]
                );
            }
        );
    }

    public function moveCategoriesBack()
    {
        Category::get()->each(
            function (Category $category) {
                Component::firstOrCreate(
                    [
                        'name'    => $category->name,
                        'user_id' => $category->user_id,
                        'class'   => 'Category'
                    ]
                );
            }
        );
    }

    public function updateComponentInBudgetLimits()
    {
        BudgetLimit::get()->each(
            function (BudgetLimit $bl) {
                $budgetId = $bl->budget_id;
                $budget   = Budget::find($budgetId);
                if ($budget) {
                    $component = Component::where('class', 'Budget')->where('user_id', $budget->user_id)->where('name', $budget->name)->first();
                    if ($component) {
                        $bl->component_id = $component->id;
                        $bl->save();
                    }
                }
            }
        );
    }

    public function dropBudgetIdColumnInBudgetLimits()
    {
        Schema::table(
            'budget_limits', function (Blueprint $table) {
            $table->dropForeign('bid_foreign');
            $table->dropColumn('budget_id'); // also drop foreign key!
        }
        );
    }

    public function moveBackEntriesForBudgetsInJoinedTable()
    {
        $set = DB::table('budget_transaction_journal')->get();
        foreach ($set as $entry) {
            $budget = Budget::find($entry->budget_id);
            if ($budget) {
                $component = Component::where('class', 'Budget')->where('name', $budget->name)->where('user_id', $budget->user_id)->first();
                if ($component) {
                    DB::table('component_transaction_journal')->insert(
                        [
                            'component_id'           => $component->id,
                            'transaction_journal_id' => $entry->transaction_journal_id
                        ]
                    );
                }

            }
        }

    }

    public function moveBackEntriesForCategoriesInJoinedTable()
    {
        $set = DB::table('category_transaction_journal')->get();
        foreach ($set as $entry) {
            $category = Category::find($entry->category_id);
            if ($category) {
                $component = Component::where('class', 'Category')->where('name', $category->name)->where('user_id', $category->user_id)->first();
                if ($component) {
                    DB::table('component_transaction_journal')->insert(
                        [
                            'component_id'           => $component->id,
                            'transaction_journal_id' => $entry->transaction_journal_id
                        ]
                    );
                }

            }
        }

    }

    public function dropBudgetJournalTable()
    {
        Schema::dropIfExists('budget_transaction_journal');
    }

    public function dropCategoryJournalTable()
    {
        Schema::dropIfExists('category_transaction_journal');
    }

    public function dropBudgetTable()
    {
        Schema::dropIfExists('budgets');
    }

    public function dropCategoryTable()
    {
        Schema::dropIfExists('categories');
    }

    public function renameBudgetLimits()
    {
        Schema::rename('budget_limits', 'limits');
    }

    public function renamePiggyBankEvents()
    {
        Schema::rename('piggy_bank_events', 'piggybank_events');

    }

    public function renameBudgetLimitToBudgetInRepetitions()
    {
        Schema::table(
            'limit_repetitions', function (Blueprint $table) {
            $table->renameColumn('budget_limit_id', 'limit_id');
        }
        );
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->createBudgetTable(); // 1.
        $this->createCategoryTable(); // 2.
        $this->createBudgetJournalTable(); // 3
        $this->createCategoryJournalTable(); // 4.
        $this->moveBudgets(); // 5.
        $this->moveCategories(); // 6.
        $this->correctNameForBudgetLimits(); // 7.
        $this->correctNameForPiggyBankEvents(); // 8.
        $this->renameBudgetToBudgetLimitInRepetitions(); // 9.
        $this->addBudgetIdFieldToBudgetLimits(); // 10.
        $this->moveComponentIdToBudgetId(); // 11.
        $this->dropComponentJournalTable(); // 12.
        $this->dropComponentRecurringTransactionTable(); // 13.
        $this->dropComponentTransactionTable(); // 14.
        $this->dropPiggyBankIdFromTransactions(); // 15.
        $this->dropComponentIdFromBudgetLimits(); // 16.


        //        $this->doRenameInLimitRepetitions();
        //        $this->doBudgetLimits();
        //        $this->doPiggyBankEvents();
        //        $this->doCreateCategoryTables();
        //        $this->doUpdateTransactionTable();
        //        $this->doDropCompRecurTable();
        //        $this->doDropCompTransTable();
        //        $this->doMoveBudgets();
        //        $this->doMoveCategories();
        //        $this->doMoveLimitReferences();


    }

    public function createBudgetTable()
    {
        Schema::create(
            'budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name', 50);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unique(['user_id', 'name']);
        }
        );


    }

    public function createCategoryTable()
    {
        Schema::create(
            'categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name', 50);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unique(['user_id', 'name']);
        }
        );
    }

    public function createBudgetJournalTable()
    {
        Schema::create(
            'budget_transaction_journal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('budget_id')->unsigned();
            $table->integer('transaction_journal_id')->unsigned();
            $table->foreign('budget_id')->references('id')->on('budgets')->onDelete('cascade');
            $table->foreign('transaction_journal_id')->references('id')->on('transaction_journals')->onDelete('cascade');
            $table->unique(['budget_id', 'transaction_journal_id'], 'budid_tjid_unique');
        }
        );
    }

    public function createCategoryJournalTable()
    {
        Schema::create(
            'category_transaction_journal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('transaction_journal_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('transaction_journal_id')->references('id')->on('transaction_journals')->onDelete('cascade');
            $table->unique(['category_id', 'transaction_journal_id'], 'catid_tjid_unique');
        }
        );
    }

    public function moveBudgets()
    {
        Component::where('class', 'Budget')->get()->each(
            function (Component $c) {
                $entry  = [
                    'user_id' => $c->user_id,
                    'name'    => $c->name

                ];
                $budget = Budget::firstOrCreate($entry);
                Log::debug('Migrated budget #' . $budget->id . ': ' . $budget->name);
                // create entry in budget_transaction_journal
                $connections = DB::table('component_transaction_journal')->where('component_id', $c->id)->get();
                foreach ($connections as $connection) {
                    DB::table('budget_transaction_journal')->insert(
                        [
                            'budget_id'              => $budget->id,
                            'transaction_journal_id' => $connection->transaction_journal_id
                        ]
                    );
                }
            }
        );
    }

    public function moveCategories()
    {
        Component::where('class', 'Category')->get()->each(
            function (Component $c) {
                $entry    = [
                    'user_id' => $c->user_id,
                    'name'    => $c->name

                ];
                $category = Category::firstOrCreate($entry);
                Log::debug('Migrated category #' . $category->id . ': ' . $category->name);
                // create entry in category_transaction_journal
                $connections = DB::table('component_transaction_journal')->where('component_id', $c->id)->get();
                foreach ($connections as $connection) {
                    DB::table('category_transaction_journal')->insert(
                        [
                            'category_id'            => $category->id,
                            'transaction_journal_id' => $connection->transaction_journal_id
                        ]
                    );
                }
            }
        );
    }

    public function correctNameForBudgetLimits()
    {
        Schema::rename('limits', 'budget_limits');
    }

    public function correctNameForPiggyBankEvents()
    {
        Schema::rename('piggybank_events', 'piggy_bank_events');

    }

    public function renameBudgetToBudgetLimitInRepetitions()
    {
        Schema::table(
            'limit_repetitions', function (Blueprint $table) {
            $table->renameColumn('limit_id', 'budget_limit_id');
        }
        );
    }

    public function addBudgetIdFieldToBudgetLimits()
    {
        Schema::table(
            'budget_limits', function (Blueprint $table) {
            $table->integer('budget_id', false, true)->nullable()->after('updated_at');
            $table->foreign('budget_id', 'bid_foreign')->references('id')->on('budgets')->onDelete('cascade');
        }
        );
    }

    public function moveComponentIdToBudgetId()
    {
        BudgetLimit::get()->each(
            function (BudgetLimit $bl) {
                $component = Component::find($bl->component_id);
                if ($component) {
                    $budget = Budget::whereName($component->name)->whereUserId($component->user_id)->first();
                    if ($budget) {
                        $bl->budget_id = $budget->id;
                        $bl->save();
                    }
                }
            }
        );

    }

    public function dropComponentJournalTable()
    {
        Schema::dropIfExists('component_transaction_journal');
    }

    public function dropComponentRecurringTransactionTable()
    {
        Schema::dropIfExists('component_recurring_transaction');
    }

    public function dropComponentTransactionTable()
    {
        Schema::dropIfExists('component_transaction');
    }

    public function dropPiggyBankIdFromTransactions()
    {

        Schema::table(
            'transactions', function (Blueprint $table) {
            if (Schema::hasColumn('transactions', 'piggybank_id')) {
                $table->dropForeign('transactions_piggybank_id_foreign');
                $table->dropColumn('piggybank_id');
            }
        }
        );
    }

    public function dropComponentIdFromBudgetLimits()
    {
        Schema::table(
            'budget_limits', function (Blueprint $table) {
            $table->dropForeign('limits_component_id_foreign');
            $table->dropColumn('component_id');
        }
        );
    }

    //
    //    public function doRenameInLimitRepetitions()
    //    {
    //        Schema::table(
    //            'limit_repetitions', function (Blueprint $table) {
    //            $table->renameColumn('limit_id', 'budget_limit_id');
    //        }
    //        );
    //    }
    //
    //    public function doBudgetLimits()
    //    {
    //        Schema::rename('limits', 'budget_limits');
    //        Schema::table(
    //            'budget_limits', function (Blueprint $table) {
    //            $table->integer('budget_id')->unsigned()->after('updated_at');
    //            $table->foreign('budget_id', 'bid_foreign')->references('id')->on('budgets')->onDelete('cascade');
    //        }
    //        );
    //    }
    //
    //    public function doPiggyBankEvents()
    //    {
    //        Schema::rename('piggybank_events', 'piggy_bank_events');
    //
    //    }
    //
    //    public function doCreateCategoryTables()
    //    {
    //        Schema::create(
    //            'categories', function (Blueprint $table) {
    //            $table->increments('id');
    //            $table->timestamps();
    //            $table->softDeletes();
    //            $table->string('name', 50);
    //            $table->integer('user_id')->unsigned();
    //            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    //            $table->unique(['user_id', 'name']);
    //        }
    //        );
    //        Schema::create(
    //            'category_transaction_journal', function (Blueprint $table) {
    //            $table->increments('id');
    //            $table->integer('category_id')->unsigned();
    //            $table->integer('transaction_journal_id')->unsigned();
    //            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    //            $table->foreign('transaction_journal_id')->references('id')->on('transaction_journals')->onDelete('cascade');
    //            $table->unique(['category_id', 'transaction_journal_id'], 'catid_tjid_unique');
    //        }
    //        );
    //
    //    }
    //
    //    public function doUpdateTransactionTable()
    //    {
    //        Schema::table(
    //            'transactions', function (Blueprint $table) {
    //            $table->dropForeign('transactions_piggybank_id_foreign');
    //            #$table->dropIndex('transactions_piggybank_id_foreign');
    //            $table->dropColumn('piggybank_id');
    //        }
    //        );
    //    }
    //
    //    public function doDropCompRecurTable()
    //    {
    //        Schema::drop('component_recurring_transaction');
    //    }
    //
    //    public function doDropCompTransTable()
    //    {
    //        Schema::drop('component_transaction');
    //    }
    //
    //    public function doMoveBudgets()
    //    {
    //        Component::where('class', 'Budget')->get()->each(
    //            function (Component $c) {
    //                $entry  = [
    //                    'user_id' => $c->user_id,
    //                    'name'    => $c->name
    //
    //                ];
    //                $budget = Budget::firstOrCreate($entry);
    //                Log::debug('Migrated budget #' . $budget->id . ': ' . $budget->name);
    //                // create entry in budget_transaction_journal
    //                $connections = DB::table('component_transaction_journal')->where('component_id', $c->id)->get();
    //                foreach ($connections as $connection) {
    //                    DB::table('budget_transaction_journal')->insert(
    //                        [
    //                            'budget_id'              => $budget->id,
    //                            'transaction_journal_id' => $connection->transaction_journal_id
    //                        ]
    //                    );
    //                }
    //            }
    //        );
    //    }
    //
    //    public function doMoveCategories()
    //    {
    //        Component::where('class', 'Category')->get()->each(
    //            function (Component $c) {
    //                $entry    = [
    //                    'user_id' => $c->user_id,
    //                    'name'    => $c->name
    //
    //                ];
    //                $category = Category::firstOrCreate($entry);
    //                Log::debug('Migrated category #' . $category->id . ': ' . $category->name);
    //                // create entry in category_transaction_journal
    //                $connections = DB::table('component_transaction_journal')->where('component_id', $c->id)->get();
    //                foreach ($connections as $connection) {
    //                    DB::table('category_transaction_journal')->insert(
    //                        [
    //                            'category_id'            => $category->id,
    //                            'transaction_journal_id' => $connection->transaction_journal_id
    //                        ]
    //                    );
    //                }
    //            }
    //        );
    //    }
    //
    //    public function doMoveLimitReferences()
    //    {
    //        throw new \FireflyIII\Exception\FireflyException('TODO');
    //    }

}
