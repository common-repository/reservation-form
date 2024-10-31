<?php
defined('ABSPATH') || die ("You can't access this file directyly !");
if(isset($_POST['submit_customization'])){
  //echo $_POST['tag_field1'];
$tag_field1 = sanitize_text_field(ucwords($_POST['tag_field1']));
$tag_field2 = sanitize_text_field(ucwords($_POST['tag_field2']));
$tag_field3 = sanitize_text_field(ucwords($_POST['tag_field3']));
$tag_field4 = sanitize_text_field(ucwords($_POST['tag_field4']));


$option_name = 'tag_select_field1';
update_option( $option_name, $tag_field1 );

$option_name = 'tag_select_field2';
update_option( $option_name, $tag_field2 );

$option_name = 'tag_select_field3';
update_option( $option_name, $tag_field3 );

$option_name = 'tag_select_field4';
update_option( $option_name, $tag_field4 );

 $new_value_tags = array("field1"=>$tag_field1, "field2"=>$tag_field2, "field3"=>$tag_field3, "field4"=>$tag_field4);
$option_name = 'oops_wp_reservation_fields_tag';
update_option( $option_name, $new_value_tags );

//* fields types*//

$fieldtype1 = sanitize_text_field(ucwords($_POST['fieldtype1']));
$fieldtype2 = sanitize_text_field(ucwords($_POST['fieldtype2']));
$fieldtype3 = sanitize_text_field(ucwords($_POST['fieldtype3']));
$fieldtype4 = sanitize_text_field(ucwords($_POST['fieldtype4']));

$option_name = 'fieldtype1';
update_option( $option_name, $fieldtype1 );

$option_name = 'fieldtype2';
update_option( $option_name, $fieldtype2 );

$option_name = 'fieldtype3';
update_option( $option_name, $fieldtype3 );

$option_name = 'fieldtype4';
update_option( $option_name, $fieldtype4 );

$new_value_type = array("field1"=>$fieldtype1, "field2"=>$fieldtype2, "field3"=>$fieldtype3, "field4"=>$fieldtype4);
$option_name = 'oops_wp_reservation_fields_type';
update_option( $option_name, $new_value_type );

//*Labels Names*//
$inputfield1 = sanitize_text_field(ucwords($_POST['inputfield1']));
$inputfield2 = sanitize_text_field(ucwords($_POST['inputfield2']));
$inputfield3 = sanitize_text_field(ucwords($_POST['inputfield3']));
$inputfield4 = sanitize_text_field(ucwords($_POST['inputfield4']));

$option_name = 'inputfield1';
update_option( $option_name, $inputfield1 );

$option_name = 'inputfield2';
update_option( $option_name, $inputfield2 );

$option_name = 'inputfield3';
update_option( $option_name, $inputfield3 );

$option_name = 'inputfield4';
update_option( $option_name, $inputfield4 );

$new_value_type = array("field1"=>$inputfield1, "field2"=>$inputfield2, "field3"=>$inputfield3, "field4"=>$inputfield4);
$option_name = 'oops_wp_reservation_label_name';
update_option( $option_name, $new_value_type );
}
?>