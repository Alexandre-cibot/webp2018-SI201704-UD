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
	            <p>Vous avez une question ? Vous souhaitez nous soumettre votre projet ?<br><span class="text-important">Contactez-nous !</span></p>
	        </div>
	        <div class="wrapper-block flex-container">
	            <div>
                    <div class="hero-line devis">
                        <hr>
                        <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
                    </div>
	                <div class="block-p">
	                    <p class="paragraphe">Nos devis sont réalisés gratuitement par notre société. Nous tenons à ce qu’ils soient précis et détaillés, pour que vous sachiez exactement le coût de chacune de nos prestations. </p>
	                </div>
	            </div>
	            <div>
	                <div class="block-p">
	                    <p class="paragraphe">Un récapitulatif pièce par pièce et corps d’état par corps d’état vous est proposé en fin de devis. Nous nous engageons sur les dates de démarrage.</p>
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
					<img class="polygons" src=<?=get_stylesheet_directory_uri() . "/images/polygon_yellow.svg";?>>
				</div>
				<span>1 - Votre demande</span>
			</div>
			<div class="step step_02">
				<div class="line">
					<hr>
					<img class="polygons" src=<?=get_stylesheet_directory_uri() . "/images/polygon_white.svg";?>>
				</div>
				<span>2 - La nature de vos travaux</span>
			</div>
			<div class="step step_03">
				<div class="line">
					<hr>
					<img class="polygons" src=<?=get_stylesheet_directory_uri() . "/images/polygon_white.svg";?>>
				</div>
				<span>3 - Votre projet</span>
			</div>
			<div class="step step_04">
				<div class="line">
					<hr>
					<img class="polygons" src=<?=get_stylesheet_directory_uri() . "/images/polygon_white.svg";?>>
					<img class="polygon_last" src=<?=get_stylesheet_directory_uri() . "/images/polygon_white.svg";?>>
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
					<div class="btn_form">
						<img src=<?=get_stylesheet_directory_uri() . "/images/contact.svg";?>>
						<span class="btn_form_span">Nous contacter</span>
					</div>
					<div class="btn_form" id="ask-devis">
                        <img src=<?=get_stylesheet_directory_uri() . "/images/devis.svg";?>>
						<span class="btn_form_span">Demander un devis</span>
					</div>
				</div>
				<button>Suivant</button>
			</div>
			<div class="formulaire_content formulaire_02">
				<h3 class="titles">2 - Selectionnez la nature de vos travaux que vous souhaitez réaliser</h3>
				<div class="btns">
					<div class="btn_form select-type">
						<img src=<?=get_stylesheet_directory_uri() . "/images/fondations.svg";?>>
						<span class="btn_form_span">Fondations</span>
					</div>
					<div class="btn_form select-type">
						<img src=<?=get_stylesheet_directory_uri() . "/images/sols.svg";?>>
						<span class="btn_form_span">Études de sols</span>
					</div>
					<div class="btn_form select-type">
						<img src=<?=get_stylesheet_directory_uri() . "/images/charpente.svg";?>>
						<span class="btn_form_span">Charpente</span>
					</div>
					<div class="btn_form select-type">
						<img src=<?=get_stylesheet_directory_uri() . "/images/terrasse.svg";?>>
						<span class="btn_form_span">Terrasse</span>
					</div>
					<div class="btn_form select-type">
						<img src=<?=get_stylesheet_directory_uri() . "/images/excavation.svg";?>>
						<span class="btn_form_span">Excavation</span>
					</div>
					<div class="btn_form select-type">
						<img src=<?=get_stylesheet_directory_uri() . "/images/isolation.svg";?>>
						<span class="btn_form_span">Isolation</span>
					</div>
				</div>
				<button>Suivant</button>
			</div>
			<div class="formulaire_content formulaire_03">
				<h4 class="titles">3 - Décrivez-nous votre projet</h4>
				<textarea placeholder="Détaillez votre projet, par exemple : Je souhaite faire enlever 50 m² de carrelage avec plinthes en vue d'y poser un parquet déjà en ma possession "></textarea>
				<button id="finish-desc-project">Suivant</button>
			</div>
			<div class="formulaire_content formulaire_04">
				<h5 class="titles">4 - Completez vos coordonnées</h5>
				<div class="inputs">
					<input placeholder="Nom*"></input>
					<input placeholder="Adresse*"></input>
					<input placeholder="Mail*"></input>
					<input placeholder="Téléphone*"></input>
				</div>
				<button>Envoyer</button>
			</div>

		</div>
	</section>

<?php
get_footer();
?>
