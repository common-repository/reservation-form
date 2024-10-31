<?php
defined('ABSPATH') || die ("You can't access this file directyly !");
///* wp enqueue style frontend *///
function oops_wp_reservation_form_style()
{
    wp_enqueue_style('reservation_frontend_style',plugins_url('assets/css/frontend_style_css.css',__DIR__));
}
add_action('wp_enqueue_scripts', 'oops_wp_reservation_form_style', PHP_INT_MAX);
///* wp enqueue style Admin *///
function oops_wp_reservation_form_admin_enqueue_scripts() {
    wp_register_script( 'custom-js', plugins_url('assets/js/admin_javascript.js',__DIR__), array( 'jquery' ), '', false );
    wp_enqueue_script('custom-js');
    wp_enqueue_style( 'opps_reservation_style_css_admin',plugins_url('assets/css/admin_style_css.css',__DIR__));
}
add_action( 'admin_enqueue_scripts', 'oops_wp_reservation_form_admin_enqueue_scripts');
?>
