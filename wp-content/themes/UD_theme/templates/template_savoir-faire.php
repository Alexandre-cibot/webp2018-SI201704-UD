<?php
/*
    Template Name: Savoir faire
*/
get_header();
?>


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
