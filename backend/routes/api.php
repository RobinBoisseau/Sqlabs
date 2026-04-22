<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciceController;

Route::apiResource('exercices', ExerciceController::class);