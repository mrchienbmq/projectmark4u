<?php

use Illuminate\Database\Seeder;

class SinhVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SinhVienModel::class,10)->create();
    }
}
