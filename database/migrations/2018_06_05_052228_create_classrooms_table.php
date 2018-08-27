<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->integer('lecturer_id')->unsigned();
            $table->string('name');
            $table->string('public_key');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')
				->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('lecturer_id')->references('id')->on('lecturers')
				->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
