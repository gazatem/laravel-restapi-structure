<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{

    protected $table = 'fixtures';

    protected $fillable = ['id', 'week'];


    public function awayTeam()
    {
        return $this->hasOne('App\Team', 'id', 'away_team_id');
    }

    public function homeTeam()
    {
        return $this->hasOne('App\Team', 'id', 'home_team_id');
    }

    public function soccerSeason()
    {
        return $this->hasOne('App\SoccerSeason');
    }

    public function setAwayTeam(Team $team){
        $this->away_team_id = $team->id;
        $this->save();
    }


    public function setHomeTeam(Team $team){
        $this->home_team_id = $team->id;
        $this->save();
    }

    public function setScore($goals_home_team = 0, $goals_away_team = 0)
    {
        $this->goals_home_team = $goals_home_team;
        $this->goals_away_team = $goals_away_team;
        $this->save();
    }
}
