<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/', [ApiController::class, 'index'])->name('api.index');

Route::get('/brokerApi', [ApiController::class, 'retrieveData'])->name('broker.api');