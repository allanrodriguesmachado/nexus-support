<?php

namespace Database\Seeders;

use App\Models\Callings;
use Database\Factories\CallingsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Callings::factory(10)->create();
    }
}
