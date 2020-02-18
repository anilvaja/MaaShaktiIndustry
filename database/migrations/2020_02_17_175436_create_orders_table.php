<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_type')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->integer('weight')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->dateTime('expected_delivery_date')->nullable();
            $table->text('work_order_no')->nullable();
            $table->dateTime('purchase_order_date')->nullable();
            $table->string('purchase_order_number')->nullable();
            $table->float('price')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->string('status');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('order_type')->references('id')->on('order_types');
            $table->foreign('company_id')->references('id')->on('companies');
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
