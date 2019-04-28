<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->date('bod')->nullable();
            $table->string('blood')->nullable();
            $table->string('sex')->nullable();
            $table->tinyInteger('interest')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('religion')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->text('experiance')->nullable();
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
        Schema::dropIfExists('personal_infos');
    }
}
