<?php

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/* Define Constants */
$theme_version = wp_get_theme()->get('Version');
if (WP_ENV === 'development' || WP_ENV === 'staging') {
    $theme_version = time();
}

define('THEME_VERSION', $theme_version);

/* Theme */
require_once('inc/theme/Support.php');
require_once('inc/theme/Rest.php');

/* Plugins */
