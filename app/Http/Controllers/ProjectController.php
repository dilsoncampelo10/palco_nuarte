<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data = [
            'categories' => Category::all()
        ];
        return view('project', $data);
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $category = $request->category;
        $file = $request->file;

        if (($category && $title && $description) || ($file && $category)) {
            Project::create([
                'title' => $title,
                'description' => $description,
                'id_category' => $category,
                // 'file' => $request->file
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
}
