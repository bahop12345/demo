<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->bigInteger('product_id')->unsigned();
        $table->foreign('product_id')-> references('id')-> on ('product');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')-> references('id')-> on ('user');
        $table->string('content');
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
        Schema::dropIfExists('comments');
    }
}
