<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_homeworks', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start');
            $table->date('end');
            $table->string('lecture')->nullable();
            $table->string('grammaire')->nullable();
            $table->string('vocabulaire')->nullable();
            $table->string('conjugaison')->nullable();
            $table->string('mathematique_concept')->nullable();
            $table->string('mathematique_resolution')->nullable();
            $table->string('univers_social')->nullable();
            $table->string('arts')->nullable();
            $table->string('science')->nullable();
            $table->string('ecr')->nullable();
            $table->string('devoir_mathematique')->nullable();
            $table->string('devoir_francais')->nullable();
            $table->string('devoir_autres')->nullable();
            $table->string('anglais')->nullable();
            $table->string('musique')->nullable();
            $table->string('edu')->nullable();
            $table->string('signature')->nullable();
            $table->string('remettre')->nullable();
            $table->integer('admin_id')->unsigned()->nullable();
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
        Schema::drop('form_homeworks');
    }
}
