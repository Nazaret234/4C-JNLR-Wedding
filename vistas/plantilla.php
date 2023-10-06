<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NextGenerationDev">
    <title>Wedding, Wedding Planer & Event HTML Template</title>
    <!--Favicon img-->
    <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
    <!--Bootstarp min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Bootstarp map css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <!--Owl Carousel css-->
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <!--Owl Carousel Theme css-->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!--All min css-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--Swiper min css-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--main css-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!--==== Header Section Here ======= -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-menu">
                    <a href="index.php?pagina=home" class="logo">
                        <img src="assets/img/logo/logo1.png" alt="img">
                    </a>
                </div>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">
                    <li>
                        <a href="#0">Invited <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="index.php?pagina=register">
                                    <span>Register</span>
                                </a>
                            </li>
                            <?php if (!isset($_SESSION["validarIngreso"])) { ?>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=service-single">
                                        <span>Login</span>
                                    </a>
                                </li>
                            <?php } ?>
                            <li class="subtwohober">
                                <a href="index.php?pagina=guests">
                                    <span>Guests</span>
                                </a>
                            </li>
                            <?php if (isset($_SESSION["validarIngreso"])) {
                                if ($_SESSION["validarIngreso"] == "ingresado") {
                                } ?>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=exit">
                                        <span>Exit</span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="index.php?pagina=home">Home</a>
                    </li>
                    <li>
                        <a href="index.php?pagina=about">About</a>
                    </li>
                    <li>
                        <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="index.php?pagina=service">
                                    <span>Service</span>
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="index.php?pagina=service-single">
                                    <span>Service Single</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?pagina=story">Our story</a>
                    </li>
                    <li>
                        <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="index.php?pagina=event">
                                    <span>Our event</span>
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="index.php?pagina=gallery">
                                    <span>Gallery</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="index.php?pagina=blog">
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="index.php?pagina=blog-single">
                                    <span>Blog Single</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?pagina=contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!--==== Header Section End ======= -->

    <!--==== Scroll-Up Section Here ======= -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--==== Scroll-Up Section End ======= -->

    <!-- En esta parte ira cada pagina -->
    <?php
    #De esta manera activamos la navegacion NAV con las variables GET, dependiendo lo que tengan, esto se acompletara a include.
    if (isset($_GET["pagina"])) {
        if (
            $_GET["pagina"] == "home" || $_GET["pagina"] == "about" || $_GET["pagina"] == "blog-single" || $_GET["pagina"] == "blog" || $_GET["pagina"] == "contact" || $_GET["pagina"] == "error"
            || $_GET["pagina"] == "event" || $_GET["pagina"] == "gallery" || $_GET["pagina"] == "service-single" || $_GET["pagina"] == "service" || $_GET["pagina"] == "story"
            || $_GET["pagina"] == "register" || $_GET["pagina"] == "login" || $_GET["pagina"] == "guests" || $_GET["pagina"] == "exit" || $_GET["pagina"] == "editar"
        ) {
            include "paginas/" . $_GET["pagina"] . ".php";
        } else {
            #Aqui en caso de que la variable $_GET tenga algo que no coincida con lo anterior, lo mandamos  a la pagina de error.
            include "paginas/error.php";
        }
    } else {
        #Aqui si es el primer ingreso en el sitio entonces lo mandamos al inicio.
        include "paginas/register.php";
    }
    ?>

    <!--=========== Footer Section Here ========= -->
    <div class="footer__section">
        <div class="container">
            <div class="border__area">
                <div class="container">
                    <div class="footer__logo center">
                        <a href="index.php?pagina=home">
                            <img src="assets/img/logo/logo.png" alt="footer__logo">
                        </a>
                    </div>
                    <div class="footer__bottom center">
                        <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
                        <ul class="footer__icon">
                            <li>
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="active">
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                            </li>
                            <li class="mr-none">
                                <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                        </ul>
                        <ul class="footer__menu">
                            <li><a href="index.php?pagina=home">home</a></li>
                            <li><a href="index.php?pagina=about">about</a></li>
                            <li><a href="index.php?pagina=service">service</a></li>
                            <li><a href="index.php?pagina=story">Story</a></li>
                            <li><a href="index.php?pagina=gallery">gallery</a></li>
                            <li><a href="index.php?pagina=blog">blog</a></li>
                            <li class="mr-none"><a href="index.php?pagina=contact">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== Footer Section End ========= -->




    <!--Jquery 3 6 0 Min Js-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--Bootstrap bundle Js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--Viewport Jquery Js-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--Wow min Js-->
    <script src="assets/js/wow.min.js"></script>
    <!--Owl Carousel min Js-->
    <script src="assets/js/owl.min.js"></script>
    <!--Swiper min Js-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--Magnific popup min Js-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--main Js-->
    <script src="assets/js/main.js"></script>
</body>

</html>