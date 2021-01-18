<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
                    <form class="form-inline my-2 my-lg-0" action="/ContriBooks/Search" method="post">
                        <div style="width: 700px;margin:40px auto;">
                            <div id="search-box-container" >
                                <input  type="text" id="search-data" name="query" placeholder="Search By Post Title (word length should be greater than 3) ..." autocomplete="off" />
                            </div>
                            <div id="search-result-container" style="border:solid 1px #BDC7D8;display:none; ">
                            </div>
                        </div>
                        <!--<input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">-->
                        <input type="submit" value="Search" class="btn btn-outline-success my-2 my-sm-0">
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
        color:blue;
    }
</style>

<script>
    $(document).ready(function() {
            $('#search-data').unbind().keyup(function(e) {
                    var value = $(this).val();
                    if (value.length>3) {
                        //alert(99933);
                        searchData(value);
                    }
                    else {
                        $('#search-result-container').hide();
                    }
                }
            );
        }
    );
    function searchData(val){
        $('#search-result-container').show();
        $('#search-result-container').html('<div><img src="preloader.gif" width="50px;" height="50px"> <span style="font-size: 20px;">Please Wait...</span></div>');
       /* $.post('controllers/controllerTemplate.php',{'query': val}, function(data){
                console.log("lol");
                if(data != "") {
                    $('#search-result-container').html(data);
                    console.log("lolIF");
                }
                else {
                    $('#search-result-container').html("<div class='search-result'>No Result Found...</div>");
                    console.log("lolELSE");
                }
        }).fail(function(xhr, ajaxOptions, thrownError) {
                //any errors?
                alert(thrownError);
                //alert with HTTP error
            });*/
        $.ajax({
            type: "POST",
            url: "controllers/controllerTemplate.php",
            data: 'query=' + val,
            /*beforeSend: function () {
                $("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
            },*/
            success: function(data) {
                console.log("success");
                $('#search-result-container').html(data);
            },
            error: function() {
                $('#search-result-container').html("<div class='search-result'>No Result Found...</div>");
            }
        })
    }
</script>
