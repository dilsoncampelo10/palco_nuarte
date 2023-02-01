<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Gallery;
use App\Models\Notice;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $data = [
            "galleries" => Gallery::all(),
            "artists" => Artist::where('isTeam', '=', 1)->get(),
            "recentNotices" => Notice::orderBy('created_at', 'desc')->get(),
            'notices' => Notice::all()
        ];
        return view('home', $data);
    }
}
