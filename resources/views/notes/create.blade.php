<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar nota</title>
</head>

<body>
    <h2>Listar notas</h2>

   <form action="{{route('notes.store')}}" method="POST">
    @csrf
    @method('POST')
        <div>
            <label for="title">Título</label>
            <input type="text" class="title" id="title" name="title">
        </div>

        <div>
            <label for="description">Descrição</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        
        <button type="submit">Criar</button>

   </form>
</body>

</html>
