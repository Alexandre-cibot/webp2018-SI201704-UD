
<?php get_header(); /* Template Name: Mentions legales */ ?>


<div class="ml">
   <div class="ml_blockBG"></div>
   <div class="ml_blockTXT">
   <h2>Mentions légales</h2>
       <div class="hero-line mentions">
           <hr>
           <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
       </div>
   <h3><?php the_field('titre_1');?></h3>
   <p><?php the_field('champ_1');?></p>
<br><br><br><br>
       <div class="hero-line mentions">
           <hr>
           <img src=<?= get_stylesheet_directory_uri() . "/images/polygon_yellow_border.svg";?> alt="">
       </div>
   <h3><?php the_field('titre_2');?></h3>
   <p><?php the_field('champ_2');?></p>

</div>
 </div>
 
<?php get_footer();?>