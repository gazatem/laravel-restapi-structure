<?php


use App\SoccerSeason;
use Illuminate\Database\Seeder;

class SoccerSeasonsTableSeeder extends Seeder
{

    public function __construct()
    {

    }

    public function run()
    {
        DB::table('soccer_seasons')->delete();
        SoccerSeason::create(['caption' => 'Spor Toto Süper Lig', 'league' => 'TUR', 'year' => '2015' ]);
    }

}