<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorrequests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('district_id')->nullable();
            $table->integer('area_id')->nullable();
            $table->integer('medium_id')->nullable();
            $table->integer('class_id')->nullable();
            $table->integer('subject_id')->nullable();
            $table->string('school_name');
            $table->integer('day_id')->nullable();
            $table->integer('gender_id')->nullable();
            $table->integer('salary_id')->nullable();
            $table->string('address');
            $table->string('mobile');
            $table->string('email');
            $table->string('note');
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
        Schema::dropIfExists('tutorrequests');
    }
}
