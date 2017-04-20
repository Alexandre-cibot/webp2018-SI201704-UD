<?php
/*
    Template Name: Accueil
*/
get_header();
?>

<div class="accueil-background flex-container-accueil">
    <div class="accueil-title-left flex-container-accueil-left">
        <div class="left-line2-container">
            <div class="line2"></div>
        </div>
        <div class="flex-container-left-column">
            <h2 class="title text-white accueil-title">U&amp;D est là pour tout vos travaux de gros oeuvres et d’isolation
                en Ile-de-France. Au service des entreprises et
                des particuliers.</h2>
            <button class="btn-cta btn-accueil">Nous contacter</button>
        </div>
    </div>
</div>

<section class="services">
    <div class="service-container">
        <div class="service-item-left">
            <div class="service-item-left-margin">
                <h3 class="title text-main service-title">Nos services</h3>
                <p class="paragraphe service-paragraphe">Forte de plus de 20 ans d’expérience, l’entreprise Bâtiment MDK est spécialisée dans les travaux de
                    plomberie , maçonnerie , rénovation immobilière , couverture , ravalement de façades, chauffage ,
                    électricité et peinture auprès des particuliers, des professionnels et des syndics de copropriété.</p>
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
                    <p class=" paragraphe service-item-paragraphe">Charpente et toiture</p>
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

<?php include_once('partenaires.php');?>

<?php
get_footer();
?>
