<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj artykuł</title>
</head>
<body>
    <form action="AddArticle" method="post">
        @csrf
        <input type="text" name="title" placeholder="Podaj tytuł" autofocus><br><br>
        <textarea type="text" name="body" placeholder="Podaj treść"></textarea><br><br>

        <input type="submit" value="Dodaj artykuł">
    </form>
</body>
</html>