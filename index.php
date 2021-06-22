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

// Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
// Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ab harum ea doloremque dolore, excepturi voluptate blanditiis earum molestias mollitia adipisci non corrupti tempora vero, provident, libero ipsum repellat consequatur sunt iusto quaerat? Voluptate in debitis ducimus suscipit totam perspiciatis impedit ab odit laborum repudiandae officiis non pariatur at atque aliquid ad, nisi eligendi. Optio error numquam mollitia at suscipit porro, reprehenderit commodi cupiditate, aliquam ipsa, culpa asperiores! Accusamus numquam consequatur repellat ipsam nihil. Repudiandae alias voluptatum amet! Similique sequi esse quis vitae reiciendis rem. Debitis at aspernatur quas error architecto ab eum doloremque minima, vel earum alias esse hic quisquam consequatur similique illum voluptatem suscipit. Distinctio officia dolorem ducimus libero, rem corporis incidunt aliquid fugiat quia dignissimos fugit, pariatur soluta? Molestiae consequuntur laborum temporibus praesentium expedita possimus! Voluptate ducimus, cum pariatur exercitationem fugiat error nostrum est ea nulla expedita dolore consequatur animi qui harum excepturi nisi distinctio ipsum earum accusantium dolor velit eum possimus. Sint quaerat laboriosam asperiores repellendus nemo doloremque, est sequi unde, soluta vitae nihil modi non laborum fuga! Corrupti ad ab et. Harum tenetur suscipit rem beatae. Laboriosam quasi ad nulla earum natus aperiam molestiae porro harum illo quibusdam? Sed inventore, consectetur quas aut eveniet voluptatem.";
$textDivide = explode(".", $text);

// Snack 6
// Utilizzare questo array: https://pastebin.com/CkX3680A. 
// Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

// Snack 7
// Creare un array contenente qualche alunno di un’ipotetica classe. 
// Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
// Stampare Nome, Cognome e la media dei voti di ogni alunno.


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

    <!-- SNACK 5 -->

    <h1>SNACK 5</h1>

    <?php for($i = 0; $i < count($textDivide); $i++) {
    ?>

    <p><?= $textDivide[$i] ?></p>

   <?php }
   ?>

   <!-- SNACK 6 -->

   <h1>SNACK 6</h1>

   <?php for($i = 0; $i < count($db); $i++) {
    ?>

    <h3><?= array_keys($db)[$i] ?></h3>

    <?php for($x = 0; $x < count($db[array_keys($db)[$i]]); $x++) {
    ?>


    <?php if (array_keys($db)[$i] == "teachers") { ?>
       <p style="background-color: grey;"><?= $db[array_keys($db)[$i]][$x]["name"] . " " . $db[array_keys($db)[$i]][$x]["lastname"] ?></p>
    <?php };
    ?>

    <?php if (array_keys($db)[$i] == "pm") { ?>
       <p style="background-color: green;"><?= $db[array_keys($db)[$i]][$x]["name"] . " " . $db[array_keys($db)[$i]][$x]["lastname"] ?></p>
    <?php };
    ?>

    

   <?php }
   ?>

   <?php }
   ?>



</body>
</html>