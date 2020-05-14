<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUserIdFeedbacks extends Migration
{
    public function up()
    {
        Schema::table('feedbacks', function (Blueprint $table) {
            $table->Integer('user_id')->after('avatar');
        });
    }

    public function down()
    {
        //
    }
}
