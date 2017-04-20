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
            <p>Etape fondamentale dans la construction d’un bâtiment ou d’une maison, le gros œuvre est la base de l’ossature et est donc garant de l’entière stabilité et de la solidité du bâti.</p>
        </div>
        <div class="wrapper-block flex-container">
            <div>
                <div class="block-p">
                    <div class="hero-line a-propos-txt">
                        <hr>
                        <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
                    </div>
                    <div class="paragraphe-column">
                    <p>Il englobe tous les travaux de maçonnerie et correspond aux parties qui vont soutenir le poids de la maison et qui vont lui permettre de lutter contre les intempéries :<br><br>  
                    </p>
                    
                    <ul>
                 <li>Fondations superficielles</li>
                 <li>Fondations superficielles sur surface complète ou radier</li>
                 <li>Fondations semi-profondes</li>
                 <li>Fondations profondes</li>
               </ul><br><br><br>
               <p>Les murs porteurs, poteaux, poutres et planchers font également partie du gros œuvre. D’aucuns y englobent également la charpente, la couverture et les menuiseries extérieures.<br><br>Cette étape est achevée lorsque la construction est « hors d’eau » – c’est-à-dire lorsque la couverture a été posée – et « hors d’air » – lorsque les menuiseries ont été mises en place. Peuvent alors commencer les travaux de second œuvre et de finition : isolation, cloisons, revêtements, cheminées etc.
</p>
</div>
                </div>
                
            </div>
        </div>

<section data-content="1" class="block">
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
                        <p>Les fondations ancrent la maison pour toujours sur le terrain. Il existe plusieurs techniques de mise en œuvre selon la nature du sol, la profondeur du niveau bas, le type et le poids de l'ouvrage.
    <br><br>
    Avant de commencer les travaux, il est indispensable de faire une étude du sol. Le résultat de l'étude indiquera la nature et la portance du sol. Ceci pour déterminer le type de fondations à adapter au terrain.<br>
                    Les fondations sont le lien entre le sol dur et les murs porteurs. Le sol stable ne se trouve pas à la même profondeur partout. Selon les terrains, il faut parfois aller chercher le terrain porteur à 2 ou 5, voire 10 m de profondeur.
    <br><br>
    Il existe différents types de fondations :<br><br>
                        </p>
                        <ul>
                          <li>Fondations superficielles</li>
                          <li>Fondations superficielles sur surface complète</li>
                          <li>Fondations semi-profondes</li>
                          <li>Fondations profondes</li>
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




<?php
get_footer();
?>
