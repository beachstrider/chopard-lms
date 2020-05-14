<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnFirstTimeLoginUsers extends Migration
{
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->boolean('already_login')->after('profile_complete')->default(0);
        });
    }

    public function down()
    {
        //
    }
}
