
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroICController;

Route::get('/libros', [LibroICController::class, 'index']);
