<?php

use Illuminate\Database\Seeder;

class StudentPointTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DiemModel::class,20)->create();
    }
}
