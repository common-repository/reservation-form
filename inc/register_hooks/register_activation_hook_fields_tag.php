<?php
defined('ABSPATH') || die ("You can't access this file directyly !");
$option_name = 'oops_wp_reservation_fields_tag';
if ( get_option( $option_name ) !== false ) {
 	$oops_wp_reservation_fields_tag =  get_option( 'oops_wp_reservation_fields_tag' );
    update_option( $option_name, $oops_wp_reservation_fields_tag );
} else {
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = array("field1"=>"Input", "field2"=>"Input", "field3"=>"Select", "field4"=>"Textarea");
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
