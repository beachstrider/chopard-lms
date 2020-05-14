<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnReadAdminNotification extends Migration
{
    public function up()
    {
        Schema::table('admin_notification', function(Blueprint $table){
            $table->boolean('read')->default(0);
        });
    }

    public function down()
    {
        //
    }
}
