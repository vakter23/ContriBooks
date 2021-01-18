<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="views/CSS/styleAccueil.css">
    <title><?= $t ?></title>
</head>

<body>
<div style="background-color: #0151BF;" class="">
    <header style="padding-top: 10px;" class="Primary container">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Contribooks/BestBooks">Meilleurs livres</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/Contribooks/NewBooks">Nouveautés</a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Genre
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/ContriBooks/Search?filter=Sciences">Sciences</a>
                            <a class="dropdown-item" href="/ContriBooks/Search?filter=BD">BD</a>
                            <a class="dropdown-item" href="/ContriBooks/Search?filter=Roman">Roman</a>

<!--                            <div class="dropdown-divider"> </div>-->
<!--                            <a class="dropdown-item" href="#">Something else here</a>-->
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mx-auto order-0">
                <!--                    <a class="navbar-brand mx-auto" href="#">Navbar 2</a>-->
                <a class="navbar-brand mx-auto" href="<?= URL ?>"><img style="width: 200px;"
                                                                       src="utils/media/img/LOGO.png"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>

                </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                                        <form class="form-inline my-2 my-lg-0">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        </form>
                    <li class="nav-item">
                        <!--                        <a class="nav-link" href="#">Right</a>-->
                        <?php
                        if (isset($_SESSION['login']))
                        {
                            echo'<form action="/ContriBooks/Connexion" method="post"><input type="submit" name="logout" value="Deconnexion" class="btn btn-outline-info ml-5"></form>';
                        }
                        else {
                            echo '<button class="btn btn-outline-info ml-5" type="button"> <a href="/Contribooks/Connexion">Connexion</a></button>';
                            //echo '<form action="/ContriBooks/Connexion" method="post"><input type="submit" value="Connexion" class="btn btn-outline-info ml-5"></form>';
                        }
                        ?>
                    </li>

                </ul>
            </div>
        </nav>


    </header>
</div>

<main>
    <?= $content ?>
</main>
<!-- Site footer -->

<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Footer Content</h5>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                    voluptatem veniam, est atque cumque eum delectus sint!
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-dark">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 4</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text-dark">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Link 4</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
  </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</html>