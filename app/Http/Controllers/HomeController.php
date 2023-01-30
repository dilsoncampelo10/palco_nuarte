<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        
        $data = [
            "galleries" => Gallery::all()
        ];
        return view('home',$data);
    }
}
