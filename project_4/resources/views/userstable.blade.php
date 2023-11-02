<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h3>Użytkownicy z tabeli users</h3>

    <table>
        <thead>
            <tr>
                <th>Nazwa użytkownika</th>
                <th>Email</th>
                <th>Data utworzenia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</th>
                <td>{{ $user->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/addUser" class="btn btn-primary">Dodaj nowego użytkownika</a>
</body>
</html>