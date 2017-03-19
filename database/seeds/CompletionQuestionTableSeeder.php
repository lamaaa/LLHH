<?php

use Illuminate\Database\Seeder;

class CompletionQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $completionQuestions = factory(\App\Models\CompletionQuestion::class)->times(50)->make();
        \App\Models\CompletionQuestion::insert($completionQuestions->toArray());
    }
}
