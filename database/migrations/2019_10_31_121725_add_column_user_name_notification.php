<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUserNameNotification extends Migration
{
    public function up()
    {
        Schema::table('notifications', function(Blueprint $table){
            $table->string('user_name')->after('icon')->nullable();
        });
    }

    public function down()
    {
        //
    }
}
