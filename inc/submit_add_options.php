<?php

defined('ABSPATH') || die ("You can't access this file directyly !");

$tag_select_field1 = get_option('tag_select_field1');
$tag_select_field2 = get_option('tag_select_field2');
$tag_select_field3 = get_option('tag_select_field3');
$tag_select_field4 = get_option('tag_select_field4');
//***//
$inputfield1 = get_option('inputfield1');
$inputfield2 = get_option('inputfield2');
$inputfield3 = get_option('inputfield3');
$inputfield4 = get_option('inputfield4');


if(isset($_POST['add_option_my'])){
if($tag_select_field1 == 'Select'){

$field1_add_options = array_map( 'sanitize_text_field', $_POST['field1_add_options'] );
$field1_email = array_map( 'sanitize_text_field', $_POST['field1_email'] );

$field1_output = array("field1_add_options"=>$field1_add_options, "field1_email"=>$field1_email);

$option_name = 'addoptions_value_field1';
update_option( $option_name, $field1_output );

$permission_field1 = sanitize_text_field($_POST['permission_field1']);

$option_name = 'email_permission_field1';
update_option( $option_name, $permission_field1 );

}
if($tag_select_field2 == 'Select'){

$field2_add_options = array_map( 'sanitize_text_field', $_POST['field2_add_options'] );
$field2_email = array_map( 'sanitize_text_field', $field2_email = $_POST['field2_email'] );

$field2_output = array("field2_add_options"=>$field2_add_options, "field2_email"=>$field2_email);

$option_name = 'addoptions_value_field2';
update_option( $option_name, $field2_output );

$permission_field2 = sanitize_text_field($_POST['permission_field2']);

$option_name = 'email_permission_field2';
update_option( $option_name, $permission_field2); 

}
if($tag_select_field3 == 'Select'){

$field3_add_options = array_map( 'sanitize_text_field', $_POST['field3_add_options'] );
$field3_email = array_map( 'sanitize_text_field', $_POST['field3_email'] );

$field3_output = array("field3_add_options"=>$field3_add_options, "field3_email"=>$field3_email);

$option_name = 'addoptions_value_field3';
update_option( $option_name, $field3_output );

$permission_field3 = sanitize_text_field($_POST['permission_field3']);

$option_name = 'email_permission_field3';
update_option( $option_name, $permission_field3 );
  
}
if($tag_select_field4 == 'Select'){

$field4_add_options = array_map( 'sanitize_text_field', $_POST['field4_add_options'] );
$field4_email = array_map( 'sanitize_text_field', $_POST['field4_email'] );

$field4_output = array("field4_add_options"=>$field4_add_options, "field4_email"=>$field4_email);

$option_name = 'addoptions_value_field4';
update_option( $option_name, $field4_output );

$permission_field4 = sanitize_text_field($_POST['permission_field4']);

$option_name = 'email_permission_field4';
update_option( $option_name, $permission_field4 );

}

}
?>