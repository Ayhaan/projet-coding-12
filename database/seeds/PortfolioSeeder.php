<?php

use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/1.jpg',
            'span' => 'Trilli Bi template',
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/2.jpg',
            'span' => 'Sit amet logo',
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/3.jpg',
            'span' => 'Aeria app page',
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/4.jpg',
            'span' => 'Etiam processus dynamicus',
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/5.jpg',
            'span' => 'March notare site',
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/6.jpg',
            'span' => 'Mirum est notare',
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/7.jpg',
            'span' => 'Trilli Bi template',
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/8.jpg',
            'span' => 'Celic template',
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/9.jpg',
            'span' => 'Sit amet logo',
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/10.jpg',
            'span' => 'Jalia business',
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/11.jpg',
            'span' => 'Mirum est notare',
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/12.jpg',
            'span' => 'Sit website logo',
            "created_at" => now()
        ]);
    }
}
