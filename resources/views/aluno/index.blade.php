<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
</head>
<body>
     <a style="border: 2px solid black; color: black; text-decoration:none" href="{{ route('aluno.create') }}"> CRIAR ALUNO </a> 

    @foreach ($alunos as $item)
        <h2> {{ $item->nome }} | {{$item->curso}} | {{$item->ano}}</h2>
        <a style="border: 2px solid black; color: black; text-decoration:none" href="{{ route('aluno.edit', $item->id) }}"> ALTERAR</a>
        <form  action="{{ route('aluno.destroy', $item->id) }}" method="POST"> 
            @csrf
            @method('delete')
            <input type="submit" value="remover" style="border: 2px solid black; color: black; text-decoration:none">
        </form>
    @endforeach
</body>
</html>