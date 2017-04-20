
<?php get_header(); /* Template Name: Mentions legales */ ?>


<div class="ml">
   <div class="ml_blockBG">
     <img src="line2.svg">
   </div>
   <div class="ml_blockTXT">
   <h2>Mentions légales</h2>
   <h3><?php the_field('titre_1');?></h3>
   <p><?php the_field('champ_1');?></p>
<br><br><br><br>
   <h3><?php the_field('titre_2');?></h3>
   <p><?php the_field('champ_2');?></p>

</div>
 </div>
 
<?php get_footer();?>