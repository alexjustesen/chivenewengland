<?php
/**
 * Template Name: Contact Template
 */

get_header(); ?>

<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'page' ); ?>
                    
                    <p>contact form goes here!</p>

                <?php endwhile; // end of the loop. ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>