<?php

require_once './models/genre.php';
require_once './models/movie.php';

$genreAction = new Genre(1, "Azione");
$genreThriller = new Genre(2, "Thriller");

$movie1 = new Movie("Il Signore degli Anelli", $genreAction, 2001);
$movie2 = new Movie("Shutter Island", $genreThriller, 2010);

// echo $movie1;
// echo $movie2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?php echo $movie1 ?></li>
        <li><?php echo $movie2 ?></li>
    </ul>
</body>
</html>
