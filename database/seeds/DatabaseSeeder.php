<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SoccerSeasonsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(FixturesTableSeeder::class);
        Model::reguard();
    }
}
