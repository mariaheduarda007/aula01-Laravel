<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
</head>
<body>
    @foreach ($alunos as $item)
        <h1> {{ $item->nome }} | {{$item->curso}} | {{$item->ano}}</h1>
    @endforeach
</body>
</html>