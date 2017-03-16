<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompletionQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completion_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('difficulty');
            $table->string('topic');
            $table->string('source');
            $table->string('answer');
            $table->boolean('is_old');
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
        Schema::drop('completion_questions');
    }
}
