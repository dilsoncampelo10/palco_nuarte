<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    public function show()
    {
        $notices = Notice::orderBy('id', 'desc')->get();

        $data = [
            'notices' => $notices
        ];

        return view('notice', $data);
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $link = $request->link;
        $image = $request->image;

        if ($title && $description) {
            if ($request->hasFile('image') && $request->file('image')->isValid()) {

                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime(now())) . "." . $extension;
                $requestImage->move(public_path('assets/notices/'), $imageName);
                $image = $imageName;
            }

            if (is_null($image)) {
                $image = 'default.jpg';
            }

            Notice::create(
                [
                    'title' => $title,
                    'description' => $description,
                    'link' => $link,
                    'image' => $image
                ]
            );

            return redirect()->route('admin.notice')->with('success', 'Notícia publicada');
        }

        return redirect()->route('admin.notice')->with('danger', 'Não foi possiível publicar');
    }

    public function destroy($id)
    {
        if ($id) {
            Notice::findOrFail($id)->delete();

            return redirect()->route('admin.notice')->with('success', 'Notícia deletada com sucesso');
        }

        return redirect()->route('admin.notice')->with('danger', 'Não foi possível deletar');
    }
    public function edit($id)
    {

        $notice = Notice::find($id);

        $loggedUser = User::find(Auth::user()->id);
        $data = [
            'notice' => $notice,
            'loggedUser' => $loggedUser
        ];


        return view('admin.edit_notice', $data);
    }

    public function update(Request $request)
    {
        Notice::findOrFail($request->id)->update($request->all());

        return redirect()->route('admin.notice')->with('sucess', 'Notícia alterada');
    }
}
