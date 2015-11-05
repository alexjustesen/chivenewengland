<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage ChiveNewEnglaned
 * @since ChiveNewEngland 1.0
 */

get_header(); ?>

	<div class="container">
	    <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h3 class="page-title"><?php printf( __( 'Search Results for: %s', 'chivenewengland' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
                </header>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>

                <?php chivenewengland_content_nav( 'pager' );  ?>

            <?php else : ?>

                <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                        <h3 class="entry-title"><?php _e( 'Nothing Found', 'chivenewengland' ); ?></h3>
                    </header>

                    <div class="entry-content">
                        <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'chivenewengland' ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-0 -->

            <?php endif; ?>

            </div><!-- #content -->
        </div>
	</div><!-- #primary -->

<?php get_footer(); ?>
