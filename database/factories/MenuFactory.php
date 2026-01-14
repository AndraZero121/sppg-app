<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'served_on' => $this->faker->dateTimeBetween('-10 days', '+10 days')->format('Y-m-d'),
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->optional()->paragraph,
            'calories' => $this->faker->numberBetween(350, 800),
            'protein' => $this->faker->randomFloat(2, 8, 35),
            'fat' => $this->faker->randomFloat(2, 5, 30),
            'carbs' => $this->faker->randomFloat(2, 40, 120),
            'fiber' => $this->faker->randomFloat(2, 3, 20),
            'is_published' => $this->faker->boolean(85),
        ];
    }
}
