<?php

use Illuminate\Database\Seeder;

class ChapterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chapters = factory(\App\Models\Chapter::class)->times(120)->make();
        \App\Models\Chapter::insert($chapters->toArray());
    }
}
