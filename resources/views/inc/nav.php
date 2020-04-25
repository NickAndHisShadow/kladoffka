<div class="navbar-fixed">
    <nav class="nav-wrapper z-depth-0">
        <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/" class="brand-logo hide-on-med-and-down">
            <span class="site-logo" style="font-family: Forte">kladoffka</span>
<!--            <img src="--><?php //$_SERVER['DOCUMENT_ROOT'] ?><!--/public/img/sova.png" class="site-logo" alt="Sova Kladoffka Shop logotype">-->
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
<!--            <li><a href="--><?php //$_SERVER['DOCUMENT_ROOT'] ?><!--/ideas">Ideas</a></li>-->
<!--            <li><a href="--><?php //$_SERVER['DOCUMENT_ROOT'] ?><!--/about">About</a></li>-->
            <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog">Shop</a></li>
<!--            <li><a href="--><?php //$_SERVER['DOCUMENT_ROOT'] ?><!--/checkout"><i  class="material-icons">shopping_cart</i></a></li>-->
        </ul>
        <form id="form1" onSubmit="window.open('/catalog?name_product='+document.getElementById('search').value+'&category_item=&from=0&to=2000&action=');">
            <div class="input-field">
                <input id="search" maxlength="=70" type="search" placeholder="search...">
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </nav>
</div>
<ul class="sidenav" id="mobile-demo">
    <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/">Home</a></li>
    <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/ideas">Ideas</a></li>
    <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/about">About</a></li>
    <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/catalog">Shop</a></li>
    <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/checkout"><i  class="material-icons">shopping_cart</i></a></li>
</ul>