<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('admin_role', function (Blueprint $table) {
            $table->bigInteger('admin_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table-> primary(['admin_id','role_id']);
            $table->foreign('admin_id')-> references('id')-> on ('admin');
            $table->foreign('role_id')-> references('id')-> on ('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('admin_role');
    }
}
