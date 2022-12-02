<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function index()
    {
        $loggedUser = User::find(Auth::user()->id);
        $data = [
            'loggedUser' => $loggedUser
        ];
        return view('admin.dashboard', $data);
    }

    public function notice()
    {
        $loggedUser = User::find(Auth::user()->id);
        $data = [
            'loggedUser' => $loggedUser
        ];
        return view('admin.notice',$data);
    }
    public function artist()
    {
        $loggedUser = User::find(Auth::user()->id);
        $data = [
            'loggedUser' => $loggedUser
        ];
        return view('admin.artist',$data);
    }
    public function gallery()
    {
        $loggedUser = User::find(Auth::user()->id);
        $data = [
            'loggedUser' => $loggedUser
        ];
        return view('admin.gallery',$data);
    }
}
