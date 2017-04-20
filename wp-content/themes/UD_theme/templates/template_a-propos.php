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
            <p>L’entreprise U&G est une équipe d’experts à votre écoute, <span class="text-important">qui vous conseille et vous oriente dans vos choix techniques</span> et répond au mieux à vos besoins</p>
        </div>
        <div class="wrapper-block flex-container">
            <div>
                <div class="block-p">
                    <p class="paragraphe">Spécialisée dans la rénovation complète ou partielle d’appartement et de maison, notre équipe d’ouvriers professionnels du bâtiment intervient pour tous les travaux nécessaires à l’intérieur de votre habitât.</p>
                </div>
                <div class="block-p">
                    <p class="paragraphe"><span class="text-important"> Notre entreprise est à votre écoute</span> <br>Afin de discuter de votre projet de travaux. Nos devis sont en fourniture et pose (sauf demande contraire de votre part). Ainsi U&D gére l’intégralité de vos travaux, approvisionne et livre tous les matériels sur le chantier.</p>
                </div>
            </div>
            <div>
                <div class="block-p">
                    <p class="paragraphe">En début de chantier vous complétez un document dans lequel vous indiquez vos choix de matériel (carrelages, sanitaires, robinetteries, parquet etc..).</p>
                </div>
                <div class="block-p">
                    <p class="paragraphe">Réaliser des travaux de rénovation dans une maison ou un appartement est une chose sérieuse. Les budgets engagés sont souvent importants et il est indispensable de travailler avec une entreprise de rénovation sérieuse qui présente <span class="text-important">toutes les garanties nécessaires.</span></p>
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
                        <div class="stat-numbers">+ de 200 projets</div>
                    </div>
                </div>
            </div>

            <div class="stat-column">
                <div class="stat-block">
                    <div class="picto"></div>
                    <div class="stat-text-wrapper">
                        <div class="stat-title">Une équipe de professionnels</div>
                        <div class="stat-numbers">6 employés</div>
                    </div>
                </div>
                <div class="stat-block">
                    <div class="picto"></div>
                    <div class="stat-text-wrapper">
                        <div class="stat-title">Notre secteur d’intervention</div>
                        <div class="stat-numbers">5 départements</div>
                    </div>
                </div>
            </div>


        </div>
    </div>


</div><!--End centered-block content-a-propos-->

<?php include_once('partenaires.php');?>

<?php
get_footer();
?>
