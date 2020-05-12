<?php

use Illuminate\Database\Seeder;

class HeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heads')->insert([
            // 'url_img' =>"",
            'title' => "Welcome to our site",
            'descirption' => "We are Lancar, a design agency doing cool things with Photoshop and WordPress. Take a look around to see what we can do for you!",
            "created_at" => now(),
        ]);
    }
}
