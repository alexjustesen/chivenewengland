<?php get_header(); ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php if ( is_front_page() ) { dynamic_sidebar("Landing Header"); } ?>

                <?php if ( have_posts() ) : ?>
                    
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>

                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>

                <?php endif;?>
                
                <?php chivenewengland_content_nav( 'pager' ); ?>                
            </div>
        </div>
    </div>
		
<?php get_footer(); ?>
