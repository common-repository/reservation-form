<?php
/*
Plugin Name: Reservation Form
Plugin URI: https://www.oops.pk/ 
Description: WP reservation form is the best free WordPress Plugin for you to build a reservation form.
Author: oops.pk
Author URI: https://www.oops.pk/ 
GitHub Plugin URI: https://github.com/oopspk/Reservation-form.git
Domain Path: /languages/
Version: 1.0.0
License: GPL v2 or later
Stable tag: 1.0.0
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: form, forms, Reservation, Reservation Form, Booking Reservation Form
@author oops.pk
*/
defined('ABSPATH') || die ("You can't access this file directyly !");
define("wp_reservation_dir", __DIR__);

require(wp_reservation_dir."/oopspk_reservation_form_main_load.php");
require(wp_reservation_dir."/oopspk_reservation_form_optionpage.php");

register_activation_hook(__FILE__,'oops_wp_reservation_register_activation_hook');
register_deactivation_hook(__FILE__,'oops_wp_reservation_register_deactivation_hook');
register_uninstall_hook(__FILE__,'oops_wp_reservation_register_uninstall_hook');

function oops_wp_reservation_register_activation_hook(){
/*---------------------------
labels name 
------------------------------*/	
require(wp_reservation_dir."/inc/register_hooks/register_activation_hook_label_name.php");
/*----------------------------
fields_tag
-----------------------------*/
require(wp_reservation_dir."/inc/register_hooks/register_activation_hook_fields_tag.php");
/*------------------------------
fields_type
-------------------------------*/
require(wp_reservation_dir."/inc/register_hooks/register_activation_hook_fields_type.php");
/*------------------------------
oops_all_fields
-------------------------------*/
require(wp_reservation_dir."/inc/register_hooks/oops_all_fields.php");
   
   #Create Custom Tabel 
/*------------------------------------------------------------*/
    global $wpdb;
 
    $table_name = $wpdb->prefix . "reservation_entries";
 
    $charset_collate = $wpdb->get_charset_collate();
 
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
      id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
      entries longtext  NOT NULL,
      PRIMARY KEY id (id)
    ) $charset_collate;";
 
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
/*--------------------------------------------------------------*/
}

function oops_wp_reservation_register_deactivation_hook(){}

function oops_wp_reservation_register_uninstall_hook(){}
?>