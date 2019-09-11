<?php

use Illuminate\Database\Seeder;

class ShowLopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ShowLopModel::class,10)->create();
    }
}
