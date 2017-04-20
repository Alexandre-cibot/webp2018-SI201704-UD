<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=<?= get_stylesheet_directory_uri() . "/css/style.css"; ?> >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <script defer src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script defer src=<?php echo get_stylesheet_directory_uri() . "/script/script.js";?>></script>
    <title>Document</title>
</head>
<body>

<!-- Toaster fix-->
<div class="toaster">
   <div class="toaster_yellow">
       <img src=<?= get_stylesheet_directory_uri() . "/images/phone.svg" ?> alt="phone">
       <span>Nous vous rappelons</span>
   </div>
    <div class="toaster_content">
        <p>Avez-vous besoin d’être rappelé ? Laissez-nous votre numéro et nous vous rappelons sous 24h.</p>
        <input type="tel" placeholder="Ex : 0123456789" >
    </div>
</div>

<div class="menu">
    <img src=<?= get_stylesheet_directory_uri() . "/images/picto-cross.svg"?> alt="close">
    <nav>
        <ul>
            <a href=""><li class="active">accueil</li></a>
            <a href=""><li>savoir-faire</li></a>
            <a href=""><li>à propos</li></a>
            <a href=""><li>contact</li></a>
        </ul>
    </nav>
</div>

<header>
    <img src=<?= get_stylesheet_directory_uri() . "/images/picto-burger.svg" ?> alt="burger">
    <img src=<?= get_stylesheet_directory_uri() . "/images/logo_black.svg" ?> alt="logo U&D black">
    <img src=<?= get_stylesheet_directory_uri() . "/images/logo_white.svg" ?> alt="logo U&D white">
    <nav>
        <ul>
            <a href=""><li class="bt-devis"><img src=<?= get_stylesheet_directory_uri() . "/images/picto-devis.svg" ?> alt=""> Devis</li></a>
            <a href=""><li class="bt-devis mobile"><img src=<?= get_stylesheet_directory_uri() . "/images/picto-devis.svg" ?> alt=""></li></a>
            <a href=""><li>à propos</li></a>
            <a href=""><li>savoir-faire</li></a>
            <a href=""><li class="active">accueil</li></a>
        </ul>
    </nav>
</header>

<div class="clear"></div>