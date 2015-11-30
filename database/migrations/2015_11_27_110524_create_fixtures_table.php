<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('soccer_season_id')->unsigned()->index()->nullable();
            $table->foreign('soccer_season_id')->references('id')->on('soccer_seasons')->onDelete('cascade');

            $table->integer('home_team_id')->unsigned()->index()->nullable();
            $table->foreign('home_team_id')->references('id')->on('teams')->onDelete('cascade');

            $table->integer('away_team_id')->unsigned()->index()->nullable();
            $table->foreign('away_team_id')->references('id')->on('teams')->onDelete('cascade');

            $table->integer('goals_home_team')->unsigned()->default(0);
            $table->integer('goals_away_team')->unsigned()->default(0);

            $table->date('match_date');
            $table->string('status');
            $table->integer('week')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fixtures');
    }
}
