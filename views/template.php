<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="views/CSS/styleAccueil.css">
        <title><?= $t ?></title>
    </head>

    <body>
    <div class="container">

        <header style="padding-top: 25px;" class="Primary container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?= URL ?>"><img style="height: 75px;" src="utils/media/img/logo.jpg"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Meilleurs livres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Nouveautés</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Genre
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Type
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="/ContriBooks/Search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                        <button class="btn btn-outline-info ml-5" type="button"> <a href="viewConnexion.php">Connexion</a></button>
                </div>
            </nav>

        </header>
    </div>

    <main>
            <?= $content ?>
        </main>
    <!-- Site footer -->
    <footer class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/about/">About Us</a></li>
                        <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="">
                    <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved to
                    <a href="#">Djibril QUENUM-SANFO</a>
                    <a href="#">Volkan AKTER</a>
                    <a href="#">William ROUSSEAU</a>

                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="">
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
<!--    <footer class="bg-light text-center text-lg-start mw-100" style="background-color: rgba(0, 0, 0, 0.2)">-->
<!--        <!-- Grid container -->-->
<!--        <div class="container p-4">-->
<!--            <!--Grid row-->-->
<!--            <div class="row">-->
<!--                <!--Grid column-->-->
<!--                <div class="text-center">-->
<!--                    <a href="template.php">Nous contacter</a>-->
<!--                    <a href="template.php">Conditions d'utilisation</a>-->
<!--                    <a href="template.php">À propos</a>-->
<!--                </div>-->
<!--                <!--Grid column-->-->
<!---->
<!---->
<!--            </div>-->
<!--            <!--Grid row-->-->
<!--        </div>-->
<!--        <!-- Grid container -->-->
<!---->
<!--        <!-- Copyright -->-->
<!--        <div class="text-center p-3" >-->
<!--            © 2021 Contribooks-->
<!--        </div>-->
<!--        <!-- Copyright -->-->
<!--    </footer>-->
    <!-- Footer -->    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>