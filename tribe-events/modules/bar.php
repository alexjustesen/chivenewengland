<?php
/**
 * Events Navigation Bar Module Template
 * Renders our events navigation bar used across our views
 *
 * $filters and $views variables are loaded in and coming from
 * the show funcion in: lib/Bar.php
 *
 * @package TribeEventsCalendar
 *
 */
?>

<?php

$filters = tribe_events_get_filters();
$views   = tribe_events_get_views();

$current_url = tribe_events_get_current_filter_url();
?>

<?php do_action( 'tribe_events_bar_before_template' ) ?>
<div class="event-container" style="background-color: #dddddd; font-weight: 300; padding-top: 1em; padding-bottom: 1em; margin-top: -50px; margin-bottom: 50px;">
   <div class="container" >
        <div class="row">
            <div id="tribe-events-bar" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" >
                <form id="tribe-bar-form" class="tribe-clearfix text-center" name="tribe-bar-form" method="post" action="<?php echo esc_attr( $current_url ); ?>">
                    <!-- Mobile Filters Toggle -->

                    <div id="tribe-bar-collapse-toggle" <?php if ( count( $views ) == 1 ) { ?> class="tribe-bar-collapse-toggle-full-width"<?php } ?>>
                        <?php //printf( __( 'Find %s', 'tribe-events-calendar' ), tribe_get_event_label_plural() ); ?><span class="tribe-bar-toggle-arrow"></span>
                    </div>

                    <!-- Views -->
                    <?php if ( count( $views ) > 1 ) { ?>
                        <div class="row">
                            <div class="col-sm-8">
                                
                            </div>
                            <div class="col-sm-4 text-right">
                                <div id="tribe-bar-views" class="hidden">
                                    <div class="tribe-bar-views-inner tribe-clearfix">
                                        <h3 class="tribe-events-visuallyhidden"><?php _e( 'Event Views Navigation', 'tribe-events-calendar' ) ?></h3>
                                        <label><?php _e( 'View As', 'tribe-events-calendar' ); ?></label>
                                        <select class="tribe-bar-views-select tribe-no-param" name="tribe-bar-view">
                                            <?php foreach ( $views as $view ) : ?>
                                                <option <?php echo tribe_is_view( $view['displaying'] ) ? 'selected' : 'tribe-inactive' ?> value="<?php echo $view['url'] ?>" data-view="<?php echo $view['displaying'] ?>">
                                                    <?php echo $view['anchor'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <!-- .tribe-bar-views-inner -->
                                </div><!-- .tribe-bar-views -->
                                
                                <div id="cne-view-as" class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><?php _e( 'View As', 'tribe-events-calendar' ); ?> <span class="caret"></span></button>
                                    <ul id="cne-view-as" class="dropdown-menu"></ul>
                                </div>
                            </div>
                        </div>
                    <?php }  if ( count( $views ) > 1 ) ?>

                    <?php if ( ! empty( $filters ) ) { ?>
                        <div class="tribe-bar-filters hidden">
                            <div class="tribe-bar-filters-inner tribe-clearfix">
                                <?php foreach ( $filters as $filter ) : ?>
                                    <div class="<?php echo esc_attr( $filter['name'] ) ?>-filter">
                                        <label class="label-<?php echo esc_attr( $filter['name'] ) ?>" for="<?php echo esc_attr( $filter['name'] ) ?>"><?php echo $filter['caption'] ?></label>
                                        <?php echo $filter['html']; ?>
                                    </div>
                                <?php endforeach; ?>
                                <div class="tribe-bar-submit">
                                    <input class="tribe-events-button tribe-no-param" type="submit" name="submit-bar" value="<?php printf( __( 'Find %s', 'tribe-events-calendar' ), tribe_get_event_label_plural() ); ?>" />
                                </div>
                                <!-- .tribe-bar-submit -->
                            </div>
                            <!-- .tribe-bar-filters-inner -->
                        </div><!-- .tribe-bar-filters -->
                    <?php }  if ( !empty( $filters ) ) ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php do_action( 'tribe_events_bar_after_template' ) ?>

