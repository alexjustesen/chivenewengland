<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage chivenewengland
 * @since chivenewengland 1.0
 */

get_header(); ?>

	<div class="container">
	    <div class="row">
            <div id="content" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" role="main">

                <header class="page-header">
                    <h1 class="page-title text-center"><?php _e( '404!', 'chivenewengland' ); ?></h1>
                </header>

                <div class="page-wrapper">
                    <div class="page-content">
                        <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'chivenewengland' ); ?></h2>
                        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'chivenewengland' ); ?></p>

                        <?php get_search_form(); ?>
                    </div><!-- .page-content -->
                </div><!-- .page-wrapper -->

            </div><!-- #content -->
        </div>
	</div><!-- #primary -->

<?php get_footer(); ?>
