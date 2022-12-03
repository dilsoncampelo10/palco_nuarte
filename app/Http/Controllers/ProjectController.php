<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories
        ];
        return view('project', $data);
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
