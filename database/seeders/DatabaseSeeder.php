<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin MBG',
            'email' => 'admin@mbg.test',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Petugas Gizi',
            'email' => 'gizi@mbg.test',
            'password' => Hash::make('password'),
            'role' => 'petugas_gizi',
        ]);

        $this->call([
            SchoolSeeder::class,
            SppgTeamSeeder::class,
            MenuSeeder::class,
            ComplaintSeeder::class,
        ]);
    }
}
