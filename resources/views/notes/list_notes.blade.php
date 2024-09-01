<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Notas</title>
</head>

<body>
    <h2>Listar notas</h2>

    <ul>
        
        @foreach ($notes as $note)
        
        <li>
            <h4>{{$note->title}}</h4>
            <p>{{$note->description}}</p>
        </li>
        
        
        @endforeach
        
    </ul>
</body>

</html>
