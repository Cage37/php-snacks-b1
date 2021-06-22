<?php

// Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
// Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 60-55

$calendar = [
    [
        "homeTeam" => "Olimpia Milano",
        "homePoints" => "70",
        "awayTeam" => "Virtus Bologna",
        "awayPoints" => "55",
    ],
    [
        "homeTeam" => "Olimpia Milano",
        "homePoints" => "66",
        "awayTeam" => "Cantù",
        "awayPoints" => "60",
    ],
    [
        "homeTeam" => "Olimpia Milano",
        "homePoints" => "77",
        "awayTeam" => "Reyer Venezia",
        "awayPoints" => "67",
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-SNACKS-B1</title>
</head>
<body>
    
   <?php for($i = 0; $i < count($calendar); $i++) {
    ?>

    <p><?= $calendar[$i]["homeTeam"] . "-" . $calendar[$i]["awayTeam"] . " | " . $calendar[$i]["homePoints"] . "-" . $calendar[$i]["awayPoints"] ?></p>

   <?php }
   ?>

</body>
</html>