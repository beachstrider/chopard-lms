<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('fname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('verified')->default(false);
            $table->string('phone')->nullable();
            $table->date('birth')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('saleschannel')->nullable();
            $table->string('position')->nullable();
            $table->string('others')->nullable();
            $table->string('appname')->nullable();
            $table->string('appcode')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('profile_complete')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
