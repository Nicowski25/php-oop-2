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

<style>
    .part {
        font-size:large;
    }
</style>

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
                            <h5>Motherboard: <span class="part"><?= $computer -> getMotherboard() ;?></span></h5>
                            <h5>CPU: <span class="part"><?= $computer -> getCpu() ;?></span></h5>
                            <h5>GPU: <span class="part"><?= $computer -> getGpu() ;?></span></h5>
                            <h5>RAM: <span class="part"><?= $computer -> getRam() ;?></span></h5>
                            <h5>Alimentation: <span class="part"><?= $computer -> getAlimentation() ;?></span></h5>
                            <h5>Storage: <span class="part"><?= $computer -> getStorage() ;?></span></h5>
                            <?php if ($computer->getType() == 'Desktop'):?>
                                <h5>Keyboard: <span class="part"><?= $computer -> getKeyboard() ;?></span></h5>
                                <h5>Mouse: <span class="part"><?= $computer -> getMouse() ;?></span></h5>
                                <h5>Monitor: <span class="part"><?= $computer -> getMonitor() ;?></span></h5>   
                            <?php elseif ($computer->getType() == 'Laptop') :?>
                                <h5>Ports: <span class="part"><?= $computer -> getPorts() ;?></span></h5>
                                <h5>Battery mAh: <span class="part"><?= $computer -> getBatterymAh() ;?></span></h5>                                  
                            <?php endif ;?>
                            <div class="card-footer">
                                <?= $computer->getType() ;?>
                            </div>
                        </div>
                    </div>
                <? endforeach ;?>
            </div>
        </div>
    </main>

</body>

</html>