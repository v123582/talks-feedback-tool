<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('speakers', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('photo');
          $table->string('vphoto');
          $table->string('tphoto');
          $table->string('topic');
          $table->string('description');
          $table->string('event');
          $table->string('period');
          $table->rememberToken();
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('speakers');
    }
}
