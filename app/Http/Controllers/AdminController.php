<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function notice()
    {
        return view('admin.notice');
    }
    public function artist()
    {
        return view('admin.artist');
    }
    public function gallery()
    {
        return view('admin.gallery');
    }
}
