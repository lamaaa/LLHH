<?php

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = factory(\App\Models\Module::class)->times(1)->make();
        \App\Models\Module::insert($modules->toArray());
    }
}
