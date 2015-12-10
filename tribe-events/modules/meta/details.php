<?php
/**
 * Single Event Meta (Details) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/details.php
 *
 * @package TribeEventsCalendar
 */


$time_format = get_option( 'time_format', Tribe__Date_Utils::TIMEFORMAT );
$time_range_separator = tribe_get_option( 'timeRangeSeparator', ' - ' );

$start_datetime = tribe_get_start_date();
$start_date = tribe_get_start_date( null, false );
$start_time = tribe_get_start_date( null, false, $time_format );
$start_ts = tribe_get_start_date( null, false, Tribe__Date_Utils::DBDATEFORMAT );

$end_datetime = tribe_get_end_date();
$end_date = tribe_get_end_date( null, false );
$end_time = tribe_get_end_date( null, false, $time_format );
$end_ts = tribe_get_end_date( null, false, Tribe__Date_Utils::DBDATEFORMAT );

$cost = tribe_get_cost();
$website = tribe_get_event_website_url();
$ticket_url = get_post_meta( get_the_ID(), 'tickets_url', true );
?>

<div class="tribe-events-meta-group tribe-events-meta-group-details well">
	<h3 class="tribe-events-single-section-title text-center"> <?php _e( 'Details', 'tribe-events-calendar' ) ?> </h3>
	<?php do_action( 'tribe_events_single_meta_details_section_start' ); ?>
	<div class="row">
	    <div class="col-sm-8">
	        <ul class="list-unstyled">
	            <li><strong><i class="fa fa-calendar-o fa-fw"></i> Date &amp; Time:</strong> <br/>
	                <abbr class="tribe-events-abbr updated published dtstart" title="<?php esc_attr_e( $start_ts, 'chivenewengland' ) ?>"> <?php esc_html_e( $start_datetime, 'chivenewengland' ) ?> </abbr> - <abbr class="tribe-events-abbr dtend" title="<?php esc_attr_e( $end_ts, 'chivenewengland' ) ?>"> <?php esc_html_e( $end_datetime, 'chivenewengland' ) ?> </abbr></li>
	        </ul>
	    </div>
	    <div class="col-sm-4">
            <ul class="list-unstyled">
                <?php if ( ! empty( $cost ) ) : ?>
                    <li><strong><i class="fa fa-usd fa-fw"></i> <?php _e( 'Cost:', 'tribe-events-calendar' ); ?></strong> <?php esc_html_e( $cost, 'chivenewengland' ); ?></li>
                <?php endif ?>
                <?php if ( ! empty( $ticket_url ) ) : ?>
                    <li><strong><i class="fa fa-ticket fa-fw"></i> <?php _e( 'Tickets:', 'tribe-events-calendar' ); ?></strong> <a href="<?php echo $ticket_url; ?>" target="_blank">Buy</a></li>
                <?php endif ?>
                <?php if ( ! empty( $website ) ) : ?>
                    <li><strong><i class="fa fa-globe fa-fw"></i> <?php _e( 'Website:', 'tribe-events-calendar' ); ?></strong> <a href="<?php echo $website; ?>" target="_blank">Visit</a></li>
                <?php endif ?>
            </ul>
	    </div>
	    <div class="col-sm-12">
	        <?php
            echo tribe_get_event_categories(
                get_the_id(), array(
                    'before'       => '',
                    'sep'          => ', ',
                    'after'        => '',
                    'label'        => null, // An appropriate plural/singular label will be provided
                    'label_before' => '<dt>',
                    'label_after'  => '</dt>',
                    'wrap_before'  => '<dd class="tribe-events-event-categories">',
                    'wrap_after'   => '</dd>'
                )
            );
            ?>

            <?php echo tribe_meta_event_tags( sprintf( __( '%s Tags:', 'tribe-events-calendar' ), tribe_get_event_label_singular() ), ', ', false ) ?>
	    </div>
	</div>
	<?php do_action( 'tribe_events_single_meta_details_section_end' ) ?>
</div>
