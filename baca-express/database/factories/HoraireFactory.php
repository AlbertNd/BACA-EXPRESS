<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horaire>
 */
class HoraireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $startDate = now();
        $endDate = $startDate->copy()->addYear();

        $date = $this->faker->unique()->dateTimeBetween($startDate, $endDate)->format('Y-m-d');
        
        return [
            'Ville_id' => 7,
            'dateDepart' => $date,
            'heureDepart' => fake()->time('H:i:s'),
        ];
    }
}
