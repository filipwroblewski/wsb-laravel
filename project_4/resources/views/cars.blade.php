<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h3>Samochody</h3>

    <table class="table">
        <thead>
            <tr>
                <th>Marka</th>
                <th>Model</th>
                <th>Pojemność</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->capacity }}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>

    {{ $cars->links('pagination::bootstrap-5') }}

    <a href="/addUser" class="btn btn-primary">Dodaj nowy samochód</a>
    
</body>
</html>