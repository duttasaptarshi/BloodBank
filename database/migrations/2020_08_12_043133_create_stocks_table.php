<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->integer('A_pos');
            $table->integer('A_neg');
            $table->integer('B_pos');
            $table->integer('B_neg');
            $table->integer('O_pos');
            $table->integer('O_neg');
            $table->integer('AB_pos');
            $table->integer('AB_neg');
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
        Schema::dropIfExists('stocks');
    }
}
