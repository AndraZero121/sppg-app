<?php

namespace Database\Seeders;

use App\Models\SppgTeam;
use Illuminate\Database\Seeder;

class SppgTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SppgTeam::factory()->count(5)->create();
    }
}
