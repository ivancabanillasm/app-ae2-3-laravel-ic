<?php

namespace App\Http\Controllers;

use App\Models\LibroIC;

class LibroICController extends Controller
{
    public function index()
    {
        $libros = LibroIC::all();

        return view('libros', compact('libros'));
    }
}
