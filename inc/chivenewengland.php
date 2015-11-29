<?php // inc/chvivenewengland.php

/* 
 * Description: Functions relating to this theme only
 */

if ( ! function_exists( 'chivenewengland_intro_header' ) ) :
    function chivenewengland_intro_header() {

        // Set defaults and includes
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        $header_img = get_header_image();

        // Header loop                
        if( is_singular() ) : ?>

            <?php
                if( post_header_image_url( get_the_ID() ) ) {
                    $header_img = post_header_image_url( get_the_ID() );
                }
            ?>

            <?php if( is_page() ) : ?>

                <header class="intro-header" style="background-image: linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.25) ), url('<?php echo $header_img; ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <div class="page-heading">
                                    <h1 class="title"><?php the_title(); ?></h1>
                                    <?php if( get_post_meta( get_the_ID(), 'post_subheading', true ) ) : ?>
                                        <hr class="small"/>
                                        <h2 class="subtitle"><?php echo get_post_meta( get_the_ID(), 'post_subheading', true ); ?></h2>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

            <?php else : ?>

                <header class="intro-header" style="background-image: linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.25) ), url('<?php echo $header_img; ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <div class="post-heading">
                                    <h1 class="title"><?php the_title(); ?></h1>
                                    <?php if( get_post_meta( get_the_ID(), 'post_subheading', true ) ) : ?>
                                        <hr class="small"/>
                                        <h2 class="subtitle"><?php echo get_post_meta( get_the_ID(), 'post_subheading', true ); ?></h2>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

            <?php endif; ?>

        <?php elseif ( tribe_is_upcoming() ) : ?>

            <header class="intro-header" style="background-image: linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.25) ), url('<?php echo $header_img; ?>')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <div class="page-heading">
                                <h1 class="title"><?php echo tribe_get_events_title(); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

        <?php else : ?>

           <header class="intro-header" style="background-image: linear-gradient( rgba(0,0,0,0.5), rgba(0,0,0,0.25) ), url('<?php echo $header_img; ?>')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <div class="site-heading">
                                <h1 class="title"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
                                <hr class="small"/>
                                <h2 class="subtitle"><?php bloginfo( 'description' ); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

        <?php endif;
    }
endif;
 
// Get header image URL
function post_header_image_url( $ID ) {
    $url = wp_get_attachment_url( get_post_thumbnail_id ($ID ) );
    return $url;
}

// Social footer links
function ChiveNewEngland_social_footer() { ?>
    <ul class="list-inline text-center">
        <li>
            <a href="https://www.facebook.com/chivenewengland" target="_blank" class="facebook" title="Like us on Facebook">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </li>
        <li>
            <a href="https://www.twitter.com/chivenewengland" target="_blank" class="twitter" title="Follow us on Twitter">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/chive_newengland" target="_blank" class="instagram" title="Follow us on Instagram">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </li>
    </ul>
<?php }

if ( function_exists( 'tribe_events_list_the_date_headers' ) ) {
   /**
	 * Used in list loop, displays the date headers between events in the loop when the month / year has changed
	 *
	 * @return void
	 **/
	function cne_tribe_events_list_the_date_headers() {

		/* Month and year separators (on every month and year change) */

		$show_headers = apply_filters( 'tribe_events_list_show_date_headers', true );

		$html = '';

		if ( $show_headers ) {

			global $post, $wp_query;

			$event_year        = tribe_get_start_date( $post, false, 'Y' );
			$event_month       = tribe_get_start_date( $post, false, 'm' );
			$month_year_format = tribe_get_option( 'monthAndYearFormat', 'F Y' );

			if ( $wp_query->current_post > 0 ) {
				$prev_post        = $wp_query->posts[$wp_query->current_post - 1];
				$prev_event_year  = tribe_get_start_date( $prev_post, false, 'Y' );
				$prev_event_month = tribe_get_start_date( $prev_post, false, 'm' );
			}


			/*
			 * If the event month changed since the last event in the loop,
			 * or is the same month but the year changed.
			 *
			 */
			if ( $wp_query->current_post === 0 || ( $prev_event_month != $event_month || ( $prev_event_month == $event_month && $prev_event_year != $event_year ) ) ) {
                $html .= sprintf( '<h4 class="subheader text-center"><i class="fa fa-calendar-o fa-fw"></i> %s</h4>', tribe_get_start_date( $post, false, $month_year_format ) );
			}

			echo apply_filters( 'tribe_events_list_the_date_headers', $html, $event_month, $event_year );
		}
	}
}


if ( ! function_exists( 'chivenewengland_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentytwelve_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Twelve 1.0
 */
function chivenewengland_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'chivenewengland' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'chivenewengland' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite><b class="fn">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'chivenewengland' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'chivenewengland' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'chivenewengland' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'chivenewengland' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'chivenewengland' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;
