<?php
include_once __DIR__ . '/model/movie.php';

//istanze
$lotr = new Movie('Lord of the ring', '9', '2001', 'fantasy');
$pftc = new Movie('Pirates of the caribbean', '8', '2003', 'action/adventure');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>

    <div>
        <?php
        //richiamiamo il metodo per stampare in pagina
        $lotr->showInfo();
        ?>
    </div>
    <div>
        <?php
        //richiamiamo il metodo per stampare in pagina
        $pftc->showInfo();
        ?>
    </div>
</body>

</html>