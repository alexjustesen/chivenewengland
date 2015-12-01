<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage chivenewengland
 * @since chivenewengland 1.0
 */
?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="post-full">
       <header>
           <div class="row entry-meta text-muted">
                <div class="col-xs-6">
                    <span class="block"><i class="fa fa-user fa-fw"></i> <?php printf( __( 'by %s', 'chivenewengland' ), get_the_author() ); ?></span>
                </div>

                <div class="col-xs-6 text-right">
                    <?php if ( comments_open() ) : ?>
                        <a href="#post-comments">
                            <span class="block comments-count"><i class="fa fa-comment fa-fw"></i> <?php comments_number( '0 comments', '1 comment', '% comments' ); ?></span>
                        </a>

                    <?php else : ?>
                        <span class="fa-stack">
                            <i class="fa fa-comment-o fa-stack-1x"></i>
                            <i class="fa fa-times fa-stack-1x"></i>
                        </span>
                        <?php echo __( 'comments off', 'chivenewengland' ); ?>
                    <?php endif; ?>
                </div>
            </div>
       </header>

       <hr/>

       <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'chivenewengland' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'chivenewengland' ), 'after' => '</div>' ) ); ?>
       </div>

       <footer>
           <hr/>
           <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-3 entry-meta-author-avatar">
                        <?php 
                            $avatar_args = array( 'class' => 'img-responsive img-circle');
                            echo get_avatar( $post->post_author, 150, '', get_the_author(), $avatar_args );
                        ?>
                    </div>

                    <div class="col-sm-9 entry-meta">
                        <h4>Posted by <?php echo get_the_author(); ?></h4>
                        <p><?php chivenewengland_entry_meta(); ?></p>
                    </div>
                </div>
            </div>
       </footer>
    </div>
    
    <hr class="small inverse"/>
</article>
