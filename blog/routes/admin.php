<?php

use App\Http\Controllers\AdminHomeController;
use Illuminate\Support\Facades\Route;


Route::get('', [AdminHomeController::class, 'index']);