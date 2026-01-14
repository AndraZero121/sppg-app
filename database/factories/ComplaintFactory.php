<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complaint>
 */
class ComplaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ticket' => 'MBG-'.$this->faker->year.'-'.$this->faker->unique()->numberBetween(1000, 9999),
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph,
            'category' => $this->faker->randomElement(['Menu', 'Distribusi', 'Kebersihan', 'Lainnya']),
            'location' => $this->faker->city,
            'reporter_name' => $this->faker->optional()->name,
            'reporter_contact' => $this->faker->optional()->phoneNumber,
            'status' => $this->faker->randomElement(['Pending', 'Diproses', 'Selesai']),
        ];
    }
}
