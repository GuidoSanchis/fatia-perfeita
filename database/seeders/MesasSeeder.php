<?php

namespace Database\Seeders;

use App\Models\Mesa;
use Illuminate\Database\Seeder;

class MesasSeeder extends Seeder
{
    public function run(): void
    {
        $mesas = [
            ['numero' => 1, 'situacao' => 'disponivel'],
            ['numero' => 2, 'situacao' => 'disponivel'],
            ['numero' => 3, 'situacao' => 'disponivel'],
            ['numero' => 4, 'situacao' => 'disponivel'],
            ['numero' => 5, 'situacao' => 'disponivel'],
            ['numero' => 6, 'situacao' => 'disponivel'],
            ['numero' => 7, 'situacao' => 'disponivel'],
            ['numero' => 8, 'situacao' => 'disponivel'],
            ['numero' => 9, 'situacao' => 'disponivel'],
            ['numero' => 10, 'situacao' => 'disponivel'],
        ];

        foreach ($mesas as $mesa) {
            Mesa::create($mesa);
        }
    }
}
