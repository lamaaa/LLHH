<?php

use Illuminate\Database\Seeder;

class CalculationQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calculationQuestions = factory(\App\Models\CalculationQuestion::class)->times(50)->make();
        \App\Models\CalculationQuestion::insert($calculationQuestions->toArray());
    }
}
