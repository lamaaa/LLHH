<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalculationQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculcation_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('difficulty');
            $table->string('topic');
            $table->string('source');
            $table->text('answer');
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
        Schema::drop('calculcation_questions');
    }
}
