<?php


use App\SoccerSeason;
use App\Team;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{


    public function run()
    {
        DB::table('teams')->delete();

        $season = SoccerSeason::where('league', 'TUR')->first();

        $team = new Team;
        $team->name = 'BEŞİKTAŞ A.Ş.';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'FENERBAHÇE A.Ş';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'GALATASARAY A.Ş.';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'MEDİPOL BAŞAKŞEHİR FK';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'AKHİSAR BELEDİYE GENÇLİK VE SPOR';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'KASIMPAŞA A.Ş.';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'TORKU KONYASPOR';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'ÇAYKUR RİZESPOR A.Ş.';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'TRABZONSPOR A.Ş.';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'ANTALYASPOR A.Ş.';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'BURSASPOR';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'OSMANLISPOR FUTBOL KULÜBÜ';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'GAZİANTEPSPOR';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'GENÇLERBİRLİĞİ';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'KAYSERİSPOR';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'MEDICANA SİVASSPOR';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'MERSİN İDMANYURDU';
        $season->teams()->save($team);

        $team = new Team;
        $team->name = 'ESKİŞEHİRSPOR';
        $season->teams()->save($team);


    }

}