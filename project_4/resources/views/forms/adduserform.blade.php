<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj użytkownika</title>
</head>
<body>
    <h3>Dodawanie użytkownika</h3>
    <form action="AddUser" method="post">
        @csrf
        <input type="text" name="name" placeholder="Podaj nazwę użytkownika" autofocus require>
        @error('name')
        {{ $message }}
        @enderror<br><br>
        <input type="email" name="email" placeholder="Podaj email" require>
        @error('email')
        {{ $message }}
        @enderror<br><br>
        <input type="email" name="email_confirmation" placeholder="Powtórz email" require><br><br>
        <input type="password" name="password" placeholder="Podaj hasło" require>
        @error('password')
        {{ $message }}
        @enderror<br><br>
        <input type="password" name="password_confirmation" placeholder="Powtórz hasło" require><br><br>

        <input type="submit" value="Dodaj użytkownika">
    </form>
</body>
</html>