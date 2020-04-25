<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/autoload.php";
include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/inc/head.php";

use app\User;

?>
<div class="wrapper">
    <div class="top-index z-depth-2">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/inc/nav.php"; ?>
        <header class="h-index">
            <div class="container">
<!--                <div class="header-text right">-->
<!--                    <div class="card horizontal">-->
<!--                        <div class="card-stacked z-depth-2">-->
<!--                            <div class="card-content">-->
<!--                                <p>I am a very simple card. I am good at containing small bits of information.</p>-->
<!--                            </div>-->
<!--                            <div class="card-action">-->
<!--                                <a href="#">Позвонить</a>-->
<!--                                <a href="#">Написать</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


                <h1 class="grey-text text-lighten-5">Your favorite<br/>Kladoffka Shop</h1>
                <a class="waves-effect waves-brown waves-ripple btn-large"
                   href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog">SHOP</a>

            </div>
        </header>
    </div>
    <main>
        <section id="block1">
            <div class="container">
                <div class="row">
                    <div class="col s12 m4 l4 xl4">
                        <div class="promo center"><i class="material-icons">star</i>
                            <h4 class="promo-caption">Best Quality</h4>
                            <p class="light center"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea est exercitationem harum illum impedit placeat qui quod ratione repellat similique. Ab aliquam culpa debitis maxime nulla quam sint soluta tenetur!</span>
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m4 l4 xl4">
                        <div class="promo center"><i class="material-icons">directions_car</i>
                            <h4 class="promo-caption">The Fastest Delivery</h4>
                            <p class="light center"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea est exercitationem harum illum impedit placeat qui quod ratione repellat similique. Ab aliquam culpa debitis maxime nulla quam sint soluta tenetur!</span>
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m4 l4 xl4">
                        <div class="promo center"><i class="material-icons">accessibility</i>
                            <h4 class="promo-caption">Client Care</h4>
                            <p class="light center"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea est exercitationem harum illum impedit placeat qui quod ratione repellat similique. Ab aliquam culpa debitis maxime nulla quam sint soluta tenetur!</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="block2">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6 xl4 grid">
                        <figure class="effect-sarah z-depth-2">
                            <img class="materialboxed"
                                 src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/public/img/goods/bag1.jpg">
                            <figcaption>
                                <h2>Choose <span>bag</span></h2>
                                <p>sizes 15-30 sm.</p>
                                <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog?name_product=&category_item=bag&from=0&to=2000&action=">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col s12 m6 l6 xl4 grid">
                        <figure class="effect-sarah z-depth-2">
                            <img class="materialboxed"
                                 src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/public/img/goods/purge1.jpg">
                            <figcaption>
                                <h2>Choose <span>purge</span></h2>
                                <p>sizes 85-105 sm.</p>
                                <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog?name_product=&category_item=purge&from=0&to=2000&action=">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col s12 m6 l6 xl4 grid">
                        <figure class="effect-sarah z-depth-2">
                            <img class="materialboxed"
                                 src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/public/img/goods/cup1.webp">
                            <figcaption>
                                <h2>Choose <span>purge</span></h2>
                                <p>volumes 75-250 ml</p>
                                <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog?name_product=&category_item=cup&from=0&to=2000&action=">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section id="block3">
            <div class="carousel center">
                <a class="carousel-item" href="/catalog?name_product=&category_item=bag&from=0&to=2000&action="><img
                            src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/public/img/goods/carousel-1.png" alt="Сумка 1"></a>
                <a class="carousel-item" href="/catalog?name_product=&category_item=bag&from=0&to=2000&action="><img
                            src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/public/img/goods/carousel-2.png" alt="Сумка 2"></a>
                <a class="carousel-item" href="/catalog?name_product=&category_item=bag&from=0&to=2000&action="><img
                            src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/public/img/goods/carousel-3.png" alt="Сумка 1"></a>
                <a class="carousel-item" href="/catalog?name_product=&category_item=bag&from=0&to=2000&action="><img
                            src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/public/img/goods/carousel-4.png" alt="Сумка 3"></a>
            </div>
        </section>
    </main>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/inc/footer.php";
    ?>
</div>
