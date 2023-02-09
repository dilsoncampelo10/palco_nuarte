<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function store(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime(now())) . "." . $extension;
            $requestImage->move(public_path('assets/gallery/'), $imageName);
            $image = $imageName;
        }

        if (is_null($image)) {
            $image = 'default.jpg';
        }

        Gallery::create([
            'image' => $image
        ]);

        return redirect()->route('admin.gallery')->with('success', 'Imagem adicionada na galeria');
    }




    public function destroy($id)
    {
        if ($id) {

            $gallery = Gallery::find($id);

            if ($gallery->image) {
                unlink(public_path("assets/gallery/" . $gallery->image));
            }

            Gallery::findOrFail($id)->delete();

            return redirect()->route('admin.gallery')->with('success', 'Imagem deletada com sucesso');
        }

        return redirect()->route('admin.gallery')->with('danger', 'Não foi possível deletar');
    }
}
