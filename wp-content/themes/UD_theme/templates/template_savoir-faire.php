<?php
/*
    Template Name: Savoir faire
*/
get_header();
?>

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
                    <p>
                        Une étape fondamentale dans un projet de construction maison neuve, elle consiste, à partir d’investigations avec une machine de forage et aussi d’essais en laboratoire, à déterminer les caractéristiques des sols de son terrain, ce qui permet de définir la nature et les dimensions des fondations de votre futur maison (pieux, longrine, radier).
                        <br><br>
                        L'étude de sol garantit la pérennité de votre construction. Souvent exigée des assureurs, des architectes ou de la mairie, cette étude peut être source d’économie, car elle évite de surdimensionner les fondations.
                        <br><br>
                        Surtout, elle est essentielle pour garantir la viabilité et la durabilité de la construction en fonction du type de terrain. L’étude de sol doit être menée par un ingénieur local (selon la norme NFP 94-500 du 30 novembre 2013).
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
                        Une charpente est un assemblage de pièces de bois ou de métal, servant à soutenir ou couvrir des constructions et faisant partie de la toiture.
                        <br><br>
                        C'est une ossature porteuse ponctuelle, par opposition à la structure linéaire que constitue un mur continu. Elle peut être aussi en béton armé, et dans ce cas, cela ne correspond pas à la définition d'une charpente.
                        <br><br>
                        Elle constitue un élément important et a pour fonction d’être d’une part une protection contre les intempéries extérieures et d’autre part isolantes. Il existe plusieurs types de toiture :
                    </p>
                    <ul>
                        <li>La toiture en pente</li>
                        <li>La toiture terrasse</li>
                        <li>La toiture arrondie</li>
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
                        Le terrassement est une mise en forme du terrain avant la construction. C'est l'ensemble des travaux de fouille, de transport, d'entassement de terre, pratiqués pour modifier le relief d'un terrain permettant de réaliser ou renforcer l'ouvrage de votre future maison.
                        <br><br>
                        Le remaniement des terrains naturels entraîne une modification généralement définitive de la topographie et du paysage, en créant des ouvrages en terre soit en remblai soit en déblai.
                        <br><br>
                        Les travaux de terrassement demandent de bonnes connaissances dans les types de sols. Un sol compact nécessitera ainsi moins de travaux de terrassement qu'un sol formé d'alluvions. La période recommandée pour les travaux de terrassement est pendant les périodes sèches.
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
                        L’excavation du terrain est une étape cruciale de la préparation du terrain en vue de la construction de votre maison. Cette étape doit être bien préparée pour être réalisée avec efficacité.
                        <br><br>
                        Après avoir nivelé le terrain, le terrassier creuse les fondations de la maison à l’aide d’une pelleteuse. Ce professionnel bénéficie d’une formation spécifique pour effectuer cette opération en toute sécurité, en appliquant des normes très strictes.
                        <br><br>
                        L’excavation se fait au fur et à mesure. Le terrassier peut être amené à utiliser des machines différentes selon zones concernées. Parmi les travaux d’excavation, on peut noter :
                    </p>
                    <ul>
                        <li>le terrassement</li>
                        <li>les tranchées</li>
                        <li>les puits</li>
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
                        Lorsqu'une terrasse recouvre un local, quel qu'il soit petit (grand, habitable, isolé, chauffé, qu'il serve de stockage, qu'il reste simplement clos et couvert, ventilé naturellement ou non), elle joue le rôle de toiture pour ce local, d'où la dénomination de toiture terrasse.
                        <br><br>
                        Il s'agit donc de traiter cet élément avec le plus grand soin pour prévenir tout désordre à venir, du fait même de son rôle de couverture.
                        <br><br>
                        Comme pour toute toiture, l'étanchéité est nécessaire. Il faut également éviter la stagnation de l'eau, favoriser son évacuation et lutter contre son imprégnation dans les matériaux. Sans cela l'eau pénètre dans la maison et cause :
                    </p>
                    <ul>
                        <li>des dommages sur sa structure</li>
                        <li>des dégâts des eaux</li>
                        <li>des problèmes d'humidité à l'intérieur, tels que</li>
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
