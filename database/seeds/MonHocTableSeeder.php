<?php

use Illuminate\Database\Seeder;

class MonHocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MonHocModel::class,10)->create();
    }
}
