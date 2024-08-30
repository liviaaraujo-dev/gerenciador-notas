<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Teste</title>
</head>
<body>
    <h2>Login Teste</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
    
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
    
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br>
    
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
