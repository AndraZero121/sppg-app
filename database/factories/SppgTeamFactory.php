<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SppgTeam>
 */
class SppgTeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'SPPG '.$this->faker->city,
            'leader_name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'coverage_area' => $this->faker->city,
            'members_count' => $this->faker->numberBetween(4, 20),
            'notes' => $this->faker->optional()->sentence,
        ];
    }
}
