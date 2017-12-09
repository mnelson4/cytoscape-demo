<?php
/*
 Plugin Name: Cytoscape Demo
 Description: Adds a shortcode that shows a cytoscape graph
 Author: Mike Nelson
 Version: 0.1.0
 Author URI: http://cmljnelson.wordpress.com
 */

//add shortcode
add_shortcode(
    'cytoscape',
    'cytoscape_shortcode'
);
function cytoscape_shortcode($attributes)
{
    wp_enqueue_script('cytoscape',
        'https://cdnjs.cloudflare.com/ajax/libs/cytoscape/3.2.7/cytoscape.js',
        array(),
        '3.2.7',
        true
    );
    ob_start();
    include(__DIR__ . '/cytoscape-template.php');
    return ob_get_clean();
}
add_action('wp_enqueue_scripts','cytoscape_scripts');
function cytoscape_scripts()
{
    wp_enqueue_style(
        'cytoscape',
        plugins_url('cytoscape-demo/cytoscape.css'),
        array(),
        '0.1.0'
    );
}