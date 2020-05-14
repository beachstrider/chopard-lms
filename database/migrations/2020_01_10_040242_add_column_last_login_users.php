<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnLastLoginUsers extends Migration
{
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->timestamp('last_login')->after('already_login')->nullable()->default(NULL);
        });
    }

    public function down()
    {
        //
    }
}
