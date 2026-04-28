<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {

        $this->call(RolesAndPermissionsSeeder::class);

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('admin');

        $client = User::factory()->create([
            'name' => 'Cliente Teste',
            'email' => 'cliente@cliente.com',
            'password' => bcrypt('password'),
        ]);

        $client->assignRole('client');

        $this->call(CallingSeeder::class);
    }
}
