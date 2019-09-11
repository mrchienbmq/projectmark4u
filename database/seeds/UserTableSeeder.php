<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /*    DB::table("users")->truncate();
        App\User::create([
           "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("123456789"),


        ]);*/
        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'admin@gmail.com',  "password" => bcrypt("123456789"), 'role' => 1],
            ['name' => 'teacher', 'email' => 'bnv@gmail.com',  "password" => bcrypt("123456789"), 'role' => 2],
            ['name' => 'student', 'email' => 'cnv@gmail.com',  "password" => bcrypt("123456789"), 'role' => 3],

        ]);

    }
}
