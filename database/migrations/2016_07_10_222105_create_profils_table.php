<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kid_id')->unsigned()->index();
            $table->boolean('orthopedagogie');
            $table->text('reason_ortho')->nullable;
            $table->boolean('psy_ed');
            $table->text('reason_psy_ed')->nullable();
            $table->boolean('psy_eval');
            $table->date('eval_date')->nullable();
            $table->longtext('conclusion')->nullable();
            $table->boolean('medication');
            $table->string('type')->nullable();
            $table->boolean('social_worker');
            $table->string('reason_sw')->nullable();
            $table->boolean('pi');
            $table->date('last')->nullable();
            $table->boolean('allergie');
            $table->string('type_allergie')->nullable();
            $table->boolean('learning_problem');
            $table->longtext('type_problem')->nullable();
            $table->longtext('solution_try')->nullable();
            $table->string('french_level');
            $table->string('math_level');
            $table->longtext('other')->nullable();
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
        Schema::drop('profils');
    }
}
