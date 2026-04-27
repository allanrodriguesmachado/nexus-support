<?php

namespace Database\Factories;

use App\Models\Callings;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Callings>
 */
class CallingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::role('client')->first();

        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['pending', 'completed']),
            'category' => $this->faker->word(),
            'client_id' => $user->id
        ];
    }
}
