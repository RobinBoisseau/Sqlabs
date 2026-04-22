<?php

namespace Database\Factories;

use App\Models\Exercice;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciceFactory extends Factory
{

    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(3),
            'enonce' => $this->faker->paragraph(),
            'type' => $this->faker->randomElement(['SQL', 'BPMN']),
            'etat' => $this->faker->randomElement(['Fait', 'Non Fait']),
        ];   
    }
}
