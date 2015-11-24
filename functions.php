<?php // functions.php

// Various clean up functions
require_once('inc/cleanup.php'); 

// Required for Bootstrap to work properly
require_once('inc/chivenewengland.php');

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');

// Register all navigation menus
require_once('inc/navigation.php');

// Create widget areas in sidebar and footer
require_once('inc/widget-areas.php');

// Return entry meta information for posts
require_once('inc/entry-meta.php');

// Enqueue scripts
require_once('inc/enqueue-scripts.php');

// Add theme support
require_once('inc/theme-support.php');

// Add social functions
require_once('inc/social.php');

// Add additional user profile fields support
require_once('inc/user_profile.php');