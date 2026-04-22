<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

<<<<<<< HEAD
    /**
     * Seed the application's database.
     */
    public function run()
{
    $this->call(ExerciceSeeder::class);
}
=======

    public function run(): void
    {
       $this->call(ExerciceSeeder::class);
       $this->call(FichierSeeder::class);
    }
>>>>>>> master
}
