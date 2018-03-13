<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etfs', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('kind_id');
            $table->unsignedInteger('etf_type_id');
            $table->string('brand');
            $table->string('index_tracked');
            $table->date('inception');
            $table->string('tax');
            $table->float('expense_ratio');
            $table->string('volatility');
            $table->string('method');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etfs');
    }
}
