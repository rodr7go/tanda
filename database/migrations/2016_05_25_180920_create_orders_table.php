<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table){
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('serie_id')->unsigned();
            $table->foreign('serie_id')->references('id')->on('series');
            $table->integer('weeks')->unsigned()->nullable();
            $table->string('product');
            $table->string('page', 20);
            $table->string('model', 20)->nullable();
            $table->string('id_product', 20);
            $table->string('numb_size');
            $table->decimal('store_cost', 10, 2)->unsigned();
            $table->decimal('client_cost', 10, 2)->unsigned();
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
        Schema::drop('orders');
    }
}
