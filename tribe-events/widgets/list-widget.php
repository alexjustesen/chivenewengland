<?php
/**
 * Events List Widget Template
 * This is the template for the output of the events list widget.
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is needed.
 *
 * This view contains the filters required to create an effective events list widget view.
 *
 * You can recreate an ENTIRELY new events list widget view by doing a template override,
 * and placing a list-widget.php file in a tribe-events/widgets/ directory
 * within your theme directory, which will override the /views/widgets/list-widget.php.
 *
 * You can use any or all filters included in this file or create your own filters in
 * your functions.php. In order to modify or extend a single filter, please see our
 * readme on templates hooks and filters (TO-DO)
 *
 * @return string
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_plural = tribe_get_event_label_plural();
$posts = tribe_get_list_widget_events();

// Check if any event posts are found.
if ( $posts ) : ?>

	<ol class="hfeed vcalendar list-unstyled" style="margin-bottom: 0;">
		<?php
		// Setup the post data for each event.
		foreach ( $posts as $post ) :
			setup_postdata( $post ); ?>
			<li class="tribe-events-list-widget-events <?php tribe_events_event_classes() ?>">
                <div class="well well-sm">
                    <a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <i class="fa fa-ticket fa-4x"></i>
                        </div>

                        <div class="details col-md-10">
                            <h4 class="entry-title summary">
                                <?php the_title(); ?>
                            </h4>
                            <?php $venue = tribe_get_venue_details();
                                if( tribe_get_venue_details() ) {
                                    echo '<i class="fa fa-map-marker fa-fw"></i>&nbsp;' . strip_tags( $venue['name'] ) . '<br/>';
                                }
                                echo '<i class="fa fa-calendar-o fa-fw"></i>&nbsp;' . tribe_events_event_schedule_details();
                            ?>
                        </div>
                    </div>
                    </a>
                </div>
			</li>
		<?php endforeach; ?>
	</ol><!-- .hfeed -->

	<div class="tribe-events-widget-link text-center">
		<a href="<?php echo esc_url( tribe_get_events_link() ); ?>" rel="bookmark" class="btn btn-link"><i class="fa fa-calendar fa-fw"></i> <?php printf( __( 'View All %s', 'tribe-events-calendar' ), $events_label_plural ); ?></a>
	</div>

<?php else : ?>
    <div class="well well-sm">
            <div class="row">
                <div class="date col-md-2 text-center">
                    <i class="fa fa-ticket"></i>
                </div>

                <div class="details col-md-10">
                    <?php printf( __( 'There are no upcoming %s at this time.', 'tribe-events-calendar' ), strtolower( $events_label_plural ) ); ?>
                </div>
            </div>
        </div>
<?php endif; ?>
