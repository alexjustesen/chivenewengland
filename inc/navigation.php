<?php //inc/navigation.php

register_nav_menus( array(
    'header' => __( 'Header', 'ChiveNewEngland' ),
) );

if ( ! function_exists( 'chivenewengland_content_nav' ) ) :
    /**
     * Displays navigation to next/previous pages when applicable.
     *
     * @since Twenty Twelve 1.0
     */
    function chivenewengland_content_nav( $html_id ) {
        global $wp_query;

        if ( $wp_query->max_num_pages > 1 ) : ?>
            <nav id="<?php echo esc_attr( $html_id ); ?>" class="navigation" role="navigation">
                <ul class="pager">
                    <li class="previous">
                        <?php next_posts_link( __( '<i class="fa fa-chevron-left fa-fw"></i> Older', 'chivenewengland' ) ); ?>
                    </li>
                    <li class="next">
                        <?php previous_posts_link( __( 'Newer <i class="fa fa-chevron-right fa-fw"></i>', 'chivenewengland' ) ); ?>
                    </li>
                </ul>
            </nav><!-- .navigation -->
        <?php endif;
    }
endif;