<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HearingAid>
 */
class HearingAidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->words(2, true),
            "refnumber" => fake()->numberBetween(1000, 9999),
            "description" => fake()->paragraph(),
            "price" => fake()->numberBetween(1000, 2000),
        ];
    }
}
