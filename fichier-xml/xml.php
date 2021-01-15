<?php

require_once 'index-controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Maçonnerie Ocordo</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark d-flex ">
        <div class="d-flex  justify-content-start align-items-start">
            <img class="image-responsive " src="assets/img/Logo-Ocordo-Travaux-Amiens.png" alt="logo Ocordo"></img>
            <div>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>

        <div class="container-fluid">
            <div class="collapse navbar-collapse col-lg-12 col-sm-12" id="navbarNav">
                <ul class="navbar-nav ml-auto mx-auto ">
                    <li class="nav-item">
                        <a class="titleMenu mt-2" href="accueil"><?= $menu ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="titleMenu  mt-2 " href="qui-sommes-nous"><?= $menu2 ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="titleMenu  mt-2" href="nos-clients-témoignent"><?= $menu3 ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="titleMenu  mt-2 " href="contact"><?= $menu4 ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <h3 class="title my-3"><?= isset($title) ? $title : '' ?>
        </h3>
        <?= isset($content) ? $content : '' ?>
    </div>

    <footer class="bg-dark text-center align-items-center justify-content-center d-flex p-4">
        <p class="text-center text-white"> © 2021 Copyright </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>