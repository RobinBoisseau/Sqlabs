<?php

namespace Database\Seeders;

use App\Models\Exercice;
use Illuminate\Database\Seeder;

class ExerciceSeeder extends Seeder
{
    public function run(): void
    {
     
        Exercice::factory()->count(10)->create();
    }
}
