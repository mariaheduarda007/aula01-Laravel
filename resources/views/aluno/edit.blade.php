<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('aluno.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h2> EDITAR ALUNO</h2>
        <label> Nome </label>
        <input name="nome" type="text" value="{{ $aluno->nome }}">
        <label> Curso </label>
        <input name="curso" type="text" value="{{ $aluno->curso }}">
        <label> Ano </label>
        <input name="ano" type="integer" value="{{ $aluno->ano }}">
        <input type="submit" value="SALVAR">
     <a style="border: 2px solid black; color: black; text-decoration:none" href="{{ route('aluno.index') }}"> VOLTAR </a> 

    </form>
</body>
</html>