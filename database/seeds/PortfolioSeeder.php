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
            "logiciel_id" => 1,
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/2.jpg',
            'span' => 'Sit amet logo',
            "logiciel_id" => 2,
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/3.jpg',
            'span' => 'Aeria app page',
            "logiciel_id" => 2,
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/4.jpg',
            'span' => 'Etiam processus dynamicus',
            "logiciel_id" => 3,
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/5.jpg',
            'span' => 'March notare site',
            "logiciel_id" => 3,
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/6.jpg',
            'span' => 'Mirum est notare',
            "logiciel_id" => 2,
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/7.jpg',
            'span' => 'Trilli Bi template',
            "logiciel_id" => 1,
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/8.jpg',
            'span' => 'Celic template',
            "logiciel_id" => 3,
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/9.jpg',
            'span' => 'Sit amet logo',
            "logiciel_id" => 1,
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/10.jpg',
            'span' => 'Jalia business',
            "logiciel_id" => 2,
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/11.jpg',
            'span' => 'Mirum est notare',
            "logiciel_id" => 1,
            "created_at" => now()
        ]);
        DB::table('portfolios')->insert([
            'url_img' => 'assets/img/portfolio/12.jpg',
            'span' => 'Sit website logo',
            "logiciel_id" => 3,
            "created_at" => now()
        ]);
    }
}
