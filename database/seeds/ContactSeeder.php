<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            "description" => "For every question, information or just to say 'Hi', here is how you can get in touch with us. Send us an email or come visit us!",
            "adress" => "Principe Amedeo 9, Torino, Italy",
            "phone" => "0039 333 12 68 347",
            "email" => "hi@yourdomain.com",
            "created_at" => now(),
        ]);
    }
}
