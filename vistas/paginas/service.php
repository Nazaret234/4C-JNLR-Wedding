<?php
if (!isset($_SESSION["validarIngreso"])) {
    echo '<script> window.location = "index.php?pagina=login";</script>';
    return;
} else {
    if ($_SESSION["validarIngreso"] != "ingresado") {
        echo '<script> window.location = "index.php?pagina=login";</script>';
        return;
    }
}
?>
<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                our Service
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.php?pagina=home">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Service
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section Here ========= -->

<!--=========== Service Section Here ========= -->
<section class="service__section pt-120 pb-120">
    <div class="left__shape">
        <img src="assets/img/testi/shape-left.png" alt="left__shape">
    </div>
    <div class="container">
        <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
            <h2 class="section__title">
                service
            </h2>
            <img src="assets/img/tittle/flower.png" alt="flower__tittle">
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                    <div class="service__thumb">
                        <a href="index.php?pagina=service-single">
                            <img src="assets/img/service/service1.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="index.php?pagina=service-single">
                                Photography
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                        </p>
                        <a href="index.php?pagina=service-single" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                    <div class="service__thumb">
                        <a href="index.php?pagina=service-single">
                            <img src="assets/img/service/service2.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="index.php?pagina=service-single">
                                reception
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                        </p>
                        <a href="index.php?pagina=service-single" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                    <div class="service__thumb">
                        <a href="index.php?pagina=service-single">
                            <img src="assets/img/party/wedding3.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="index.php?pagina=service-single">
                                wedding cake
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                        </p>
                        <a href="index.php?pagina=service-single" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                    <div class="service__thumb">
                        <a href="index.php?pagina=service-single">
                            <img src="assets/img/service/service3.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="index.php?pagina=service-single">
                                wedding post
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                        </p>
                        <a href="index.php?pagina=service-single" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items style__service">
                    <div class="service__thumb">
                        <a href="index.php?pagina=service-single">
                            <img src="assets/img/service/service4.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="index.php?pagina=service-single">
                                wedding ring
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                        </p>
                        <a href="index.php?pagina=service-single" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items style__two">
                    <div class="service__thumb">
                        <a href="index.php?pagina=service-single">
                            <img src="assets/img/service/service5.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="index.php?pagina=service-single">
                                wedding dress
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on finding the perfect person.
                        </p>
                        <a href="index.php?pagina=service-single" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Service Section End ========= -->