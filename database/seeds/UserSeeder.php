<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('users')->insert([
            "name"=> 'Ayhan',
            "email"=> 'ayhan@example.com',
            "password"=> bcrypt('ayhanayhan'),
            "role_id" => 1,
            "created_at" => now()   
        ]);
    }
}
