<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HeadSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(LogicielSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ContactSeeder::class);
    }
}
