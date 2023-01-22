<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function show()
    {
        return view('notice');
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $link = $request->link;
        $image = $request->image;

        if ($title && $description) {
            Notice::create(
                [
                    'title' => $title,
                    'description' => $description,
                    'link' => $link,
                    // 'image' => $image
                ]
            );

            return redirect()->route('admin.notice')->with('flash', 'Notícia publicada');
        }

        return redirect()->route('admin.notice', 'Não foi possiível publicar');
    }

    public function destroy($id)
    {
        if ($id) {
            Notice::findOrFail($id)->delete();

            return redirect()->route('admin.notice')->with('success', 'Notícia deletada com sucesso');
        }

        return redirect()->route('admin.notice')->with('danger', 'Não foi possível deletar');
    }
}
