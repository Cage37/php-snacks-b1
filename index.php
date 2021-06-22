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

// Snack 3
// Creare un array di array.
// Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
// e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$numbers = [];



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

   <!-- SNACK 3 -->

   <h1>SNACK 3</h1>

   <?php for($i = 0; $i < count($posts); $i++) {
    ?>

    <h3><?= array_keys($posts)[$i] ?></h3>

    <?php for($x = 0; $x < count($posts[array_keys($posts)[$i]]); $x++) {
    ?>

    <p><?= $posts[array_keys($posts)[$i]][$x]["title"] . " " . $posts[array_keys($posts)[$i]][$x]["author"] . " " . $posts[array_keys($posts)[$i]][$x]["text"] ?></p>

   <?php }
   ?>

   <?php }
   ?>

   <!-- SNACK 4 -->

   <h1>SNACK 4</h1>

   <?php while (count($numbers) <= 15) {
   
       $number = rand(1, 100);
  
       if (!in_array($number, $numbers)) {
           $numbers[] = $number;

           echo $number . " ";
       }
    };
    ?>



</body>
</html>