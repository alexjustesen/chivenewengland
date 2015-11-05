<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();

$event_id = get_the_ID();
$ticket_url = get_post_meta(get_the_ID(), 'tickets_url', true);

$venue = tribe_get_venue_details();

?>
<div class="event-header">
   <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" >
                <?php tribe_get_template_part( 'modules/meta/details-header' ); ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div id="tribe-events-content" class="tribe-events-single vevent hentry">
                <!-- Notices -->
                <?php tribe_events_the_notices() ?>

                <?php while ( have_posts() ) :  the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <!-- Event featured image, but exclude link -->
                        <?php //echo tribe_event_featured_image( $event_id, 'full', false ); ?>

                        <!-- Event content -->
                        <?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
                        <div class="tribe-events-single-event-description tribe-events-content entry-content description">
                            <?php the_content(); ?>
                        </div>
                        <hr/>

                        <!-- Event meta -->
                        <?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
                        <?php
                        /**
                         * The tribe_events_single_event_meta() function has been deprecated and has been
                         * left in place only to help customers with existing meta factory customizations
                         * to transition: if you are one of those users, please review the new meta templates
                         * and make the switch!
                         */
                        if ( ! apply_filters( 'tribe_events_single_event_meta_legacy_mode', false ) ) {
                            tribe_get_template_part( 'modules/meta' );
                        } else {
                            echo tribe_events_single_event_meta();
                        }
                        ?>
                        
                        <!-- .tribe-events-single-event-description -->
                        <div class="text-center">
                            <?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
                        </div>
                        
                        <?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
                    </div> <!-- #post-x -->
                    <?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
                <?php endwhile; ?>
                
                <p class="tribe-events-back">
                    <a href="<?php echo esc_url( tribe_get_events_link() ); ?>" class="btn btn-link"><i class="fa fa-chevron-left fa-fw"></i> <?php printf( __( 'Back to All %s', 'tribe-events-calendar' ), $events_label_plural ); ?></a>
                </p>
                
                <?php if ( comments_open() ) : ?>
                    <div id="post-comments">
                        <hr/>
                        <?php comments_template( '', true ); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
