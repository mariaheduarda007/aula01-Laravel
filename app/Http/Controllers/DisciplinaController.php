<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;
use App\Models\Curso;


class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = Disciplina::all();
        return view("disciplina.index", compact('disciplinas'));
    }

    public function create()
    {
        $cursos = Curso::all();
        return view('disciplina.create', compact('cursos'));
    }

    public function store(Request $request)
    {

        $curso = Curso::find($request->curso);

        $disciplina = new Disciplina();
        $disciplina->nome = mb_strtoupper($request->nome, 'UTF-8');
        $disciplina->aulas = $request->aulas;
        $disciplina->curso()->associate($curso);
        $disciplina->save();
        return redirect()->route('disciplina.index');
    }

    public function edit(string $id)
    {
        $disciplina = Disciplina::find($id);
        if (isset($disciplina)) {
            $cursos = Curso::all();
            return view('disciplina.edit', compact(['disciplina', 'cursos']));
        }
        return redirect()->route('disciplina.index');
    }

    public function update(Request $request, string $id)
    {
        $disciplina = Disciplina::find($id);
        $curso = Curso::find($request->curso);

        if (isset($curso) && isset($disciplina)) {
            $disciplina->nome = mb_strtoupper($request->nome, 'UTF-8');
            $disciplina->aulas = $request->aulas;
            $disciplina->curso()->associate($curso);
            $disciplina->save();
        }
        return redirect()->route('disciplina.index');
    }


    public function destroy(string $id)
    {
        $disciplina = Disciplina::find($id);
        if (isset($disciplina)) {
            $disciplina->delete();
        }
        return redirect('/disciplina');

    }


}
