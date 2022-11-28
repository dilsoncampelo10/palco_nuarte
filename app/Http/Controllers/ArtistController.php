<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function show(){
        return view('artist');
    }
}
