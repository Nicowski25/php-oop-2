<?php

include __DIR__.'/models/computer.php';
include __DIR__.'/models/desktop.php';
include __DIR__.'/models/laptop.php';
include __DIR__.'/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Computer Object</title>
</head>

<body class="bg-dark text-light">

    <header class="text-center">
        <h1>Computers</h1>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($computers as $computer) : ?>
                    <div class="col">
                        <div class="card text-bg-secondary h-100">
                            <h3><?= $computer -> motherboard ;?></h3>
                            <h3><?= $computer -> cpu ;?></h3>
                            <h3><?= $computer -> gpu ;?></h3>
                            <h3><?= $computer -> ram ;?></h3>
                            <h3><?= $computer -> alimentation ;?></h3>
                            <h3><?= $computer -> storage ;?></h3>
                        </div>
                    </div>
                <? endforeach ;?>
            </div>
        </div>
    </main>

</body>

</html>