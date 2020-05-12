<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            "name"=>"Jane Doe",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.",
            "descriptionSecondary"=>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram lorem.",
            "img_url" =>"assets/img/about/1.jpg",
            "facebook"=>"https://www.facebook.com/",
            "dribbble"=>"https://dribbble.com/",
            "twitter"=>"https://twitter.com/explore",
            "pinterest"=>"https://www.pinterest.fr/",
            "role_id"=> 1,
            "created_at" => now(),
        ]);
        DB::table('abouts')->insert([
            "name"=>"Tim Brown",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.",
            "descriptionSecondary"=>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram lorem.",
            "img_url" =>"assets/img/about/2.jpg",
            "facebook"=>"https://www.facebook.com/",
            "dribbble"=>"https://dribbble.com/",
            "twitter"=>"https://twitter.com/explore",
            "pinterest"=>"https://www.pinterest.fr/",
            "role_id"=> 2,
            "created_at" => now(),
        ]);
        DB::table('abouts')->insert([
            "name"=>"Sarah Red",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.",
            "descriptionSecondary"=>"Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram lorem.",
            "img_url" =>"assets/img/about/3.jpg",
            "facebook"=>"https://www.facebook.com/",
            "dribbble"=>"https://dribbble.com/",
            "twitter"=>"https://twitter.com/explore",
            "pinterest"=>"https://www.pinterest.fr/",
            "role_id"=> 3,
            "created_at" => now(),

        ]);
    }
}
