<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'logo' => "icon_pencil",
            'title' => "WEB DESIGN",
            'span' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.",
            "created_at" => now(),
        ]);
    
        DB::table('services')->insert([
            'logo' => "icon_cogs",
            'title' => "UI / UX",
            'span' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.",
            "created_at" => now(),
        ]);
    
        DB::table('services')->insert([
            'logo' => "social_twitter",
            'title' => "SOCIAL MEDIA",
            'span' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.",
            "created_at" => now(),
        ]);
    
        DB::table('services')->insert([
            'logo' => "icon_lightbulb",
            'title' => "BRANDING",
            'span' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.",
            "created_at" => now(),
        ]);
        DB::table('services')->insert([
            'logo' => "icon_lightbulb",
            'title' => "LOREM TEST LOREM",
            'span' => "LOREM TEST",
            "created_at" => now(),
        ]);
    }
}
