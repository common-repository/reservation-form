<?php
defined('ABSPATH') || die ("You can't access this file directyly !");
if(isset($_POST['add_more_fields'])){
	$add_more_fields_date = sanitize_text_field($_POST['add_more_fields_date']);

$option_name = 'add_more_fields_date';
update_option( $option_name, $add_more_fields_date );

	$add_more_fields_from_date = sanitize_text_field($_POST['add_more_fields_from_date']);

$option_name = 'add_more_fields_from_date';
update_option( $option_name, $add_more_fields_from_date );

	$add_more_fields_to_date = sanitize_text_field($_POST['add_more_fields_to_date']);

$option_name = 'add_more_fields_to_date';
update_option( $option_name, $add_more_fields_to_date );

	$add_more_fields_gender = sanitize_text_field($_POST['add_more_fields_gender']);

$option_name = 'add_more_fields_gender';
update_option( $option_name, $add_more_fields_gender );

	$add_more_fields_countries = sanitize_text_field($_POST['add_more_fields_countries']);

$option_name = 'add_more_fields_countries';
update_option( $option_name, $add_more_fields_countries );

	$add_more_fields_seats = sanitize_text_field($_POST['add_more_fields_seats']);

$option_name = 'add_more_fields_seats';
update_option( $option_name, $add_more_fields_seats );

	$add_more_fields_rooms = sanitize_text_field($_POST['add_more_fields_rooms']);

$option_name = 'add_more_fields_rooms';
update_option( $option_name, $add_more_fields_rooms );

}
?>