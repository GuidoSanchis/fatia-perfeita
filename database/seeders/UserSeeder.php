<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'suporte@fatiaperfeita.com.br',
            'password' => Hash::make('123456'), // sempre use Hash para senhas
        ]);
    }
}
