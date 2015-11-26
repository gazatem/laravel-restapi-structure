<?php

namespace App\Console\Commands;

use GuzzleHttp;
use Illuminate\Console\Command;

class UpdateSeasons extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'season:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://api.football-data.org/v1/soccerseasons/');

// {"type":"User"...'



    }
}
