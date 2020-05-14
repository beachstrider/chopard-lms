<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnAvatarAdmins extends Migration
{
    public function up()
    {
        Schema::table('admins', function(Blueprint $table){
            $table->string('avatar')->nullable()->after('email');
        });
    }

    public function down()
    {
        //
    }
}
