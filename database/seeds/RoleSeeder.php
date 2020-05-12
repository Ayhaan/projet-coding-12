<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            "name" => "Ceo",
            "created_at" => now()   
            ]);
        DB::table('roles')->insert([
            "name" => "Developer",
            "created_at" => now()   
            ]);
        DB::table('roles')->insert([
            "name" => "Designer",
            "created_at" => now()   
            ]);
    }
}
