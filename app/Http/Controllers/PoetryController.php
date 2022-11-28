<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoetryController extends Controller
{
    public function show()
    {
        return view('poetry');
    }
}
