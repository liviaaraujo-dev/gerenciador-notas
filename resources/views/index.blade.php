<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Teste</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
    
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
    
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        <br>
    
        <button type="submit">Submit</button>
    </form>
    
    @foreach ($users as $user)
        <p>{{$user}}</p>
    @endforeach
</body>
</html>
