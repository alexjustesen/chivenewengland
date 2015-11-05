<?php get_header(); ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>

                    <?php else : ?>
                            <?php get_template_part( 'content', 'none' ); ?>

                <?php endif;?> 
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<i class="fa fa-chevron-left"></i>', 'Previous post link', 'chivenewengland' ) . '</span> %title' ); ?>
                    </li>
                    <li class="next">
                        <?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '<i class="fa fa-chevron-right"></i>', 'Next post link', 'chivenewengland' ) . '</span>' ); ?>
                    </li>
                </ul>
                
                <?php if ( comments_open() ) : ?>
                    <div id="post-comments">
                        <hr/>
                        <?php comments_template( '', true ); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
		
<?php get_footer(); ?>
