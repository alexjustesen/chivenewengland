<?php
/**
 * The template for displaying Author Archive pages
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ChiveNewEngland
 * @since ChiveNewEngland 1.2
 */

get_header(); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php if ( have_posts() ) : the_post(); ?>
                    <?php
                        /* Since we called the_post() above, we need to
                         * rewind the loop back to the beginning that way
                         * we can run the loop properly, in full.
                         */
                        rewind_posts();
                    ?>
                    
                    <div class="well well-sm">
                        <div class="row">
                            <div class="entry-author-avatar col-sm-3 text-center">
                                <?php 
                                    $avatar_args = array( 'class' => 'img-responsive img-circle');
                                    echo get_avatar( $post->post_author, 150, '', get_the_author(), $avatar_args );
                                ?>
                            </div>
                            <div class="entry-meta col-sm-9">
                                <h4><?php printf( __( 'About %s', 'chivenewengland' ), get_the_author() ); ?></h4>
                                
                                <?php if( the_author_meta( 'description' ) !== null ) : ?>
                                    <p><?php echo the_author_meta( 'description' ); ?></p>
                                    
                                <?php else : ?>
                                    <p><?php //printf( __( '%s doesn\'t have a description written.', 'chivenewengland' ), get_the_author() ); ?></p>
                                    
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>

                    <?php chivenewengland_content_nav( 'pager' ); ?>
                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
