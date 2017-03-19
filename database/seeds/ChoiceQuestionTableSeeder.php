<?php

use Illuminate\Database\Seeder;

class ChoiceQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choiceQuestions = factory(\App\Models\ChoiceQuestion::class)->times(50)->make();
        \App\Models\ChoiceQuestion::insert($choiceQuestions->toArray());
    }
}
