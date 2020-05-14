<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagehistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('messagehistories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('list');
            $table->string('sender')->nullable();
            $table->string('attachments')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('messagehistories');
    }
}
