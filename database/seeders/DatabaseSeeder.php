<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tournament;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //
    	// Je kunt hier je eigen seeders invoegen:
        //
//team

    $team = new \App\Models\Team();
    $team->name = "German National Quidditch team";
    $team->type = "country";
    $team->origin = "Duitsland";
    $team->save();

    $team = new \App\Models\Team();
    $team->name = "Hufflepuff";
    $team->type = "school";
    $team->origin = "Zweinstein";
    $team->save();
    $team = new \App\Models\Team();
    $team->name = "4S Quidditch Team";
    $team->type = "commercial";
    $team->save();


     // SPELERS

    $characters = ["Ludo Bagman", "Argus Filch", "Marvolo Gaunt", "Rubeus Hagrid", "Lee Jordan", "Viktor Krum", "Draco Malfoy", "Padma Patil", "Newt Scamander", "Fred Weasley", "Oliver Wood", "Horace Slughorn", "Alicia Spinnet", "Garrick Ollivander", "Luna Lovegood", "Neville Longbottom", "Gregory Goyle", "Colin Creevey", "Susan Bones", "Hannah Abbott"];
    $types = ["chaser", "beater", "keeper", "seeker"];
    $teams = \App\Models\Team::all();



        //Tournament 1
        $tournament = new Tournament();
        $tournament->name = "EK Zwerkbal " . date('Y');
        $tournament->date = date("Y-m-d", strtotime("14 days"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Tournament 2
        $tournament = new Tournament();
        $tournament->name = "Zwerkbalcup";
        $tournament->date = date("Y-m-d", strtotime("-8 months"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Tournament 3
        $tournament = new Tournament();
        $tournament->name = "Scholentoernooi " . (date('Y'));
        $tournament->date = date("Y-m-d", strtotime("13 months"));
        $tournament->save();

        //Tournament 4
        $tournament = new Tournament();
        $tournament->name = "ZwerkbalBeker";
        $tournament->date = date("Y-m-d");
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();
                // SPELERS
                //
                $characters = ["Ludo Bagman", "Argus Filch", "Marvolo Gaunt", "Rubeus Hagrid", "Lee Jordan", "Viktor Krum", "Draco Malfoy", "Padma Patil", "Newt Scamander", "Fred Weasley", "Oliver Wood", "Horace Slughorn", "Alicia Spinnet", "Garrick Ollivander", "Luna Lovegood", "Neville Longbottom", "Gregory Goyle", "Colin Creevey", "Susan Bones", "Hannah Abbott"];
                $types = ["chaser", "beater", "keeper", "seeker"];
                $teams = \App\Models\Team::all();

                foreach($characters as $character)
                {
                    $player = new \App\Models\Player();
                    $player->team_id = $teams->random()->id;
                    $player->name = $character;
                    $player->type = $types[array_rand($types)];
                    $player->save();
                }
        //
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        // ~!@#$%^&**()_
        // _)(*&^%$#@!~
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        //
    }
}

