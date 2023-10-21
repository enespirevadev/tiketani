<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('users')->truncate();
        // DB::table('venues')->truncate();
        // DB::table('teams')->truncate();
        // DB::table('tournaments')->truncate();

        DB::table('users')->insert([
            'name' => 'TIKETANI Admin',
            'email' => 'admin@tiketani.com',
            'password' => '$2y$10$/YCyN/tyaNHR02xbSBLKDObsYDnQhmMsMWjrYL2cKoJ5dcpb896N6',
        ]);

        $venues = [
            'Suhareka City Stadium',
            'Zahir Pajaziti Stadium',
            'Gjilan City Stadium',
            'Liman Gegaj Stadium',
            'Fadil Vokrri Stadium',
            'Perparim Thaqi Stadium',
            'Gjilan City Stadium',
            '18 Qershori Stadium',
            'Rexhep Rexhepi Stadium',
            'Fushe Kosova City Stadium',
        ];
        foreach ($venues as $venue) {
            DB::table('venues')->insert([
                'name' => $venue,
            ]);
        }

        $teams = [
            'FC Ballkani',
            'KF Llapi',
            'FC Drita',
            'FC Malisheva',
            'FC Prishtina',
            'KF Liria',
            'SC Gjilani',
            'KF Dukagjini',
            'FC Feronikeli',
            'KF Fushe Kosova',
        ];
        foreach ($teams as $team) {
            DB::table('teams')->insert([
                'name' => $team,
            ]);
        }

        $tournaments = [
            'Superliga Kosova',
            'Superkupa Kosova',
            'Champions League',
            'Europa League',
        ];
        foreach ($tournaments as $tournament) {
            DB::table('tournaments')->insert([
                'name' => $tournament,
            ]);
        }

        $events = [
            [
                'name' => 'Test Event #1',
                'start' => date('Y-m-d H:i:s', strtotime('+1 weeks')),
                'end' => date('Y-m-d H:i:s', strtotime('+1 weeks')),
                'available_seats' => 1000,
                'categoryA_price' => 200,
                'categoryB_price' => 150,
                'categoryC_price' => 100,
                'categoryD_price' => 50,
                'venue_id' => 1,
                'teamA_id' => 1,
                'teamB_id' => 2,
                'tournament_id' => 1,
            ],
            [
                'name' => 'Test Event #2',
                'start' => date('Y-m-d H:i:s', strtotime('+2 weeks')),
                'end' => date('Y-m-d H:i:s', strtotime('+2 weeks')),
                'available_seats' => 2000,
                'categoryA_price' => 300,
                'categoryB_price' => 150,
                'categoryC_price' => 80,
                'categoryD_price' => 50,
                'venue_id' => 2,
                'teamA_id' => 3,
                'teamB_id' => 4,
                'tournament_id' => 1,
            ],
            [
                'name' => 'Test Event #3',
                'start' => date('Y-m-d H:i:s', strtotime('+3 weeks')),
                'end' => date('Y-m-d H:i:s', strtotime('+3 weeks')),
                'available_seats' => 2500,
                'categoryA_price' => 100,
                'categoryB_price' => 80,
                'categoryC_price' => 50,
                'categoryD_price' => 30,
                'venue_id' => 3,
                'teamA_id' => 4,
                'teamB_id' => 5,
                'tournament_id' => 1,
            ],
        ];
        foreach ($events as $event) {
            DB::table('events')->insert($event);
        }

    }
}
