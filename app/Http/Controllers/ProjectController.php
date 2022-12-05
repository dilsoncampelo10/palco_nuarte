<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $data = [
            'categories' => Category::all(),
        ];
        return view('project', $data);
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $category = $request->category;
        $file = $request->file;
        $author = $request->author;
        $date = $request->date;

        if (($category && $title && $description && $author) || ($file && $category && $author && $title)) {


            if ($request->hasFile('file') && $request->file('file')->isValid()) {

                $requestFile = $request->file;
                $extension = $requestFile->extension();
                $fileName = md5($requestFile->getClientOriginalName() . strtotime(now())) . "." . $extension;
                $requestFile->move(public_path('assets/projects/user/file'), $fileName);
                $file = $fileName;
            }

            Project::create([
                'title' => $title,
                'description' => $description,
                'id_category' => $category,
                'id_user' => Auth::user()->id,
                'author' => $author,
                'dateCreation' => $date,
                'file' => $file
            ]);

            return redirect()->route('project')->with('flash', 'Projeto enviado! Aguarde sua aprovação...');
        }

        return redirect()->route('project')->with('flash', 'Não foi possivel enviar seu projeto');
    }

    public function category(Request $request)
    {
        $name = $request->name;

        if ($name) {
            Category::create([
                'name' => $name
            ]);
            return redirect()->route('dashboard')->with('flash', 'Categoria adicionada');
        }
        return redirect()->route('dashboard')->with('flash', 'Não foi possível adicionar categoria');
    }


    //Atualiza situação do projeto para 0, não estando mais pendente
    public function update($id)
    {
        DB::table('projects')->where('id', $id)->update(['isPending' => 0]);

        return redirect()->route('admin.project')->with('flash', 'Projeto aceito com sucesso !');
    }

    public function destroy($id)
    {

        $project = Project::find($id);

        unlink(public_path("assets/projects/user/file/" . $project->file));

        Project::findOrFail($id)->delete();

        return redirect()->route('admin.project')->with('flash', 'Projeto recusado!');
    }
}
