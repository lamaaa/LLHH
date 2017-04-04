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
        $choiceQuestions = factory(\App\Models\Question::class, 'choice')->times(300)->make();
        $completionQuestions = factory(\App\Models\Question::class, 'completion')->times(300)->make();
        $calculationQuestions = factory(\App\Models\Question::class, 'calculation')->times(300)->make();
        \App\Models\Question::insert($choiceQuestions->toArray());
        \App\Models\Question::insert($completionQuestions->toArray());
        \App\Models\Question::insert($calculationQuestions->toArray());
    }
}
