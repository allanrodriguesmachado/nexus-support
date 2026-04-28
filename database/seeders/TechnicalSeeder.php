<?php

namespace Database\Seeders;

use App\Models\Calling;
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
        Calling::factory(10)->create();
    }
}
