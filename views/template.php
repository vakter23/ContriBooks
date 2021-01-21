<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="utils/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <?php
        $css = "views/CSS/style$t.css";
        if(!file_exists($css)){$css = "views/CSS/style.css";}
        ?>
        <link rel="stylesheet" href="<?= $css ?>">
        <title><?= $t ?></title>
    </head>

<body>
<div style="background-color: #0151BF;" class="">
    <header style="padding-top: 10px;" class="container">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Contribooks/Rating">Meilleurs livres</a>
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
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mx-auto order-0">
                <a class="navbar-brand mx-auto" href="<?= URL ?>"><img style="width: 200px;" src="utils/media/img/LOGO.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <form class="form-inline my-2 my-lg-0" action="/ContriBooks/Search" method="post">
                        <input  class="form-control mr-sm-2" type="text" id="search-data" name="query" placeholder="Search" autocomplete="off" />
                        <input type="submit" value="Search" class="btn btn-outline-success">
                        <div id="search-result-container" style="border:solid 1px #BDC7D8;display:none; ">
                        </div>
                    </form>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['login']))
                        {
                            echo'<form action="/ContriBooks/Connexion" method="post"><input type="submit" name="logout" value="Deconnexion" class="btn btn-outline-info ml-5"></form>';
                            echo '</br>';
                            echo '<form action="/ContriBooks/Profile?user='.$_SESSION["id"].'" method="post"><input type="submit" name="profile" value="Profil" class="btn btn-outline-info ml-5"></form>';
                        }
                        else {
                            echo '<a href="/Contribooks/Connexion" class="btn btn-outline-light" role="button">Connexion</a>';
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
<footer class="text-center text-lg-start text-light" style="background-color: #0151BF">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contribooks</h5>

                <p>
                    Contribooks est un projet réalisé pour le S3 de DUT INFORMATIQUE à Montreuil
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Liens importants</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="/Contribooks/Accueil" class="text-light">Accueil</a>
                    </li>
                    <li>
                        <a href="/Contribooks/Rating" class="text-light">Meilleurs livres</a>
                    </li>
                    <li>
                        <a href="/Contribooks/NewBooks" class="text-light">Nouveautés</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Un problème</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="/Contribooks/Contact" class="text-light">Contactez nous</a>
                    </li>
                    <li>
                        <a href="/Contribooks/Rules" class="text-light">Réglement</a>
                    </li>
                    <li>
                        <a href="/Contribooks/RequestBook" class="text-light">Demande d'ajout de livres</a>
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
        © 2021 Copyright: AKTER Volkan | QUENUM-SANFO Djibril | ROUSSEAU William
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
  </body>

</html>

<style>
    #search-data{
        padding: 10px;
        border: solid 1px #BDC7D8;
        margin-bottom: 20px;
        display: inline;
        width: 100%;
    }
    .search-result{
        border-bottom:solid 1px #BDC7D8;
        padding:10px;
        font-family:Times New Roman;
        font-size: 20px;
        color:white;
    }
</style>

