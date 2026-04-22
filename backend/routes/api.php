<?php

use App\Http\Controllers\Api\ExerciceController;
use App\Http\Controllers\Api\FichierController;
use Illuminate\Support\Facades\Route;

Route::apiResource('exercices', ExerciceController::class);

Route::apiResource('fichiers', FichierController::class);