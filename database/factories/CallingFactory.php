<?php

namespace Database\Factories;

use App\Models\Calling;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

/**
 * @extends Factory<Calling>
 */
class CallingFactory extends Factory
{
    protected $model = Calling::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'category' => $this->faker->word(),
            'client_id' => User::factory(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Calling $calling) {
            $role = Role::firstOrCreate(['name' => 'client']);

            $user = User::find($calling->client_id);
            if ($user) {
                $user->assignRole($role);
            }
        });
    }
}
