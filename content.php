<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage ChiveNewEngland
 * @since ChiveNewEngland 1.0
 */
?>

<?php // set post_type variable
    if( ! is_singular() ) { $post_type = 'post-preview'; }
    else { $post_type = 'post-full'; }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="<?php echo $post_type; ?>">
        <?php if( ! is_singular() ) : ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark">
        <?php endif; ?>
               <header>
                   <?php if( ! is_singular() ) : ?>
                       <h3 class="post-title"><?php the_title(); ?></h3>
                   <?php endif; ?>
                      
                   <div class="row entry-meta text-muted">
                        <div class="col-xs-6">
                            <span class="block"><i class="fa fa-user fa-fw"></i> <?php printf( __( 'by %s', 'chivenewengland' ), get_the_author() ); ?></span>
                            <span class="block"><i class="fa fa-clock-o fa-fw"></i> <?php printf( __( 'on %s', 'chivenewengland'),  chivenewengland_entry_meta_dt()); ?></span>
                        </div>

                        <div class="col-xs-6 text-right">
                            <?php if ( comments_open() ) : ?>
                                <?php if( is_singular() ) : ?>
                                    <a href="#post-comments">
                                        <span class="block comments-count"><i class="fa fa-comment fa-fw"></i> <?php comments_number( '0 comments', '1 comment', '% comments' ); ?></span>
                                    </a>
                                <?php else : ?>
                                    <span class="block comments-count"><i class="fa fa-comment fa-fw"></i> <?php comments_number( '0 comments', '1 comment', '% comments' ); ?></span>
                                <?php endif; ?>

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
                    <?php if( ! is_singular() ) : ?>
                       <?php the_post_thumbnail('large', array( 'class' => 'img-responsive' ) ); ?>
                       <?php the_excerpt(); ?>
                    <?php else : ?>
                        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'chivenewengland' ) ); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'chivenewengland' ), 'after' => '</div>' ) ); ?>
                    <?php endif; ?>
               </div>
       
       <?php if( ! is_singular() ) : ?>
           </a>
       <?php endif; ?>
   
       <footer>
           <?php if( is_singular() ) : ?>
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
            <?php endif; ?>
       </footer>
    </div>
    
    <hr class="small inverse"/>
</article>
