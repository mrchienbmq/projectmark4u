<?php

use Illuminate\Database\Seeder;

class GiaoVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\GiaoVienModel::class,10)->create();
    }
}
