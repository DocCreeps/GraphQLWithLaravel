<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Game::create([
            'title' => 'The Last of Us',
            'category' => 'Action',
            'done' => false,
        ]);
        Game::create([
            'title' => 'Halo 4',
            'category' => 'Action',
            'done' => false,
        ]);
        Game::create([
            'title' => 'Dragon Quest XI',
            'category' => 'RPG',
            'done' => true,
        ]);
        Game::create([
            'title' => 'Final Fantasy VII',
            'category' => 'RPG',
            'done' => true,
        ]);
        Game::create([
            'title' => 'Octopath Traveler 2',
            'category' => 'RPG',
            'done' => true,
        ]);
        Game::create([
            'title' => 'The Legend of Zelda: Breath of the Wild',
            'category' => 'Action',
            'done' => false,
        ]);

    }
}
