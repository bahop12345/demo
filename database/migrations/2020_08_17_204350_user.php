<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
           $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->float('phone');
            $table->string('img');
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->string('remember_token')->nullable();
            $table->string('code')->nullable();
            $table->string('time_code')->nullable()->index();
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
       Schema::dropIfExists('user');
    }
}
