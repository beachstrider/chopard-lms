<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesUsersTable extends Migration
{
    public function up()
    {
        Schema::create('activities_users', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('activity_id');

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('activity_id')
                  ->references('id')
                  ->on('activities')
                  ->onDelete('cascade');             
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('activities_users');
    }

}

