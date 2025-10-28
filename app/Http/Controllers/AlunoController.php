<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{

    public function index()
    {
        $alunos = Aluno::all();
        // dd($alunos); 
        return view('aluno.index', compact('alunos'));
    }


    public function create()
    {
        return view('aluno.create');
    }

    public function store(Request $request)
    {
        $aluno = new Aluno();
        $aluno->nome = $request->nome;
        $aluno->curso = $request->curso;
        $aluno->ano = $request->ano;
        $aluno->save();
        return redirect('/aluno');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $aluno = Aluno::find($id);
        if (isset($aluno)) {
            return view('aluno.edit', compact('aluno'));
        }
        return redirect('/aluno');

    }



    public function update(Request $request, string $id)
    {
        $aluno = Aluno::find($id);
        if (isset($aluno)) {
            $aluno->nome = $request->nome;
            $aluno->curso = $request->curso;
            $aluno->ano = $request->ano;
            $aluno->save();
        }
        return redirect('/aluno');
    }


    public function destroy(string $id)
    {
         $aluno = Aluno::find($id);
        if (isset($aluno)) {
            $aluno->delete();
        }
        return redirect('/aluno');

    }
}
