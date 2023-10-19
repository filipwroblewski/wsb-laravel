<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Użytkownicy:
    <table>
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Miasto</th>
        </tr>
        @foreach ($users as $user)
           <tr>
                <td>{{$user['firstName']}}</td>
                <td>{{$user['lastName']}}</td>
                <td>{{$user['city']}}</td>
           </tr>
        @endforeach
    </table>
</body>
</html>