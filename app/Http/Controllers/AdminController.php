<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Galery;
use App\Models\Gallery;
use App\Models\Notice;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function index()
    {
        $loggedUser = User::find(Auth::user()->id);
        $projectCountPending = Project::where('isPending', 1)->count();

        $data = [
            'loggedUser' => $loggedUser,
            'project' => $projectCountPending
        ];

        return view('admin.dashboard', $data);
    }

    public function notice()
    {
        $loggedUser = User::find(Auth::user()->id);
        $data = [
            'loggedUser' => $loggedUser,
            'notices' => Notice::all()
        ];
        return view('admin.notice', $data);
    }
    public function artist()
    {
        $loggedUser = User::find(Auth::user()->id);
        $data = [
            'loggedUser' => $loggedUser,
            'artists' => Artist::all()
        ];
        return view('admin.artist', $data);
    }
    public function gallery()
    {
        $loggedUser = User::find(Auth::user()->id);
        $data = [
            'loggedUser' => $loggedUser,
            'galleries' => Gallery::all()
        ];
        return view('admin.gallery', $data);
    }

    public function project()
    {
        //Verifica se o projeto está pendente
        $pendingProjects = Project::where('isPending', 1)->get();

        $loggedUser = User::find(Auth::user()->id);
        $data = [
            'loggedUser' => $loggedUser,
            'pendingProjects' => $pendingProjects
        ];
        return view('admin.project', $data);
    }
}
