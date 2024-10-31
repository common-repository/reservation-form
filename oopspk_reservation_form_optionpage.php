<?php
defined('ABSPATH') || die ("You can't access this file directyly !");
// create custom plugin settings menu
add_action('admin_menu', 'oopspk_reservation_create_menu');

function oopspk_reservation_create_menu() {

	//create new top-level menu
	add_menu_page('Reservation Form 7', 'Reservation Form', 'administrator', __FILE__, 'oopspkreservation_form_settings_page' , '' );


	//call register settings function
	add_action( 'admin_init', 'oopspkreservation_form_plugin_settings' );
}

function oopspkreservation_form_plugin_settings() {
	//register our settings
	register_setting( 'oops-reservation-from-settings-group', 'new_option_name' );
	register_setting( 'oops-reservation-from-settings-group', 'some_other_option' );
	register_setting( 'oops-reservation-from-settings-group', 'option_etc' );
  register_setting( 'oops-reservation-from-settings-add_options', 'some_other_option' );

  require(wp_reservation_dir."/inc/submit_customization_codes.php");
  require(wp_reservation_dir."/inc/submit_add_options.php");
  require(wp_reservation_dir."/inc/submit_add_more_fields.php");
}
function oopspkreservation_form_settings_page() {
?>
<div class="wrap">
<img src="<?php echo plugin_dir_url( __FILE__ ).'/assets/images/logo_plugin.png';?>" class="plugin_logo_main">

<hr>

<div class="tabset">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
  <label for="tab1">Customization</label>
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
  <label for="tab2">Add Options </label>
  <!-- Tab 3 -->
  <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
  <label for="tab3">Entries</label>
  
  <div class="tab-panels">
    <section id="marzen" class="tab-panel" >
      <h2>Customization</h2>
  <div style="float: right; margin-bottom: 10px;">
      Shortcode: <input value="[oops_wp_reservation_form_shortcode]" style="width: 250px; height: 40px;">
  </div>  
<?php require(wp_reservation_dir."/inc/oopspk_customization.php");?>
  </section>
    <section id="rauchbier" class="tab-panel">
      <h2>Add Options </h2>
<?php require(wp_reservation_dir."/inc/oopspk_add_options.php");?>
    </section>
    <section id="dunkles" class="tab-panel">
      <h2>Entries</h2>
      <?php
//$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}options WHERE option_id = 1", OBJECT );
global $wpdb;
$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}reservation_entries ORDER BY `id` DESC ", OBJECT );
//var_dump($results);
      ?>

   <table class="wp-list-table widefat fixed posts" style="margin-bottom:10px;">
  <thead>
    <tr>
      <th style="width: 5%">ID</th>
      <th>Entries</th>
      <th style="width: 10%">Action</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th style="width: 5%">ID</th>
      <th>Entries</th>
      <th style="width: 10%">Action</th>
    </tr>
  </tfoot>
  <tbody>  
<?php
if(empty($results)){
  echo'<tr><td></td><td>No results found</td><tr>';
}
    foreach ($results as $key => $entries) {
?>
<tr>
  <td style="width: 5%"><?php echo $entries->id; ?></td>
  <td><?php echo $entries->entries; ?></td>
   <td style="width: 10%"><a href="#" style="color:red;"> Delete </a></td>
</tr>
<?php
}
?>  
  </tbody>
</table>
    </section>
  </div>
</div>
</div>
<?php } ?>