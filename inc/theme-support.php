<?php
    if (!function_exists('ChiveNewEngland_theme_support')) :
        function ChiveNewEngland_theme_support() {
            
            // Add menu support
            add_theme_support( 'menus' );

            // Add post thumbnail
            add_theme_support( 'post-thumbnails' );

            // Add theme support for custom headers
            $header_defaults = array(
                'uploads' => true,
                'default-image' => get_template_directory_uri() . '/img/header-bg.jpg' // default header size should be 1900x600 pixels
            );
            add_theme_support( 'custom-header', $header_defaults );

            // rss thingy
            add_theme_support( 'automatic-feed-links' );

            // Add post formarts support
            add_theme_support( 'post-formats', array('aside', 'gallery', /*'link',*/ 'image' /*'quote', 'status'*/) );

            // Add title theme support
            add_theme_support( 'title-tag' );

            // Add custom background support
            add_theme_support( 'custom-background' );
            
            // Add HTML5 theme support for search form
            //add_theme_support( 'html5', array( 'search-form' ) );
            
            // Add editor style support
            add_editor_style();
            
        }

        add_action( 'after_setup_theme', 'ChiveNewEngland_theme_support' );
    endif;
