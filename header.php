<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/chivenationflag_favicon.png" type="image/png">
        
        <?php wp_head(); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
        <![endif]-->
    </head>
    
    <body <?php body_class(); ?>>
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#chivenewengland-navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo get_template_directory_uri(); ?>/img/navbar_logo.png">
                    </a>
                </div>

                 <?php
                    wp_nav_menu( array(
                        'menu'              => 'header',
                        'theme_location'    => 'header',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'chivenewengland-navbar',
                        'menu_class'        => 'nav navbar-nav navbar-right',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
            </div>
        </nav>
               
       <?php chivenewengland_intro_header(); ?>
       