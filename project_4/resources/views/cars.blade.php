<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Samochody</h3>

    <table>
        <tr>
            <th>Marka</th>
            <th>Model</th>
            <th>Pojemność</th>
        </tr>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car -> brand }}</td>
                <td>{{ $car -> model }}</td>
                <td>{{ $car -> capacity }}</td>
            </tr>
        @endforeach
    </table>

    {{ $cars->links('pagination::bootstrap-5')}}
</body>
</html>