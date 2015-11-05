<?php //inc/widget-area.php

function chivenewengland_widgets_init() {
    // Sidebar: Landing Header
    register_sidebar(array(
        'name' => __( 'Landing Header', 'chivenewengland' ),
        'id' => 'chivenewengland_landing_header',
        'before_widget' => '<div id="%1$s" class="row"><div class="col-sm-12">',
        'after_widget' => '</div></div><hr/>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action( 'widgets_init', 'chivenewengland_widgets_init' );