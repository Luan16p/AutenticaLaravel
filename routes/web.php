<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LayoutController;

Route::get('/', [LayoutController::class, 'index'])->name('app.index');