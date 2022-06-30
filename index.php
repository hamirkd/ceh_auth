<html lang="fr">
<?php session_start();        ?>

<head>
    <title>Login 08</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <link href="./bootstrap-5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="./bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/A.style.css.pagespeed.cf.EsokhafFue.css">
    <script src="https://kit.fontawesome.com/acaa440bb5.js" crossorigin="anonymous"></script>
    <script src="./js/jquery.min.js"></script>

</head>

<body>
    <nav class="navbar  justify-content-end fixed-top navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="./img/v11.png" width="30" height="30" alt="">
        </a>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Avancer</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="p-5">
        <div class="container p-5">
            <div class="row justify-content-center p-5">
                <div class="col-md-12 text-center mb-5">
                    <h1 class="heading-section" style="font-size: xxx-large;">Authentification de diplôme</h1>
                </div>
            </div>
            <form class="row justify-content-center" action="verification.php" method="POST">

                <div class="col-lg-12 row justify-content-center ">
                    <div class="col-lg-8 login-wrap p-0 m-0 form-inline btn-outline-secondary-perso">
                        <div class="fa-solid fa-magnifying-glass" style="padding-left: 15px"></div>
                        <input class="col-md-10 form-control mr-sm-2 login-wrap" type="search" placeholder="Search" aria-label="Search" style="background:none" name="searchword" value="<?=isset($_SESSION['searchword'])?$_SESSION['searchword']:''?>" required>
                        <i class="btn fa-solid fa-camera col-md-1 col-lg-1  p-0 m-0" style="color:rgb(255, 213, 0)"></i>
                    </div>
                </div>

                <div class="col-lg-12 row justify-content-center p-5">
                    <button class="btn btn-warning col-lg-3 p-3" type="submit">Authentifier</button>
                </div>

            </form>

            <div class="row justify-content-center p-1">

                <?php
                    if(isset($_SESSION['auth'])&&$_SESSION['auth']){
                        echo "<label style='color:green;font-size: xxx-large;' class='col-lg-12 row justify-content-center '>".$_SESSION['message']."</label>";
                    }
                    if(isset($_SESSION['auth'])&&!$_SESSION['auth']){
                        echo "<label style='color:red;font-size: xxx-large;' class='col-lg-12 row justify-content-center '>".$_SESSION['message']."</label>";
                    }
                    $_SESSION['auth'] = null;
                    $_SESSION['searchword'] = null;
            ?>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.wRxug4_Avg.js"></script>


</body>

</html>