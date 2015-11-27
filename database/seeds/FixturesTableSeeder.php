<?php


use App\SoccerSeason;
use App\Fixture;
use App\Team;
use Illuminate\Database\Seeder;

class FixturesTableSeeder extends Seeder
{


    public function run()
    {
        DB::table('fixtures')->delete();

        $season = SoccerSeason::where('league', 'TUR')->firstOrFail();
        $fixture = Fixture::create(['week' => 1, 'soccer_season_id' => $season->id]);
        $fixture->setAwayTeam(Team::where('name', 'FENERBAHÇE A.Ş')->firstOrFail());
        $fixture->setHomeTeam(Team::where('name', 'ESKİŞEHİRSPOR')->firstOrFail());
        $fixture->setScore(2,0);
        $fixture->match_date = \Carbon\Carbon::create(2015,8,14);
        $fixture->status = 'FINISHED';
        $fixture->save();

   }

}