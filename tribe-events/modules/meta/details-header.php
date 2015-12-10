<?php
/**
 * Single Event Meta (Details-Header) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/details-header.php
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

<div class="tribe-events-meta-group tribe-events-meta-group-details">
	<?php do_action( 'tribe_events_single_meta_details_section_start' ); ?>
	<div id="details-header" class="row">
	    <div class="col-sm-8">
	        <ul class="list-unstyled">
                <li><i class="fa fa-map-marker fa-fw"></i> <?php echo tribe_get_venue(); ?></li>
	            <li><i class="fa fa-calendar-o fa-fw"></i> <abbr class="tribe-events-abbr updated published dtstart" title="<?php esc_attr_e( $start_ts, 'chivenewengland' ) ?>"> <?php esc_html_e( $start_date, 'chivenewengland' ) ?> </abbr> - <abbr class="tribe-events-abbr dtend" title="<?php esc_attr_e( $end_ts, 'chivenewengland' ) ?>"> <?php esc_html_e( $end_date, 'chivenewengland' ) ?> </abbr></li>
	        </ul>
	    </div>
	    <div id="tickets" class="col-sm-4">
            <ul class="list-unstyled">
                <?php if ( ! empty( $cost ) ) : ?>
                    <li><i class="fa fa-usd fa-fw"></i> <?php esc_html_e( $cost, 'chivenewengland' ); ?></li>
                <?php endif ?>
                <?php if ( ! empty( $website ) ) : ?>
                    <li><i class="fa fa-globe fa-fw"></i> <a href="<?php echo $website; ?>" target="_blank">Visit Website</a></li>
                <?php endif ?>
            </ul>
	    </div>
	    <?php if( tribe_get_cost() && !@empty( $ticket_url ) ) : ?>
	    <div class="col-sm-12 text-center text-center-xs">
            <hr/>
	        <a href="<?php echo $ticket_url; ?>" class="btn btn-success" target="_blank"><i class="fa fa-ticket fa-fw"></i> Buy Tickets</a>
	    </div>
	    <?php endif; ?>
	</div>
	<?php do_action( 'tribe_events_single_meta_details_section_end' ) ?>
</div>
