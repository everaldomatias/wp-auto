<?php

namespace WPAuto;

define( 'WPAUTO_VERSION', '0.0.1' );

function enqueue_react_app() {
    wp_enqueue_script(
        'react-app',
        get_template_directory_uri() . '/build/static/js/main.js',
        [],
        WPAUTO_VERSION,
        true
    );

    wp_enqueue_style(
        'react-app-styles',
        get_template_directory_uri() . '/build/static/css/main.css',
        [],
        WPAUTO_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'WPAuto\\enqueue_react_app' );
