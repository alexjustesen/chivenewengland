<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ChiveNewEngland
 * @since ChiveNewEngland 1.0
 */

get_header(); ?>
    
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php if ( have_posts() ) : ?>
                
                    <header class="archive">
                        <h2 class="title"><?php printf( __( 'Category Archives: %s', 'chivenewengland' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h2>

                    <?php if ( category_description() ) : ?>
                        <div class="archive-meta"><?php echo category_description(); ?></div>
                    <?php endif; ?>
                    
                    </header>
                    
                    <hr/>
                    
                    <?php 
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        get_template_part( 'content', get_post_format() );
                    endwhile;
                    
                    chivenewengland_content_nav( 'pager' ); 
                    ?>

                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif;?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
