<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
/*        $this->call(KhoaHocTableSeeder::class);
        $this->call(LopHocTableSeeder::class);
        $this->call(GiaoVienTableSeeder::class);
        $this->call(SinhVienTableSeeder::class);
        $this->call(MonHocTableSeeder::class);
        $this->call(StudentPointTableSeeder::class);
       $this->call(ShowLopTableSeeder::class);
       $this->call(UserGiaoVienTableSeeder::class);*/
    }
}
