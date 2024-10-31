<?php
defined('ABSPATH') || die ("You can't access this file directyly !");
$option_name = 'oops_wp_reservation_label_name' ;
if ( get_option( $option_name ) !== false ) {
 	$get_option_label =  get_option( 'oops_wp_reservation_label_name' );
    update_option( $option_name, $get_option_label );
} else {
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = array("field1"=>"Name", "field2"=>"Email", "field3"=>"City", "field4"=>"feedback");
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}