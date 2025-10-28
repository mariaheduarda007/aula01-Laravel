<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('aluno.store') }}" method="POST">
        @csrf
        <h2> NOVO ALUNO</h2>
        <label> Nome </label>
        <input name="nome" type="text">
        <label> Curso </label>
        <input name="curso" type="text">
        <label> Ano </label>
        <input name="ano" type="integer">
        <input type="submit" value="SALVAR">
    </form>
</body>

</html>