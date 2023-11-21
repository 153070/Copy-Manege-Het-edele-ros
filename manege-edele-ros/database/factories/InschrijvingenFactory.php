<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inschrijving>
 */
class InschrijvingenFactory extends Factory
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
            'leeftijd' => $this->faker->dateTimeBetween('-99 years', 'now')->format('Y-m-d'),
            'geslacht' => $this->faker->randomElement(['man', 'vrouw']),
            'adres' => $this->faker->text(),
            'woonplaats' => $this->faker->text(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefoonnummer' => $this->faker->numerify('##########'),  
            'lespakket' => $this->faker->randomElement(['pakket 1', 'pakket 2', 'pakket 3']),
            'opmerking' => $this->faker->text(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
