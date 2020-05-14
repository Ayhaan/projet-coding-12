<?php

use Illuminate\Database\Seeder;

class LogicielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logiciels')->insert([
            "name" => "design",
            "created_at" => now()   
            ]);
        DB::table('logiciels')->insert([
            "name" => "development",
            "created_at" => now()   
            ]);
        DB::table('logiciels')->insert([
            "name" => "branding",
            "created_at" => now()   
             ]);
    }
    
}
