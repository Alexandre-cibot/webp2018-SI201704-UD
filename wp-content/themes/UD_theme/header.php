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
    <title>U&D - Entreprise de batiment</title>
</head>
<body <?php if(get_site_url() . "/accueil" == home_url(add_query_arg(array(),$wp->request))) echo 'class="home"'; ?>>

<!-- Toaster fix-->
<div class="toaster toaster_yellow_down" id="toaster">
    <form action="<?=get_site_url() . "/formulaire";?>" method="POST">
       <div class="toaster_yellow">
           <img class="phone" src=<?= get_stylesheet_directory_uri() . "/images/phone.svg" ?> alt="phone">
           <span>Nous vous rappelons</span>
           <img class="arrow" src=<?= get_stylesheet_directory_uri() . "/images/picto-arrow-up.svg" ?> alt="arrow">
       </div>
        <div class="toaster_content">
            <p>Avez-vous besoin d’être rappelé ? Laissez-nous votre numéro et nous vous rappelons sous 24h.</p>
            <input type="tel" name="phone" placeholder="Ex : 0123456789" >
            <button type="submit"><img src=<?= get_stylesheet_directory_uri() . "/images/picto-arrow-right.svg" ?> alt="arrow"></button>
            <div class="clear"></div>
        </div>
    </form>
</div>

<div class="menu">
    <img src=<?= get_stylesheet_directory_uri() . "/images/picto-cross.svg"?> alt="close">
    <nav>
        <ul>
            <a href=<?= get_site_url() . "/accueil";?>><li class="active">accueil</li></a>
            <a href=<?= get_site_url() . "/savoir-faire";?>><li>savoir-faire</li></a>
            <a href=<?= get_site_url() . "/a-propos";?>><li>à propos</li></a>
            <a href=<?= get_site_url() . "/devis";?>><li>contact</li></a>
        </ul>
    </nav>
</div>

<header>
    <img src=<?= get_stylesheet_directory_uri() . "/images/picto-burger.svg" ?> alt="burger">
    <a href=<?= get_site_url() . "/accueil";?>>

    <?php if(get_site_url() . "/accueil" == home_url(add_query_arg(array(),$wp->request))) : ?>
    <img src=<?= get_stylesheet_directory_uri() . "/images/logo_white.svg" ?> alt="logo U&D white">
    <?php else : ?>
    <img src=<?= get_stylesheet_directory_uri() . "/images/logo_black.svg" ?> alt="logo U&D black">
    <?php endif; ?>
    </a>
    <nav>
        <ul>
            <a href=<?= get_site_url() . "/devis";?>><li class="bt-devis"><img src=<?= get_stylesheet_directory_uri() . "/images/picto-devis.svg" ?> alt=""> Devis</li></a>
            <a href=<?= get_site_url() . "/devis";?>><li class="bt-devis mobile"><img src=<?= get_stylesheet_directory_uri() . "/images/picto-devis.svg" ?> alt=""></li></a>
            <a href=<?= get_site_url() . "/a-propos";?>><li class="<?=is_active("a propos");?>">à propos</li></a>
            <a href=<?= get_site_url() . "/savoir-faire";?>><li class="<?=is_active("savoir faire");?>">savoir-faire</li></a>
            <a href=<?= get_site_url() . "/accueil";?>><li class="<?=is_active("accueil");?>">accueil</li></a>
        </ul>
    </nav>
</header>

<div class="clear"></div>
