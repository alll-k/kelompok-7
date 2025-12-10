<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan  ;

class PertanyaanController extends Controller
{
    public function index()
    {
        $questions = Pertanyaan::latest()->get(); // ambil semua data dari DB

        return view('index', compact('questions')); // kirim ke blade
    }
}