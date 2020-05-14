<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
   public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('chapter', 4, 1);
            $table->unsignedTinyInteger('activity');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }

}

