<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }} Details</title>
</head>
<body>
    <h1>{{ $book->title }} Details</h1>

    <p>Covers: {{ $book->book_covers }}</p>
    <p>Title: {{ $book->title }}</p>
    <p>Author: {{ $book->author }}</p>
    <p>Genre: {{ $book->genre }}</p>
         <!-- Add other details you want to display -->
    

</body>
</html>
