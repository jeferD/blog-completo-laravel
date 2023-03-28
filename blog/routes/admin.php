<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AdminHomeController;
use Illuminate\Support\Facades\Route;


Route::get('', [AdminHomeController::class, 'index'])->name('admin.home');

Route::resource('categories', CategoryController::class )->names('admin.categories');
