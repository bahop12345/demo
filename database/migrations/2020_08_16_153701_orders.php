<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedinteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->string('name');
            $table->string('city');
            $table->string('district');
            $table->string('commune');
            $table->string('email');
            $table->float('phone');
            $table->string('note');
            $table->float('total_price');
            $table->bigInteger('payment_id')->unsigned();
            $table->foreign('payment_id')->references('id')->on('payment_method');
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
        Schema::dropIfExists('orders');
    }
}
