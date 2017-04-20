<?php
/*
    Template Name: Savoir faire
*/
get_header();
?>


<div class="block-deco-grey"></div>
<!-- Content centered with 60px margin left and right -->
<div class="centered-block content-a-propos">
    <div class="project-a-propos">
        <div class="project-img">

        </div>
    </div>

    <div class="content-text">

        <div class="title a-propos-title">
            <p><?php the_field('titre');?></p>
        </div>
        <div class="wrapper-block flex-container">
            <div>
                <div class="block-p">
                    <div class="hero-line a-propos-txt">
                        <hr>
                        <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
                    </div>
                    <div class="paragraphe-column">
                    <p><?php the_field('champ_1');?></p><br><br>
                    <ul><li>
                      Fondations
                    </li>
                    <li>
                      Etude des sols
                    </li>
                    <li>Toiture et Charpente</li>
                    <li>Terrasse</li>
                    <li>Excavation</li>
                    <li>Isolation</li>
                    </ul><br><br>
                    <p><?php the_field('champ_2');?></p>
</div>
                </div>
                
            </div>
        </div>

  </div>
</div>
<div class="container-blocks">
    <div class="block-list">
        <div data-block="1" class="block active">
            <img src=<?= get_stylesheet_directory_uri() . "/images/fondations.svg";?> alt="icon">
            <img src=<?= get_stylesheet_directory_uri() . "/images/picto-fondation-white.svg";?> alt="iconactive">
            Fondations
        </div>
        <div data-block="2" class="block">
            <img src=<?= get_stylesheet_directory_uri() . "/images/sols.svg";?> alt="icon">
            <img src=<?= get_stylesheet_directory_uri() . "/images/picto-sol-white.svg";?> alt="iconactive">
            Etude des sols
        </div>
        <div data-block="3" class="block">
            <img src=<?= get_stylesheet_directory_uri() . "/images/charpente.svg";?> alt="icon">
            <img src=<?= get_stylesheet_directory_uri() . "/images/picto-charpente-white.svg";?> alt="iconactive">
            Charpente
        </div>
        <div data-block="4" class="block">
            <img src=<?= get_stylesheet_directory_uri() . "/images/terrasse.svg";?> alt="icon">
            <img src=<?= get_stylesheet_directory_uri() . "/images/picto-terrasse-white.svg";?> alt="iconactive">
            Terrasse
        </div>
        <div data-block="5" class="block">
            <img src=<?= get_stylesheet_directory_uri() . "/images/excavation.svg";?> alt="icon">
            <img src=<?= get_stylesheet_directory_uri() . "/images/picto-excavation-white.svg";?> alt="iconactive">
            Excavation
        </div>
        <div data-block="6" class="block">
            <img src=<?= get_stylesheet_directory_uri() . "/images/isolation.svg";?> alt="icon">
            <img src=<?= get_stylesheet_directory_uri() . "/images/picto-isolation-white.svg";?> alt="iconactive">
            Isolation
        </div>
    </div>
</div>

<section data-content="1" class="content active">
        <div class="title a-propos-title">
            <p>
              Les fondations
            </p>
        </div>
        <div class="wrapper-block flex-container">
            <div>
                <div class="block-p">
                    <div class="hero-line sf">
                        <hr>
                        <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
                    </div>

                    <div class="paragraphe-column">
                        <p><?php the_field('secteur_1');?><br><br>
                        </p>
                        <ul>
                            <?php the_field('secteur_1_liste');?>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
</section>

<section data-content="2" class="content">
    <div class="title a-propos-title">
        <p>
            Etude des sols
        </p>
    </div>
    <div class="wrapper-block flex-container">
        <div>
            <div class="block-p">
                <div class="hero-line sf">
                    <hr>
                    <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
                </div>

                <div class="paragraphe-column">
                    <p><?php the_field('secteur_2');?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-content="3" class="content">
    <div class="title a-propos-title">
        <p>
            Toiture et Charpente
        </p>
    </div>
    <div class="wrapper-block flex-container">
        <div>
            <div class="block-p">
                <div class="hero-line sf">
                    <hr>
                    <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
                </div>

                <div class="paragraphe-column">
                    <p>
                        <?php the_field('secteur_3');?>
                    </p>
                    <ul>
                        <?php the_field('secteur_3_liste');?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-content="4" class="content">
    <div class="title a-propos-title">
        <p>
            Terrasse
        </p>
    </div>
    <div class="wrapper-block flex-container">
        <div>
            <div class="block-p">
                <div class="hero-line sf">
                    <hr>
                    <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
                </div>

                <div class="paragraphe-column">
                    <p>
                        <?php the_field('secteur_4');?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-content="5" class="content">
    <div class="title a-propos-title">
        <p>
            Excavation
        </p>
    </div>
    <div class="wrapper-block flex-container">
        <div>
            <div class="block-p">
                <div class="hero-line sf">
                    <hr>
                    <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
                </div>

                <div class="paragraphe-column">
                    <p>
                        <?php the_field('secteur_5');?>
                    </p>
                    <ul>
                        <?php the_field('secteur_5_liste');?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-content="6" class="content">
    <div class="title a-propos-title">
        <p>
            Isolation
        </p>
    </div>
    <div class="wrapper-block flex-container">
        <div>
            <div class="block-p">
                <div class="hero-line sf">
                    <hr>
                    <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
                </div>

                <div class="paragraphe-column">
                    <p>
                        <?php the_field('secteur_6');?>
                    </p>
                    <ul>
                        <?php the_field('secteur_6_liste');?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="blockSlide">
    <div class="multiple-items">
        <img class="slider-img" src=<?=get_stylesheet_directory_uri() . "/images/slider-1.jpg";?>>
        <img class="slider-img" src=<?=get_stylesheet_directory_uri() . "/images/slider-2.jpg";?>>
        <img class="slider-img" src=<?=get_stylesheet_directory_uri() . "/images/slider-3.jpg";?>>
        <img class="slider-img" src=<?=get_stylesheet_directory_uri() . "/images/slider-4.jpg";?>>
    </div>
</section>


<?php include_once('partenaires.php');?>

<?php
get_footer();
?>
