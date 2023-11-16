<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h3>Książki</h3>

    <table class="table">
        <thead>
            <tr>
                <th>Autor</th>
                <th>Tytuł</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>