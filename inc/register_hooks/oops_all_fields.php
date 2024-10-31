<?php
defined('ABSPATH') || die ("You can't access this file directyly !");
//**tag_select_field1**//
$option_name = 'tag_select_field1';
if ( get_option( $option_name ) !== false ) {
 
 	$tag_select_field1 =  get_option( 'tag_select_field1' );
    update_option( $option_name, $tag_select_field1 );
} else {
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "Input";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
//**tag_select_field2**//
$option_name = 'tag_select_field2';
if ( get_option( $option_name ) !== false ) {
 	$tag_select_field2 =  get_option( 'tag_select_field2' );
    update_option( $option_name, $tag_select_field2 );
} else {
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "Input";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
//**tag_select_field3**//
$option_name = 'tag_select_field3';
if ( get_option( $option_name ) !== false ) {
 	$tag_select_field3 =  get_option( 'tag_select_field3' );
    update_option( $option_name, $tag_select_field3 ); 
} else {
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "Select";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
//**tag_select_field4**//
$option_name = 'tag_select_field4';
if ( get_option( $option_name ) !== false ) {
 
 	$tag_select_field4 =  get_option( 'tag_select_field4' );
    update_option( $option_name, $tag_select_field4 );
} else {
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "Textarea";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
//**fieldtype1**//
$option_name = 'fieldtype1';
if ( get_option( $option_name ) !== false ) {
 
 	$fieldtype1 =  get_option( 'fieldtype1' );
    update_option( $option_name, $fieldtype1 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "Text";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
//**fieldtype2**//
$option_name = 'fieldtype2';

 
if ( get_option( $option_name ) !== false ) {
 
 	$fieldtype2 =  get_option( 'fieldtype2' );
    update_option( $option_name, $fieldtype2 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "Text";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
//**fieldtype3**//
$option_name = 'fieldtype3';

 
if ( get_option( $option_name ) !== false ) {
 
 	$fieldtype3 =  get_option( 'fieldtype3' );
    update_option( $option_name, $fieldtype3 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "Text";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
//**fieldtype4**//
$option_name = 'fieldtype4';

 
if ( get_option( $option_name ) !== false ) {
 
 	$fieldtype4 =  get_option( 'fieldtype4' );
    update_option( $option_name, $fieldtype4 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "Text";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
//**inputfield1**//
$option_name = 'inputfield1';

 
if ( get_option( $option_name ) !== false ) {
 
 	$inputfield1 =  get_option( 'inputfield1' );
    update_option( $option_name, $inputfield1 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "Name";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
//**inputfield2**//
$option_name = 'inputfield2';

 
if ( get_option( $option_name ) !== false ) {
 
 	$inputfield2 =  get_option( 'inputfield2' );
    update_option( $option_name, $inputfield2 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "Email";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
//**inputfield3**//
$option_name = 'inputfield3';

 
if ( get_option( $option_name ) !== false ) {
 
 	$inputfield3 =  get_option( 'inputfield3' );
    update_option( $option_name, $inputfield3 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "City";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
//**inputfield4**//
$option_name = 'inputfield4';

 
if ( get_option( $option_name ) !== false ) {
 
 	$inputfield4 =  get_option( 'inputfield4' );
    update_option( $option_name, $inputfield4 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "Feedback";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}


//**addoptions_value_field1**//


$option_name = 'addoptions_value_field1';

 
if ( get_option( $option_name ) !== false ) {
 
    $addoptions_value_field1 =  get_option( 'addoptions_value_field1' );
    update_option( $option_name, $addoptions_value_field1 );
 
} else {
 
    $add_options = array("newyork", "india", "pakistan");
    $field_email = array("newyork@test.com", "india@test.com", "pakistan@test.com");
    $new_value = array("field1_add_options"=>$add_options, "field1_email"=>$field_email);
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

//**addoptions_value_field2**//


$option_name = 'addoptions_value_field2';

 
if ( get_option( $option_name ) !== false ) {
 
    $addoptions_value_field2 =  get_option( 'addoptions_value_field2' );
    update_option( $option_name, $addoptions_value_field2);
 
} else {
 
    $add_options = array("newyork", "india", "pakistan");
    $field_email = array("newyork@test.com", "india@test.com", "pakistan@test.com");
    $new_value = array("field2_add_options"=>$add_options, "field2_email"=>$field_email);
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

//**addoptions_value_field3**//


$option_name = 'addoptions_value_field3';

 
if ( get_option( $option_name ) !== false ) {
 
    $addoptions_value_field3 =  get_option( 'addoptions_value_field3' );
    update_option( $option_name, $addoptions_value_field3);
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $add_options = array("newyork", "india", "pakistan");
    $field_email = array("newyork@test.com", "india@test.com", "pakistan@test.com");
    $new_value = array("field3_add_options"=>$add_options, "field3_email"=>$field_email);
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

//**addoptions_value_field4**//


$option_name = 'addoptions_value_field4';

 
if ( get_option( $option_name ) !== false ) {
 
    $addoptions_value_field4 =  get_option( 'addoptions_value_field4' );
    update_option( $option_name, $addoptions_value_field4);
 
} else {

    $add_options = array("newyork", "india", "pakistan");
    $field_email = array("newyork@test.com", "india@test.com", "pakistan@test.com");
    $new_value = array("field4_add_options"=>$add_options, "field4_email"=>$field_email);
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

////***email_permission_field1**////
$option_name = 'email_permission_field1';

 
if ( get_option( $option_name ) !== false ) {
 
    $email_permission_field1 =  get_option( 'email_permission_field1' );
    update_option( $option_name, $email_permission_field1 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "off";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

////***email_permission_field2**////

$option_name = 'email_permission_field2';

 
if ( get_option( $option_name ) !== false ) {
 
    $tag_select_field2 =  get_option( 'email_permission_field2' );
    update_option( $option_name, $tag_select_field2 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "off";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

////***email_permission_field3**////

$option_name = 'email_permission_field3';

 
if ( get_option( $option_name ) !== false ) {
 
    $tag_select_field3 =  get_option( 'email_permission_field3' );
    update_option( $option_name, $tag_select_field3 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "on";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

////***email_permission_field4**////

$option_name = 'email_permission_field4';

 
if ( get_option( $option_name ) !== false ) {
 
    $tag_select_field4 =  get_option( 'email_permission_field4' );
    update_option( $option_name, $tag_select_field4 );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "off";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}


////**Add More Fields Date***///

$option_name = 'add_more_fields_date';

 
if ( get_option( $option_name ) !== false ) {
 
    $add_more_fields_date =  get_option( 'add_more_fields_date' );
    update_option( $option_name, $add_more_fields_date );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "OFF";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

////**Add More Fields add_more_fields_from_date***///

$option_name = 'add_more_fields_from_date';

 
if ( get_option( $option_name ) !== false ) {
 
    $add_more_fields_from_date =  get_option( 'add_more_fields_from_date' );
    update_option( $option_name, $add_more_fields_from_date );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "OFF";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

////**Add More Fields add_more_fields_to_date***///

$option_name = 'add_more_fields_to_date';

 
if ( get_option( $option_name ) !== false ) {
 
    $add_more_fields_to_date =  get_option( 'add_more_fields_to_date' );
    update_option( $option_name, $add_more_fields_to_date );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "OFF";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

////**Add More Fields add_more_fields_gender***///

$option_name = 'add_more_fields_gender';

 
if ( get_option( $option_name ) !== false ) {
 
    $add_more_fields_gender =  get_option( 'add_more_fields_gender' );
    update_option( $option_name, $add_more_fields_gender );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "OFF";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

////**Add More Fields add_more_fields_countries***///

$option_name = 'add_more_fields_countries';

 
if ( get_option( $option_name ) !== false ) {
 
    $add_more_fields_countries =  get_option( 'add_more_fields_countries' );
    update_option( $option_name, $add_more_fields_countries );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "OFF";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

////**Add More Fields add_more_fields_seats***///

$option_name = 'add_more_fields_seats';

 
if ( get_option( $option_name ) !== false ) {
 
    $add_more_fields_seats =  get_option( 'add_more_fields_seats' );
    update_option( $option_name, $add_more_fields_seats );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "OFF";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}

////**Add More Fields add_more_fields_rooms***///

$option_name = 'add_more_fields_rooms';

 
if ( get_option( $option_name ) !== false ) {
 
    $add_more_fields_rooms =  get_option( 'add_more_fields_rooms' );
    update_option( $option_name, $add_more_fields_rooms );
 
} else {
 
    // The option hasn't been created yet, so add it with $autoload set to 'no'.
    $new_value = "OFF";
    $deprecated = null;
    $autoload = 'no';
    add_option( $option_name, $new_value, $deprecated, $autoload );
}
?>