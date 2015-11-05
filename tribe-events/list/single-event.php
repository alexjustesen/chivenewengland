<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_full_address();

// Venue microformats
$has_venue_address = ( ! empty( $venue_details ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>

<!-- Event Title -->
<?php do_action( 'tribe_events_before_the_event_title' ) ?>
<h2 class="tribe-events-list-event-title entry-title summary">
	<a class="url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title() ?>" rel="bookmark">
		<?php the_title() ?>
	</a>
</h2>
<?php do_action( 'tribe_events_after_the_event_title' ) ?>

<!-- Event Meta -->
<?php do_action( 'tribe_events_before_the_meta' ) ?>
<div class="tribe-events-event-meta vcard">
    <div class="author <?php echo $has_venue_address; ?>">
        <!-- Event Cost -->
        <?php if ( tribe_get_cost() ) : ?>
            <a href="<?php echo get_post_meta(get_the_ID(), 'tickets_url', true); ?>" class="btn btn-success pull-right hidden-xs" target="_blank"><i class="fa fa-ticket fa-fw"></i> <?php echo tribe_get_cost( null, true ); ?></a>
        <?php endif; ?>

        <!-- Schedule & Recurrence Details -->
        <div class="updated published time-details">
            <?php echo tribe_events_event_schedule_details() ?>
        </div>

        <?php if ( $venue_details ) : ?>
            <!-- Venue Display Info -->
            <div class="tribe-events-venue-details">
                <p><?php echo tribe_get_venue(); ?> <br/>
                    <?php echo $venue_details; ?></p>
            </div> <!-- .tribe-events-venue-details -->
        <?php endif; ?>

    </div>
</div><!-- .tribe-events-event-meta -->
<?php do_action( 'tribe_events_after_the_meta' ) ?>

<!-- Event Image -->
<?php //echo tribe_event_featured_image( null, 'full' ) ?>

<!-- Event Content -->
<?php do_action( 'tribe_events_before_the_content' ) ?>
<div class="tribe-events-list-event-description tribe-events-content description entry-summary text-center">
	<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="btn btn-secondary" rel="bookmark"><?php _e( 'Find out more', 'tribe-events-calendar' ) ?> <i class="fa fa-chevron-right fa-fw"></i></a>
</div><!-- .tribe-events-list-event-description -->
<?php do_action( 'tribe_events_after_the_content' ) ?>

<hr/>
