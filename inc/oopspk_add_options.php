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
//***//
$email_permission_field1 = get_option('email_permission_field1');
$email_permission_field2 = get_option('email_permission_field2');
$email_permission_field3 = get_option('email_permission_field3');
$email_permission_field4 = get_option('email_permission_field4');
?>
<form action="options.php" method="post">
	    <?php 
    	 
         settings_fields( 'oops-reservation-from-settings-add_options' ); 
         do_settings_sections( 'oops-reservation-from-settings-add_options' );

    ?>
 <table class="wp-list-table widefat fixed posts" style="margin-bottom:10px;">
	<thead>
		<tr>
			<th> Fields Names </th>
			<th> Add Options  </th>
			<th> Enter Email </th>
			<th> Emails Send Permission </th>
			<th> Actions </th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th> Fields Names </th>
			<th> Add Options  </th>
			<th> Enter Email </th>
			<th> Emails Send Permission </th>
			<th> Actions </th>
		</tr>
	</tfoot>
	<tbody>

<?php 

if($tag_select_field1 =='Select'){
?>
	<tr>
		<td><?php echo esc_attr(ucwords($inputfield1));?></td>
		<td>
		<ol class="add_options_field1_ol">
			<li><input name="field1_add_options[]" required></li>
		</ol>
		</td>
			<td>
		<ol class="email_field1_ol">
			<li><input name="field1_email[]" required></li>
		</ol>
		</td>
<td >
	<select name="permission_field1">
		<?php
		if($email_permission_field1 == 'On'){
			echo'<option select >On</option>';
			echo'<option>Off</option>';
		}
		else{
			echo'<option>Off</option>';
			echo'<option>On</option>';
		}
		?>
			
	</select>
</td>
		<td><span class="add_options" id="btnfield1">Add Options</span></td>
	</tr>
<?php
}
if($tag_select_field2 =='Select'){
?>
	<tr>
		<td><?php echo esc_attr(ucwords($inputfield2));?></td>
			<td>
		<ol class="add_options_field2_ol">
			<li><input name="field2_add_options[]" ></li>
		</ol>
		</td>
			<td>
		<ol class="email_field2_ol">
			<li><input name="field2_email[]" ></li>
		</ol>
		</td>
		<td>
	<select name="permission_field2">
		<?php
		if($email_permission_field2 == 'On'){
			echo'<option select >On</option>';
			echo'<option>Off</option>';
		}
		else{
			echo'<option>Off</option>';
			echo'<option>On</option>';
		}
		?>
	</select>
		</td>
		<td><span class="add_options" id="btnfield2">Add Options</span></td>
	</tr>
<?php
}
if($tag_select_field3 =='Select'){
?>
	<tr>
		<td><?php echo esc_attr(ucwords($inputfield3));?></td>
			<td>
		<ol class="add_options_field3_ol">
			<li><input name="field3_add_options[]" ></li>
		</ol>
		</td>
			<td>
		<ol class="email_field3_ol">
			<li><input name="field3_email[]" ></li>
		</ol>
		</td>
		<td>
	<select name="permission_field3">
		<?php
		if($email_permission_field3 == 'On'){
			echo'<option select >On</option>';
			echo'<option>Off</option>';
		}
		else{
			echo'<option>Off</option>';
			echo'<option>On</option>';
		}
		?>
	</select>
		</td>
		<td><span class="add_options" id="btnfield3">Add Options</span></td>

	</tr>
<?php
}
if($tag_select_field4 =='Select'){
?>

	<tr>
		<td><?php echo esc_attr(ucwords($inputfield4));?></td>
			<td>
		<ol class="add_options_field4_ol">
			<li><input name="field4_add_options[]" ></li>
		</ol>
		</td>
			<td>
		<ol class="email_field4_ol">
			<li><input name="field4_email[]" ></li>
		</ol>
		</td>

		<td>
	<select name="permission_field4">
		<?php
		if($email_permission_field4 == 'On'){
			echo'<option select >On</option>';
			echo'<option>Off</option>';
		}
		else{
			echo'<option>Off</option>';
			echo'<option>On</option>';
		}
		?>
	</select>
		</td>
		<td><span class="add_options" id="btnfield4">Add Options</span></td>
	</tr>

<?php
}
?>
</tbody>
</table> 
<input type="submit" name="add_option_my" id="submit" class="button button-primary" value="Save Changes"  />
</form>