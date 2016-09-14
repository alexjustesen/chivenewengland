<?php
    if (!function_exists('ChiveNewEngland_scripts')) :
        function ChiveNewEngland_scripts() {

            // deregister the jquery version bundled with wordpress
            wp_deregister_script( 'jquery' );

            // enqueue cdn modernizer, jquery and foundation        
            wp_register_script( 'jquery', get_template_directory_uri() . '/js/plugins/jQuery/jquery.min.js', array(), '2.1.1', true );
            wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/plugins/bootstrap/bootstrap.min.js', array( 'jquery' ), '3.3.4', true );
            wp_enqueue_script( 'lazyload-min', get_template_directory_uri() . '/js/plugins/lazyload/lazyload.min.js', array( 'jquery' ), '1.1.0', true );
            
            if( is_page( 'social' ) ) {
                wp_enqueue_script( 'instafeed-min', get_template_directory_uri() . '/js/plugins/instafeed/instafeed.min.js', array(), '1.4.1', true );
                wp_enqueue_script( 'coutTo', get_template_directory_uri() . '/js/plugins/countTo/countTo.js', array(), '1.0.0', true );
                wp_enqueue_script( 'instafeed', get_template_directory_uri() . '/js/instafeed.js', array(), '1.0.0', true );
            }
            
            wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '1.0.0', true );

            //enqueue foundation, normalize and custom styles
            wp_enqueue_style( 'font-lato', '//fonts.googleapis.com/css?family=Lato:300,400,700,300italics,400italic,700italic', array(), '1.0.0', 'all' );
            wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.6.3', 'all' );
            wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.3.0', 'all' );
            wp_enqueue_style( 'boostrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all' );
            wp_enqueue_style( 'chivenewengland', get_template_directory_uri() . '/css/chivenewengland.css', array(), '1.0.0', 'all' );
        }

        add_action( 'wp_enqueue_scripts', 'ChiveNewEngland_scripts' );
    endif;
    