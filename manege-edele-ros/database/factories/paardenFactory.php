<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\paarden>
 */
class paardenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naam' => $this->faker->firstName,
            'geboortedatum' => $this->faker->dateTimeBetween('-20 years', 'now')->format('Y-m-d'),
            'geslacht' => $this->faker->randomElement(['man', 'vrouw']),
            'tamheid' => $this->faker->randomElement(['tam', 'gemiddeld', 'wild']),
        ];
    }
}
