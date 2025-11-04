<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;


class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view("curso.index", compact('cursos'));
    }

    public function create()
    {
        $cursos = Curso::all();
        return view('curso.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nome = mb_strtoupper($request->nome, 'UTF-8');
        $curso->duracao = $request->duracao;
        $curso->save();
        return redirect()->route('curso.index');
    }

}
