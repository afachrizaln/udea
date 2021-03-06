<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lecturer_id')->unsigned();
            $table->integer('chapter_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('slug')->unique();
            $table->timestamp('closed_at');
            $table->timestamps();

            $table->foreign('lecturer_id')->references('id')->on('lecturers')
				->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('chapter_id')->references('id')->on('chapters')
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
        Schema::dropIfExists('discussions');
    }
}
