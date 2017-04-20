<?php
/*
    Template Name: Accueil
*/
get_header();
?>

<div class="accueil-background flex-container-accueil">
    <div class="accueil-title-left flex-container-accueil-left">
        <div class="flex-container-left-column">
            <h2 class="title text-white accueil-title"><?php the_field('titre');?></h2>
            <button class="btn-cta btn-accueil">Nous contacter</button>
        </div>
    </div>
</div>

<section class="services">
    <div class="service-container">
        <div class="service-item-left">
            <div class="service-item-left-margin">
                <div class="hero-line services">
                    <hr>
                    <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
                </div>
                <h3 class="title text-main service-title">Nos services</h3>
                <p class="paragraphe service-paragraphe"><?php the_field('nos_services');?></p>
            </div>
        </div>
        <div class="service-item-right-ctn">
            <div class="service-item-right-ctn-left">
                <div class="service-item">
                    <div class="service-item-logo serv-item-logo-1"></div>
                    <p class="paragraphe service-item-paragraphe">Fondations</p>
                </div>
                <div class="service-item">
                    <div class="service-item-logo serv-item-logo-2"></div>
                    <p class="paragraphe service-item-paragraphe">Sols</p>
                </div>
                <div class="service-item">
                    <div class="service-item-logo serv-item-logo-3"></div>
                    <p class=" paragraphe service-item-paragraphe">Toiture</p>
                </div>
            </div>
            <div class="service-item-right-ctn-right">
                <div class="service-item">
                    <div class="service-item-logo serv-item-logo-4"></div>
                    <p class=" paragraphe service-item-paragraphe">Terrasse</p>
                </div>
                <div class="service-item">
                    <div class="service-item-logo serv-item-logo-5"></div>
                    <p class=" paragraphe service-item-paragraphe">Excavation</p>
                </div>
                <div class="service-item">
                    <div class="service-item-logo serv-item-logo-6"></div>
                    <p class=" paragraphe service-item-paragraphe">Isolation</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ref">

 <div class="refBlock-1">
  <div class="res1 res">
  <!--<div class="resTxt">
  <p class="resTxt-title">Rénovation<br><span>2012</span></p>
</div>-->
  </div>
 </div>
 <div class="refBlock-2">
  <div class="res2 res"></div>
  <div class="res3 res"></div>
  <div class="res4 res"></div>
  <div class="res5 res"></div>
 </div>
 
 <div class="refBlock-3">
  <div class="res6 res"></div>
 </div>
 
</section>

<?php include_once('partenaires.php');?>

<?php
get_footer();
?>
