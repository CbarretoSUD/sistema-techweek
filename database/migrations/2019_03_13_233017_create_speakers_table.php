<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeakersTable extends Migration
{
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 80);
            $table->string('photo', 68)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('speakers');
    }
}
