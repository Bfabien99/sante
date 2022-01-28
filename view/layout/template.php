<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <title><?= $title ?></title>
</head>
<body class="bg-success">
    <nav class="navbar navbar-light sticky-top bg-success ">
        <div class="container">
            <a href="" class="navbar-brand text-white h1 "><img src="../assets/css/bootstrap/icons/activity.svg" alt="activity.svg" width="32" height="32">Sante<img src="../assets/css/bootstrap/icons/activity.svg" alt="activity.svg" width="32" height="32"><img src="../assets/css/bootstrap/icons/heart-fill.svg" alt="heart-fill.svg" width="32" height="32" class="heart"></a>

            <ul class="nav">
                <li class="nav-item"><a href="" class="nav-link text-white">Home</a></li>
                <li class="nav-item"><a href="#contactUs" class="nav-link text-white">Contact us</a></li>
                <li class="nav-item"><a href="" class="nav-link text-white">About</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link text-white">Login</a></li>
            </ul>

        </div>
    </nav>
    
    <header class="bg-success pb-5 mb-2 h-40" >
        <div id="carouselSlide" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="../assets/img/1.jpg" alt="img" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block alert alert-success">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item  active">
                    <img src="../assets/img/2.jpg" alt="img" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </div>

            <a class="carousel-control-next" role="button" href="#carouselSlide" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <a class="carousel-control-prev" role="button" href="#carouselSlide" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
        </div>
    </header>
    <?= $content ?>

    <footer class="mt-auto p-1 text-center text-white">
        <h6>&copy; 2022 - Projet Sante NAN 5.22 </h6>
    </footer>
</body>
<script src="../assets/css/jquery.js"></script>
<script src="../assets/css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>