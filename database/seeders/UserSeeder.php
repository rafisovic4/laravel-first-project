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
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'username' => 'rafisovic4',
            'password' => Hash::make('22qew132ws'),
            'role' => 'admin',
        ]);
        User::query()->create([
            'username' => 'railmuz',
            'password' => Hash::make('railmuz'),
            'role' => 'admin',
        ]);
    }
}
