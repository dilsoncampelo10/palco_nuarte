<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function show()
    {
        return view('artist');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $function = $request->function;
        $contact = $request->contact;
        $team = $request->team;
        $photo = $request->photo;

        if ($name) {
            Artist::create([
                'name' => $name,
                'function' => $function,
                'contact' => $contact,
                'isTeam' => $team,
                // 'photo' => $photo
            ]);

            return redirect()->route('admin.artist')->with('flash', 'Artista adicionado');
        }

        return redirect()->route('admin.artist')->with('flash', 'Não foi possível adicionar');
    }
}
