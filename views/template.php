
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
                    <li class="nav-item">
                        <!--                        <a class="nav-link" href="#">Right</a>-->
                        <?php
                        if (isset($_SESSION['login']))
                        {
                            echo'<form action="/ContriBooks/Connexion" method="post"><input type="submit" name="logout" value="Deconnexion" class="btn btn-outline-info ml-5"></form>';
                            echo '</br>';
                            echo '<form action="/ContriBooks/Profile?user='.$_SESSION["id"].'" method="post"><input type="submit" name="profile" value="Profil" class="btn btn-outline-info ml-5"></form>';
                        }
                        else {
                            echo '<button class="btn btn-outline-info ml-5" type="button"> <a href="/Contribooks/Connexion">Connexion</a></button>';
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
       $.post('controllers/controllerTemplate.php',{'query': val}, function(data){
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
            });
        // $.ajax({
        //     type: "POST",
        //     url: "controllers/controllerTemplate.php",
        //     data: 'query=' + val,
        //     /*beforeSend: function () {
        //         $("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
        //     },*/
        //     success: function(data) {
        //         console.log("success");
        //         $('#search-result-container').html(data);
        //     },
        //     error: function() {
        //         $('#search-result-container').html("<div class='search-result'>No Result Found...</div>");
        //     }
        // })
    }
</script>
