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
];

// Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
// che name sia più lungo di 3 caratteri, 
// che mail contenga un punto e una chiocciola e che age sia un numero. 
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
$age = intval($age);

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

    <!-- SNACK 1 -->

    <h1>SNACK 1</h1>
    
   <?php for($i = 0; $i < count($calendar); $i++) {
    ?>

    <p><?= $calendar[$i]["homeTeam"] . "-" . $calendar[$i]["awayTeam"] . " | " . $calendar[$i]["homePoints"] . "-" . $calendar[$i]["awayPoints"] ?></p>

   <?php }
   ?>

   <!-- SNACK 2 -->

   <h1>SNACK 2</h1>

   <p><?php echo $name ?></p>
   <p><?php echo $mail ?></p>
   <p><?php echo $age ?></p>

   <?php if (strlen($name) > 3 && strpos($mail, "@") && strpos($mail, ".") && is_int($age)) {
        echo "Accesso riuscito";
   } else {
        echo "Accesso negato";
   }
   ?>

</body>
</html>