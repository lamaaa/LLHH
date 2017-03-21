<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choiceQuestions = factory(\App\Models\Question::class, 'choice')->times(50)->make();
        $completionQuestions = factory(\App\Models\Question::class, 'completion')->times(50)->make();
        $calculationQuestions = factory(\App\Models\Question::class, 'calculation')->times(50)->make();
        \App\Models\Question::insert($choiceQuestions->toArray());
        \App\Models\Question::insert($completionQuestions->toArray());
        \App\Models\Question::insert($calculationQuestions->toArray());
    }
}
