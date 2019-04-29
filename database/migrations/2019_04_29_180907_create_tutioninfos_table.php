<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutioninfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutioninfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('degree')->nullable();
            $table->string('salary')->nullable();
            $table->string('status')->nullable();
            $table->string('days')->nullable();
            $table->string('tution_style')->nullable();
            $table->string('learning_place')->nullable();
            $table->string('tution_approach')->nullable();
            $table->string('medium')->nullable();
            $table->string('preferred_class')->nullable();
            $table->string('preferred_subject')->nullable();
            $table->string('district')->nullable();
            $table->string('area')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tutioninfos');
    }
}
