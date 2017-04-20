<?php
/*
    Template Name: Devis
*/
get_header();
?>
	<!-- decoration block on the background -->
	<div class="block-deco-grey block-deco-grey-contact"></div>
	<!-- Content centered with 60px margin left and right -->
	<div class="centered-block content-a-propos">
	    <div class="project-a-propos project-a-propos-contact">
	        <div class="devis-img"></div>
	    </div>

	    <div class="content-text">
	        <div class="title a-propos-title">
	            <p><?php the_field('titre');?></p>
	        </div>
	        <div class="wrapper-block flex-container">
	            <div>
                    <div class="hero-line devis">
                        <hr>
                        <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
                    </div>
	                <div class="block-p">
	                    <p class="paragraphe"><?php the_field('champ_1');?></p>
                </div>
	            </div>
	            <div>
	                <div class="block-p">
                        <p class="paragraphe"><?php the_field('champ_2');?></p>
	                </div>
	            </div>
	        </div>
	    </div>
	</div><!--End centered-block content-a-propos-->

	<section class="devis">
		<div class="steps">
			<div class="title_formulaire">
				<img class="polygons" src=<?=get_stylesheet_directory_uri() . "/images/polygon_yellow.svg";?>>
				<span>Prise de contact</span>
			</div>
			<div class="step step_active step_01">
				<div class="line">
					<hr>
					<img class="polygons polygons-1" id="polygon-yellow" src=<?=get_stylesheet_directory_uri() . "/images/polygon_yellow.svg";?>>
				</div>
				<span>1 - Votre demande</span>
			</div>
			<div class="step step_02">
				<div class="line">
					<hr>
					<img class="polygons polygons-2" src=<?=get_stylesheet_directory_uri() . "/images/polygon_white.svg";?>>
				</div>
				<span>2 - La nature de vos travaux</span>
			</div>
			<div class="step step_03">
				<div class="line">
					<hr>
					<img class="polygons polygons-3" src=<?=get_stylesheet_directory_uri() . "/images/polygon_white.svg";?>>
				</div>
				<span>3 - Votre projet</span>
			</div>
			<div class="step step_04">
				<div class="line">
					<hr>
					<img class="polygons polygons-4" src=<?=get_stylesheet_directory_uri() . "/images/polygon_white.svg";?>>
					<img class="polygon_last polygons-5" src=<?=get_stylesheet_directory_uri() . "/images/polygon_white.svg";?>>
				</div>
				<span>4 - Vos coordonnées</span>
			</div>
			<div class="clear"></div>
		</div>
		<!--  -->
		<div>
			<div class="formulaire_content formulaire_01">
				<h2 class="titles">1 - Selectionner votre demande</h2>
				<div class="btns">
					<div class="btn_form default" id="contact_us">
						<img src=<?=get_stylesheet_directory_uri() . "/images/picto-contact.svg";?> alt="icon">
						<img src=<?=get_stylesheet_directory_uri() . "/images/picto-contact-white.svg";?> alt="iconactive">
						<span class="btn_form_span">Nous contacter</span>
					</div>
					<div class="btn_form default" id="ask_devis">
                        <img src=<?=get_stylesheet_directory_uri() . "/images/devis.svg";?> alt="icon">
                        <img src=<?=get_stylesheet_directory_uri() . "/images/picto-devis-white.svg";?> alt="iconactive">
						<span class="btn_form_span">Demander un devis</span>
					</div>
				</div>
				<button id="form_01">Suivant</button>
			</div>
			<div class="formulaire_content formulaire_02">
				<h3 class="titles">2 - Selectionnez la nature de vos travaux que vous souhaitez réaliser</h3>
				<div class="btns">
					<div class="btn_form default select-type" id="fondation">
						<img src=<?=get_stylesheet_directory_uri() . "/images/fondations.svg";?> alt="icon" >
						<img src=<?=get_stylesheet_directory_uri() . "/images/picto-fondation-white.svg";?> alt="iconactive" >
						<span class="btn_form_span">Fondations</span>
					</div>
					<div class="btn_form default select-type" id="sol">
						<img src=<?=get_stylesheet_directory_uri() . "/images/sols.svg";?> alt="icon" >
						<img src=<?=get_stylesheet_directory_uri() . "/images/picto-sol-white.svg";?> alt="iconactive" >
						<span class="btn_form_span">Études de sols</span>
					</div>
					<div class="btn_form default select-type" id="charpente">
						<img src=<?=get_stylesheet_directory_uri() . "/images/charpente.svg";?> alt="icon" >
						<img src=<?=get_stylesheet_directory_uri() . "/images/picto-charpente-white.svg";?> alt="iconactive" >
						<span class="btn_form_span">Charpente</span>
					</div>
					<div class="btn_form default select-type" id="terrasse">
						<img src=<?=get_stylesheet_directory_uri() . "/images/terrasse.svg";?> alt="icon" >
						<img src=<?=get_stylesheet_directory_uri() . "/images/picto-terrasse-white.svg";?> alt="iconactive" >
						<span class="btn_form_span">Terrasse</span>
					</div>
					<div class="btn_form default select-type" id="excavation">
						<img src=<?=get_stylesheet_directory_uri() . "/images/excavation.svg";?> alt="icon" >
						<img src=<?=get_stylesheet_directory_uri() . "/images/picto-excavation-white.svg";?> alt="iconactive" >
						<span class="btn_form_span">Excavation</span>
					</div>
					<div class="btn_form default select-type" id="isolation">
						<img src=<?=get_stylesheet_directory_uri() . "/images/isolation.svg";?> alt="icon" >
						<img src=<?=get_stylesheet_directory_uri() . "/images/picto-isolation-white.svg";?> alt="iconactive" >
						<span class="btn_form_span">Isolation</span>
					</div>
				</div>
				<button id="form_02">Suivant</button>
			</div>
			<div class="formulaire_content formulaire_03">
				<h4 class="titles">3 - Décrivez-nous votre projet</h4>
				<textarea id="description" placeholder="Détaillez votre projet, par exemple : Je souhaite faire enlever 50 m² de carrelage avec plinthes en vue d'y poser un parquet déjà en ma possession "></textarea>
				<button id="form_03">Suivant</button>
			</div>
			<div class="formulaire_content formulaire_04">
				<h5 class="titles">4 - Completez vos coordonnées</h5>
				<div class="inputs">
					<input id="name" type="text" placeholder="Nom*">
					<input id="address" type="text" placeholder="Adresse*">
					<input id="mail" type="email" placeholder="Mail*">
					<input id="phone" type="tel" placeholder="Téléphone*">
                    <input id="delay" type="text" class="double" placeholder="Délai avant début des travaux*">
				</div>
				<button id="form_04">Envoyer</button>
			</div>

		</div>
	</section>

<?php
get_footer();
?>
