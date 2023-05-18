<?php

require_once __DIR__.'/models/computer.php';
require_once __DIR__.'/models/desktop.php';
require_once __DIR__.'/models/laptop.php';
require_once __DIR__.'/db.php';

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
                            <h3><?= $computer -> getMotherboard() ;?></h3>
                            <h3><?= $computer -> getCpu() ;?></h3>
                            <h3><?= $computer -> getGpu() ;?></h3>
                            <h3><?= $computer -> getRam() ;?></h3>
                            <h3><?= $computer -> getAlimentation() ;?></h3>
                            <h3><?= $computer -> getStorage() ;?></h3>
                            <div class="card-footer">
                                <?php $computer->getType()?>
                            </div>
                        </div>
                    </div>
                <? endforeach ;?>
            </div>
        </div>
    </main>

</body>

</html>