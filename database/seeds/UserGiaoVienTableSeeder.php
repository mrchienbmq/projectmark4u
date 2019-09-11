<?php

use Illuminate\Database\Seeder;

class UserGiaoVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserGiaoVienModel::class,20)->create();
    }
}
