<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php
                // Start the loop.
                while ( have_posts() ) : the_post(); ?>
                    <div>
                        <h1><?php echo the_title();?></h1>
                        <div>
                            <p><?php echo the_content();?></p>
                        </div>
                    </div>
        <?php endwhile; ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
