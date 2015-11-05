<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage chivenewengland
 * @since ChiveNewEngland 1.0
 */

get_header(); ?>

	<div class="container">
	    <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" role="main">

            <?php if ( have_posts() ) : ?>
                <header class="archive">
                    <h1 class="title"><?php
                        if ( is_day() ) :
                            printf( __( 'Daily Archives: %s', 'chivenewengland' ), '<span>' . get_the_date() . '</span>' );
                        elseif ( is_month() ) :
                            printf( __( 'Monthly Archives: %s', 'chivenewengland' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'chivenewengland' ) ) . '</span>' );
                        elseif ( is_year() ) :
                            printf( __( 'Yearly Archives: %s', 'chivenewengland' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'chivenewengland' ) ) . '</span>' );
                        else :
                            _e( 'Archives', 'ChiveNewEngland' );
                        endif;
                    ?></h1>
                </header><!-- .archive-header -->
                
                <hr/>

                <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post();

                    /* Include the post format-specific template for the content. If you want to
                     * this in a child theme then include a file called called content-___.php
                     * (where ___ is the post format) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );

                endwhile;

                chivenewengland_content_nav( 'pager' ); 

                ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            </div><!-- #content -->
        </div>
	</div><!-- #primary -->

<?php get_footer(); ?>
