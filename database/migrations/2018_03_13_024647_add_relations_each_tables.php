<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationsEachTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trade_histories', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_item_id')->references('id')->on('user_items')->onDelete('cascade');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
        });
        Schema::table('accounts', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('user_items', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
        Schema::table('memos', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_item_id')->references('id')->on('user_items')->onDelete('cascade');
        });
        Schema::table('kind_allots', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kind_id')->references('id')->on('kinds')->onDelete('cascade');
        });
        Schema::table('plans', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kind_id')->references('id')->on('kinds')->onDelete('cascade');
            $table->foreign('user_item_id')->references('id')->on('user_items')->onDelete('cascade');
        });
        Schema::table('items', function (Blueprint $table) {
            //$table->foreign('asset_type_id')->references('id')->on('asset_types')->onDelete('cascade');
        });
        Schema::table('etfs', function (Blueprint $table) {
            $table->foreign('kind_id')->references('id')->on('kinds')->onDelete('cascade');
            $table->foreign('etf_type_id')->references('id')->on('etf_types')->onDelete('cascade');
        });
        Schema::table('stocks', function (Blueprint $table) {
            $table->foreign('kind_id')->references('id')->on('kinds')->onDelete('cascade');
        });
        Schema::table('kinds', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('kinds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
