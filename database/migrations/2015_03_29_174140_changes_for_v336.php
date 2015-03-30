<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class ChangesForV336
 */
class ChangesForV336 extends Migration
{

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /**
         * ACCOUNTS
         */
        // change field to be cryptable.
        Schema::table(
            'accounts', function (Blueprint $table) {
            // drop foreign key:
            $table->dropForeign('accounts_user_id_foreign');

            // drop unique:
            $table->dropUnique('accounts_user_id_account_type_id_name_unique');
        }
        );

        Schema::table(
            'accounts', function (Blueprint $table) {
            $table->text('name')->change();
            $table->foreign('user_id', 'account_user_id')->references('id')->on('users')->onDelete('cascade');
        }
        );

        /**
         * BUDGETS
         */
        // add active/inactive and encrypt.
        Schema::table(
            'budgets', function (Blueprint $table) {
            $table->smallInteger('active', false, true)->default(1);
            $table->smallInteger('encrypted', false, true)->default(0);

            // drop foreign key:
            $table->dropForeign('budgets_user_id_foreign');

            // drop unique:
            $table->dropUnique('budgets_user_id_name_unique');

        }
        );
        Schema::table(
            'budgets', function (Blueprint $table) {
            $table->text('name')->change();
            $table->foreign('user_id', 'budget_user_id')->references('id')->on('users')->onDelete('cascade');
        }
        );


        /**
         * BILLS
         */
        // change field to be cryptable.
        Schema::table(
            'bills', function (Blueprint $table) {
            // drop foreign key:
            $table->dropForeign('bills_uid_for');

            // drop unique:
            $table->dropUnique('uid_name_unique');
        }
        );

        Schema::table(
            'bills', function (Blueprint $table) {
            // raw query:

            DB::insert('ALTER TABLE `bills` CHANGE `name` `name` TEXT NOT NULL');
            DB::insert('ALTER TABLE `bills` CHANGE `match` `match` TEXT NOT NULL');
            $table->smallInteger('name_encrypted', false, true)->default(0);
            $table->smallInteger('match_encrypted', false, true)->default(0);
            $table->foreign('user_id', 'bill_user_id')->references('id')->on('users')->onDelete('cascade');
        }
        );

        /**
         * CATEGORIES
         */
        Schema::table(
            'categories', function (Blueprint $table) {
            $table->smallInteger('encrypted', false, true)->default(0);

            // drop foreign key:
            $table->dropForeign('categories_user_id_foreign');

            // drop unique:
            $table->dropUnique('categories_user_id_name_unique');

        }
        );
        Schema::table(
            'categories', function (Blueprint $table) {
            $table->text('name')->change();
            $table->foreign('user_id', 'category_user_id')->references('id')->on('users')->onDelete('cascade');
        }
        );

        /**
         * PIGGY BANKS
         */
        Schema::table(
            'piggy_banks', function (Blueprint $table) {
            $table->smallInteger('encrypted', false, true)->default(0);

            // drop foreign:
            $table->dropForeign('piggybanks_account_id_foreign');

            // drop unique:
            $table->dropUnique('piggybanks_account_id_name_unique');

        }
        );
        Schema::table(
            'piggy_banks', function (Blueprint $table) {
            DB::insert('ALTER TABLE `piggy_banks` CHANGE `name` `name` TEXT NOT NULL');
            $table->dropColumn(['repeats', 'rep_length', 'rep_every', 'rep_times']);

            // create index again:
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
        }
        );

        /**
         * REMINDERS
         */
        Schema::table(
            'reminders', function (Blueprint $table) {
            $table->smallInteger('encrypted', false, true)->default(0);


        }
        );

        //
        //        Schema::table(
        //            'categories', function (Blueprint $table) {
        //            $table->smallInteger('encrypted', false, true)->default(0);
        //            $table->text('name')->change();
        //        }
        //        );
        //
        //        Schema::table(
        //            'piggy_banks', function (Blueprint $table) {
        //            $table->smallInteger('encrypted', false, true)->default(0);
        //            $table->text('name')->change();
        //            $table->dropColumn(['repeats', 'rep_length', 'rep_every', 'rep_times']);
        //        }
        //        );
        //        Schema::table(
        //            'reminders', function (Blueprint $table) {
        //            $table->smallInteger('encrypted', false, true)->default(0);
        //        }
        //        );


    }

}
