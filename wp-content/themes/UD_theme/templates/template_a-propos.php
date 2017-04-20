<?php
/*
    Template Name: A propos
*/
get_header();
?>
<!-- decoration block on the background -->
<div class="block-deco-grey"></div>
<!-- Content centered with 60px margin left and right -->
<div class="centered-block content-a-propos">
    <div class="project-a-propos">
        <div class="project-img">

        </div>
        <div class="project-description flex-container">
            <span class="small-title separator-bottom-30">Confiez-nous votre projet </span>
            <p class="project-title separator-bottom-30">Vous avez un projet de construction, de
                rénovation ou d’aménagement ?</p>
            <button class="btn-cta">Nous contacter</button>
        </div>
    </div>

    <div class="content-text">

        <div class="title a-propos-title">
            <p><?php the_field('titre'); ?></p>
        </div>
        <div class="wrapper-block flex-container">
            <div>
                <div class="block-p">
                    <p class="paragraphe"><?php the_field('paragraphe_1');?></p>
                </div>
                <div class="block-p">
                    <p class="paragraphe"><?php the_field('paragraphe_2');?></p>
                </div>
            </div>
            <div>
                <div class="block-p">
                    <p class="paragraphe"><?php the_field('paragraphe_3');?></p>
                </div>
                <div class="block-p">
                    <p class="paragraphe"><?php the_field('paragraphe_4');?></p>
                </div>
            </div>
        </div>

        <div class="statistiques flex-container">
            <div class="stat-column">
                <div class="stat-block">
                    <div class="picto"></div>
                    <div class="stat-text-wrapper">
                        <div class="stat-title">L’année de création</div>
                        <div class="stat-numbers">2012</div>
                    </div>
                </div>
                <div class="stat-block">
                    <div class="picto"></div>
                    <div class="stat-text-wrapper">
                        <div class="stat-title">Nos réalisations</div>
                        <div class="stat-numbers"><?php the_field('nombre_projets');?></div>
                    </div>
                </div>
            </div>

            <div class="stat-column">
                <div class="stat-block">
                    <div class="picto"></div>
                    <div class="stat-text-wrapper">
                        <div class="stat-title">Une équipe de professionnels</div>
                        <div class="stat-numbers"><?php the_field('nombre_employes');?></div>
                    </div>
                </div>
                <div class="stat-block">
                    <div class="picto"></div>
                    <div class="stat-text-wrapper">
                        <div class="stat-title">Notre secteur d’intervention</div>
                        <div class="stat-numbers"><?php the_field('nombre_departements');?></div>
                    </div>
                </div>
            </div>


        </div>
    </div>





</div><!--End centered-block content-a-propos-->




<section class="wrapper-partenaire">
    <h2 class="title text-center title-partenaire">Ils nous ont fait <span class="text-important">confiance</span></h2>
    <p class="paragraphe partenaire-paragraphe">Afin d’assurer un travail de qualité, notre société s’est allié des partenaires nationalement connus. Vous bénéficiez ainsi, en plus de la qualité de nos services et de nos prestations, de la qualité des produits de ces grandes marques.</p>
    <div class="flex-container">
        <div class="flex-item partenaire-1"></div>
        <div class="flex-item partenaire-2"></div>
        <div class="flex-item partenaire-3"></div>
        <div class="flex-item partenaire-4"></div>
    </div>
    <div class="flex-container">
        <div class="flex-item partenaire-5"></div>
        <div class="flex-item partenaire-6"></div>
        <div class="flex-item partenaire-7"></div>
        <div class="flex-item partenaire-8"></div>

    </div>
</section>

<?php
get_footer();
?>
