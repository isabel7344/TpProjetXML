<!Doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TP Fichier XML - Site Maçonnerie</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark d-flex">
        <div class="d-flex ml-auto justify-content-start align-items-start">
            <img class="image-responsive mx-auto " src="assets/img/Logo-Ocordo-Travaux-Amiens.png"
                alt="logo Ocordo"></img>
            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        <div class="container-fluid">
            <div class="collapse navbar-collapse col-lg-12 col-sm-12" id="navbarNav">
                <ul class="navbar-nav  ml- auto mx-auto ">
                    <li class="nav-item ">
                        <a class="titleMenu  mt-2" href="">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="titleMenu  mt-2 " href="">Qui sommes nous?</a>
                    </li>
                    <li class="nav-item">
                        <a class="titleMenu  mt-2" href="">Nos clients témoignent</a>
                    </li>
                    <li class="nav-item">
                        <a class="titleMenu  mt-2 " href="">Contact</a>
                    </li>
                </ul>
            </div>
    </nav>
    </div>
    <?php

    $xml = simplexml_load_file('source.xml');
    foreach ($xml->page as $i) {
        ?>
    <p class="content"><?= $i->content ?>
    </p>
    <?php
    }
        ?>

    <footer class="bg-dark text-center align-items-center justify-content-center d-flex p-5">
        <p class="text-center text-white"> © 2021 Copyright </p>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>