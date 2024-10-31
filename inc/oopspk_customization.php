<?php
defined('ABSPATH') || die ("You can't access this file directyly !");
$oops_wp_reservation_label_name = get_option('oops_wp_reservation_label_name');
$oops_wp_reservation_fields_type = get_option('oops_wp_reservation_fields_type');
$oops_wp_reservation_fields_tag = get_option('oops_wp_reservation_fields_tag');

//*add_more_fields **//
$add_more_fields_date = get_option('add_more_fields_date');
$add_more_fields_from_date = get_option('add_more_fields_from_date');
$add_more_fields_to_date = get_option('add_more_fields_to_date');
$add_more_fields_gender = get_option('add_more_fields_gender');
$add_more_fields_countries = get_option('add_more_fields_countries');
$add_more_fields_seats = get_option('add_more_fields_seats');
$add_more_fields_rooms = get_option('add_more_fields_rooms');
?>  
<form method="post" action="options.php">
    <?php 
    	 
         settings_fields( 'oops-reservation-from-settings-add_options' ); 
         do_settings_sections( 'oops-reservation-from-settings-add_options' );

    ?>
   <table class="wp-list-table widefat fixed posts" style="margin-bottom:10px;">
	<thead>
		<tr>
			<th> Fields Names </th>
			<th> Fields Tags </th>
			<th> Fields Types </th>
			<th> Labels Names</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th> Fields Names </th>
			<th> Fields Tags </th>
			<th> Fields Types </th>
			<th> Labels Names</th>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<td><?php echo esc_attr(ucwords($oops_wp_reservation_label_name['field1'])); ?></td>
			<td>
				<select name="tag_field1">
					<option selected><?php echo esc_attr(ucwords($oops_wp_reservation_fields_tag['field1'])); ?></option>
					<?php
				if($oops_wp_reservation_fields_tag['field1'] == 'Input'){
					echo'
					<option>Select</option>
					<option>Textarea</option>';

				}
				if($oops_wp_reservation_fields_tag['field1'] == 'Select'){
					echo'<option>Input</option>
					<option>Textarea</option>';
				}
				if($oops_wp_reservation_fields_tag['field1'] == 'Textarea'){
					echo'
					<option>Input</option>
					<option>Select</option>
					';
				}
			?>
				</select>
			</td>
			<td>
				<select name="fieldtype1">
					<option selected><?php echo esc_attr(ucwords($oops_wp_reservation_fields_type['field1'])); ?></option>
<?php
					if($oops_wp_reservation_fields_type['field1'] == 'Text'){
						echo'
					<option>Email</option>
					<option>Password</option>
					<option>Number</option>
						';
					}
					if($oops_wp_reservation_fields_type['field1'] == 'Email'){
					  echo'
					    <option>Text</option>
					    <option>Password</option>
					    <option>Number</option>
						';	
					}
					if($oops_wp_reservation_fields_type['field1'] == 'Password'){
						echo'
					    <option>Text</option>
					    <option>Email</option>
					    <option>Number</option>
						';		
					}
					if($oops_wp_reservation_fields_type['field1'] == 'Number'){
						echo'
					    <option>Text</option>
					    <option>Email</option>
					    <option>Password</option>
						';		
					}
					?>
				</select>
			</td>
			<td>
				<input type="text" name="inputfield1" value="<?php echo esc_attr(ucwords($oops_wp_reservation_label_name['field1'])); ?>" >
			</td>
		</tr>
		<tr>
			<td><?php echo esc_attr(ucwords($oops_wp_reservation_label_name['field2'])); ?></td>
			<td>
				<select name="tag_field2">
					<option selected><?php echo esc_attr(ucwords($oops_wp_reservation_fields_tag['field2'])); ?></option>
					<?php
				if($oops_wp_reservation_fields_tag['field2'] == 'Input'){
					echo'
					<option>Select</option>
					<option>Textarea</option>';

				}
				if($oops_wp_reservation_fields_tag['field2'] == 'Select'){
					echo'<option>Input</option>
					<option>Textarea</option>';
				}
				if($oops_wp_reservation_fields_tag['field2'] == 'Textarea'){
					echo'
					<option>Input</option>
					<option>Select</option>
					';
				}
			?>
				</select>
			</td>
			<td>
				<select name="fieldtype2">
					<option selected><?php echo esc_attr(ucwords($oops_wp_reservation_fields_type['field2'])); ?></option>
					<?php
					if($oops_wp_reservation_fields_type['field2'] == 'Text'){
						echo'
					<option>Email</option>
					<option>Password</option>
					<option>Number</option>
						';
					}
					if($oops_wp_reservation_fields_type['field2'] == 'Email'){
					  echo'
					    <option>Text</option>
					    <option>Password</option>
					    <option>Number</option>
						';	
					}
					if($oops_wp_reservation_fields_type['field2'] == 'Password'){
						echo'
					    <option>Text</option>
					    <option>Email</option>
					    <option>Number</option>
						';		
					}
					if($oops_wp_reservation_fields_type['field2'] == 'Number'){
						echo'
					    <option>Text</option>
					    <option>Email</option>
					    <option>Password</option>
						';		
					}
					?>
				</select>
			</td>
			<td>
				<input type="text" name="inputfield2" value="<?php echo esc_attr(ucwords($oops_wp_reservation_label_name['field2'])); ?>">
			</td>
		</tr>
		<tr>
			<td><?php echo esc_attr(ucwords($oops_wp_reservation_label_name['field3'])); ?></td>
			<td>
				<select name="tag_field3">
					<option selected><?php echo esc_attr(ucwords($oops_wp_reservation_fields_tag['field3'])); ?></option>
					<?php
				if($oops_wp_reservation_fields_tag['field3'] == 'Input'){
					echo'
					<option>Select</option>
					<option>Textarea</option>';

				}
				if($oops_wp_reservation_fields_tag['field3'] == 'Select'){
					echo'<option>Input</option>
					<option>Textarea</option>';
				}
				if($oops_wp_reservation_fields_tag['field3'] == 'Textarea'){
					echo'
					<option>Input</option>
					<option>Select</option>
					';
				}
			?>
				</select>
			</td>
			<td>
				<select name="fieldtype3">
					<option selected><?php echo esc_attr(ucwords($oops_wp_reservation_fields_type['field3'])); ?></option>
					<?php
					if($oops_wp_reservation_fields_type['field3'] == 'Text'){
						echo'
					<option>Email</option>
					<option>Password</option>
					<option>Number</option>
						';
					}
					if($oops_wp_reservation_fields_type['field3'] == 'Email'){
					  echo'
					    <option>Text</option>
					    <option>Password</option>
					    <option>Number</option>
						';	
					}
					if($oops_wp_reservation_fields_type['field3'] == 'Password'){
						echo'
					    <option>Text</option>
					    <option>Email</option>
					    <option>Number</option>
						';		
					}
					if($oops_wp_reservation_fields_type['field3'] == 'Number'){
						echo'
					    <option>Text</option>
					    <option>Email</option>
					    <option>Password</option>
						';		
					}
					?>
				</select>
			</td>
			<td>
				<input type="text" name="inputfield3" value="<?php echo esc_attr(ucwords($oops_wp_reservation_label_name['field3'])); ?>">
			</td>
		</tr>
		<tr>
			<td><?php echo esc_attr(ucwords($oops_wp_reservation_label_name['field4'])); ?></td>
			<td>
				<select name="tag_field4">
					<option selected><?php echo esc_attr(ucwords($oops_wp_reservation_fields_tag['field4'])); ?></option>
			<?php
				if($oops_wp_reservation_fields_tag['field4'] == 'Input'){
					echo'
					<option>Select</option>
					<option>Textarea</option>';

				}
				if($oops_wp_reservation_fields_tag['field4'] == 'Select'){
					echo'<option>Input</option>
					<option>Textarea</option>';
				}
				if($oops_wp_reservation_fields_tag['field4'] == 'Textarea'){
					echo'
					<option>Input</option>
					<option>Select</option>
					';
				}
			?>
				</select>
			</td>
			<td>
				<select name="fieldtype4">
					<option selected><?php echo esc_attr(ucwords($oops_wp_reservation_fields_type['field4'])); ?></option>
					<?php
					if($oops_wp_reservation_fields_type['field4'] == 'Text'){
						echo'
					<option>Email</option>
					<option>Password</option>
					<option>Number</option>
						';
					}
					if($oops_wp_reservation_fields_type['field4'] == 'Email'){
					  echo'
					    <option>Text</option>
					    <option>Password</option>
					    <option>Number</option>
						';	
					}
					if($oops_wp_reservation_fields_type['field4'] == 'Password'){
						echo'
					    <option>Text</option>
					    <option>Email</option>
					    <option>Number</option>
						';		
					}
					if($oops_wp_reservation_fields_type['field4'] == 'Number'){
						echo'
					    <option>Text</option>
					    <option>Email</option>
					    <option>Password</option>
						';		
					}
					?>
				</select>
			</td>
			<td>
				<input type="text" name="inputfield4" value="<?php echo esc_attr(ucwords($oops_wp_reservation_label_name['field4'])); ?>">
			</td>
		</tr>
	</tbody>
</table> 
 


<span onclick="togglePopup()" class="add_fields">Add More Fields</span>
<br>	
<input type="submit" name="submit_customization" id="submit" class="button button-primary" value="Save Changes"  />
</form>


 <div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div class="content">
    <div class="close-btn" onclick="togglePopup()">&times;</div>
    <h1>Add More Fields</h1>
    <p>
    </p>
    <form action="options.php" method="post">
    	<?php
    	settings_fields( 'oops-reservation-from-settings-add_options' ); 
         do_settings_sections( 'oops-reservation-from-settings-add_options' );
    	?>
     <table class="wp-list-table widefat fixed posts" style="margin-bottom:10px;">
	<thead>
		<tr>
			<th> Fields Names </th>
			<th width="10%"> Action  </th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th> Fields Names </th>
			<th width="10%"> Action</th>

		</tr>
	</tfoot>
	<tbody>

	<tr>
		<td>
			Date
		</td>
		<td>
			<select name="add_more_fields_date">
<?php if($add_more_fields_date == 'ON'){
	echo'<option selected>ON</option>
		<option>OFF</option>';			
}
else{
	echo'
	<option selected>OFF</option>
	<option >ON</option>
		';
}
?>
				
		 </select>
		</td>

	</tr>
	<tr>
		<td>
			From Date
		</td>
		<td>
			<select name="add_more_fields_from_date">
				<?php if($add_more_fields_from_date == 'ON'){
	echo'<option selected>ON</option>
		<option>OFF</option>';			
}
else{
	echo'
	<option selected>OFF</option>
	<option >ON</option>
		';
}
?>
			</select>
		</td>
		
</tr>
<tr>
		<td>
			To Date
		</td>
		<td>
			<select name="add_more_fields_to_date">
<?php if($add_more_fields_to_date  == 'ON'){
	echo'<option selected>ON</option>
		<option>OFF</option>';			
}
else{
	echo'
	<option selected>OFF</option>
	<option >ON</option>
		';
}
?>
			</select>
		</td>
		
</tr>
<tr>
		<td>
			Gender
		</td>
		<td>
			<select name="add_more_fields_gender">
				<?php if($add_more_fields_gender  == 'ON'){
	echo'<option selected>ON</option>
		<option>OFF</option>';			
}
else{
	echo'
	<option selected>OFF</option>
	<option >ON</option>
		';
}
?>
			</select>
		</td>
		
</tr>
<tr>
		<td>
			Countries
		</td>
		<td>
			<select name="add_more_fields_countries">
<?php if($add_more_fields_countries   == 'ON'){
	echo'<option selected>ON</option>
		<option>OFF</option>';			
}
else{
	echo'
	<option selected>OFF</option>
	<option >ON</option>
		';
}
?>
			</select>
		</td>
		
</tr>
<tr>
		<td>
			Seats
		</td>
		<td>
			<select name="add_more_fields_seats">
<?php if($add_more_fields_seats   == 'ON'){
	echo'<option selected>ON</option>
		<option>OFF</option>';			
}
else{
	echo'
	<option selected>OFF</option>
	<option >ON</option>
		';
}
?>
			</select>
		</td>
		
</tr>
<tr>
		<td>
			Rooms
		</td>
		<td>
			<select name="add_more_fields_rooms">
<?php if($add_more_fields_rooms   == 'ON'){
	echo'<option selected>ON</option>
		<option>OFF</option>';			
}
else{
	echo'
	<option selected>OFF</option>
	<option >ON</option>
		';
}
?>
			</select>
		</td>
		
</tr>
</tbody>
</table> 
<input type="submit" name="add_more_fields" id="submit" class="button button-primary" value="Save Changes"  />
  </div>
</div>

</form>
<?php
if ( isset( $_GET['settings-updated'] ) ) {
      // add settings saved message with the class of "updated"
      add_settings_error( 'oopspk_messages', 'oopspk_messages', __( 'Settings Saved', 'oopspk_messages' ), 'updated' );
      }     
      // show error/update messages
      settings_errors( 'oopspk_messages' );
?>