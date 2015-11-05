<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @subpackage ChiveNewEngland
 * @since ChiveNewEngland 1.0
 */
?>

<article id="no-content" <?php post_class(); ?>>
   <div class="post-full">
       <header>
           <?php if( ! is_singular() ) : ?>
               <h3 class="post-title"><?php _e( 'Nothing Found', 'chivenewengland' ); ?></h3>
           <?php endif; ?>
       </header>

       <hr/>

       <div class="entry-content">
            <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'chivenewengland' ), admin_url( 'post-new.php' ) ); ?></p>

            <?php elseif ( is_search() ) : ?>

            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'chivenewengland' ); ?></p>
            <?php get_search_form(); ?>

            <?php else : ?>

            <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'chivenewengland' ); ?></p>
            <?php get_search_form(); ?>

            <?php endif; ?>
       </div>
    </div>
    
    <hr class="small inverse"/>
</article>
