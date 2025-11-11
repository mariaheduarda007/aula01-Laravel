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

     public function edit(string $id)
    {
        $curso = Curso::find($id);
        if (isset($curso)) {
            $cursos = Curso::all();
            return view('curso.edit', compact(['curso', 'cursos']));
        }
        return redirect()->route('curso.index');
    }

    public function update(Request $request, string $id)
    {
        $curso = Curso::find($id);

        if (isset($curso)) {
            $curso->nome = mb_strtoupper($request->nome, 'UTF-8');
            $curso->duracao = $request->duracao;
            $curso->save();
        }
        return redirect()->route('curso.index');
    }

    public function destroy(string $id)
    {
        $curso = Curso::find($id);
        if (isset($curso)) {
            $curso->delete();
        }
        return redirect('/curso');

    }


}
