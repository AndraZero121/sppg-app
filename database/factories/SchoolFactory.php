<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company.' School',
            'npsn' => (string) $this->faker->unique()->numberBetween(10000000, 99999999),
            'address' => $this->faker->streetAddress,
            'district' => $this->faker->citySuffix,
            'city' => $this->faker->city,
            'students_count' => $this->faker->numberBetween(50, 900),
            'contact_name' => $this->faker->name,
            'contact_phone' => $this->faker->phoneNumber,
            'is_active' => $this->faker->boolean(90),
        ];
    }
}
