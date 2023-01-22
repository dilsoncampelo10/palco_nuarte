<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
{
    public function show()
    {
        $artists = Artist::orderBy('id', 'desc')->get();

        $data = [
            'artists' => $artists
        ];
        return view('artist', $data);
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $function = $request->function;
        $contact = $request->contact;
        $team = $request->team;
        $photo = $request->photo;

        if ($name && $function && $contact) {
            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {

                $requestPhoto = $request->photo;
                $extension = $requestPhoto->extension();
                $photoName = md5($requestPhoto->getClientOriginalName() . strtotime(now())) . "." . $extension;
                $requestPhoto->move(public_path('assets/artists/photos'), $photoName);
                $photo = $photoName;
            }

            if (is_null($photo)) {
                $photo = 'default.jpg';
            }



            Artist::create([
                'name' => $name,
                'function' => $function,
                'contact' => $contact,
                'isTeam' => $team,
                'photo' => $photo
            ]);

            return redirect()->route('admin.artist')->with('success', 'Artista adicionado');
        }


        return redirect()->route('admin.artist')->with('danger', 'Não foi possível adicionar');
    }

    public function destroy($id)
    {
        if ($id) {
            Artist::findOrFail($id)->delete();

            return redirect()->route('admin.artist')->with('success', 'Artista deletado com sucesso');
        }

        return redirect()->route('admin.artist')->with('danger', 'Não foi possível deletar');
    }

    public function edit($id)
    {


        $artist = Artist::find($id);

        $loggedUser = User::find(Auth::user()->id);
        $data = [
            'artist' => $artist,
            'loggedUser' => $loggedUser
        ];

        return view('admin.edit_artist', $data);
    }
    public function update(Request $request)
    {
        Artist::findOrFail($request->id)->update($request->all());


        return redirect()->route('admin.artist')->with('sucess', 'Cliente alterado');
    }
}
