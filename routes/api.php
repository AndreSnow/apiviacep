<?php

use App\Http\Controllers\SearchCepController;
use Illuminate\Support\Facades\Route;

Route::get('search/local/{cep}', [SearchCepController::class, 'searchCep']);
