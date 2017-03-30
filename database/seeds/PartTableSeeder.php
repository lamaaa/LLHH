<?php

use Illuminate\Database\Seeder;

class PartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parts = factory(\App\Models\Part::class)->times(5)->make();
        \App\Models\Part::insert($parts->toArray());
    }
}
