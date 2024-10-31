<?php
defined('ABSPATH') || die ("You can't access this file directyly !");
add_shortcode('oops_wp_reservation_form_shortcode', 'oops_wp_reservation_form_func' );
 
function oops_wp_reservation_form_func() {
///*tag_select_field*//
$tag_select_field1 = get_option('tag_select_field1');
$tag_select_field2 = get_option('tag_select_field2');
$tag_select_field3 = get_option('tag_select_field3');
$tag_select_field4 = get_option('tag_select_field4');
///*fieldtype*//
$fieldtype1 = get_option('fieldtype1');
$fieldtype2 = get_option('fieldtype2');
$fieldtype3 = get_option('fieldtype3');
$fieldtype4 = get_option('fieldtype4');
///*inputfield*//
$inputfield1 = get_option('inputfield1');
$inputfield2 = get_option('inputfield2');
$inputfield3 = get_option('inputfield3');
$inputfield4 = get_option('inputfield4');
///*addoptions_value_field1*//
$addoptions_value_field1 = get_option('addoptions_value_field1');
$addoptions_value_field2 = get_option('addoptions_value_field2');
$addoptions_value_field3 = get_option('addoptions_value_field3');
$addoptions_value_field4 = get_option('addoptions_value_field4');
//*email_permission_field1**//
$email_permission_field1 = get_option('email_permission_field1');
$email_permission_field2 = get_option('email_permission_field2');
$email_permission_field3 = get_option('email_permission_field3');
$email_permission_field4 = get_option('email_permission_field4');

//*add_more_fields **//
$add_more_fields_date = get_option('add_more_fields_date');
$add_more_fields_from_date = get_option('add_more_fields_from_date');
$add_more_fields_to_date = get_option('add_more_fields_to_date');
$add_more_fields_gender = get_option('add_more_fields_gender');
$add_more_fields_countries = get_option('add_more_fields_countries');
$add_more_fields_seats = get_option('add_more_fields_seats');
$add_more_fields_rooms = get_option('add_more_fields_rooms');

ob_start();

?>
 <div class="container">
  <form action="" method="post">

<?php
if($tag_select_field1 == 'Input'){
?>
    <label for="<?php echo esc_attr(ucwords($inputfield1));?>"><?php echo esc_attr(ucwords($inputfield1));?></label>
    <input type="<?php echo esc_attr(ucwords($fieldtype1));?>" id="<?php echo esc_attr(ucwords($inputfield1));?>" name="field1" placeholder="<?php echo esc_attr(ucwords($inputfield1));?>" class="input_box">
<?php
}
if($tag_select_field1 == 'Select'){
?>
 <label for="<?php echo esc_attr(ucwords($inputfield1));?>"><?php echo esc_attr(ucwords($inputfield1));?></label>
    <select id="<?php echo esc_attr(ucwords($inputfield1));?>" name="field1" class="input_box">
 <?php
$ex_array = $addoptions_value_field1['field1_add_options'];
array_unshift($ex_array,"");
unset($ex_array[0]); 
      	foreach ($ex_array as $key => $value_field1) {

      		echo '<option value='.esc_attr($key).'>'.esc_attr(ucwords($value_field1)).'</option>';
      	}
      ?>
    </select>
<?php	
}
if($tag_select_field1 == 'Textarea'){
?>
   <label for="<?php echo esc_attr(ucwords($inputfield1));?>"><?php echo esc_attr(ucwords($inputfield1));?></label>
    <textarea id="<?php echo esc_attr(ucwords($inputfield1));?>" name="field1" placeholder="<?php echo esc_attr(ucwords($inputfield1));?>" style="height:200px" class="input_box"></textarea>
<?php	
}
?>

<!---------------------------------------------------------------------------->
<?php
if($tag_select_field2 == 'Input'){
?>
    <label for="<?php echo esc_attr(ucwords($inputfield2));?>"><?php echo esc_attr(ucwords($inputfield2));?></label>
    <input type="<?php echo esc_attr(ucwords($fieldtype2));?>" id="<?php echo esc_attr(ucwords($inputfield2));?>" name="field2" placeholder="<?php echo esc_attr(ucwords($inputfield2));?>" class="input_box">
<?php
}
if($tag_select_field2 == 'Select'){
?>
 <label for="<?php echo esc_attr(ucwords($inputfield2));?>"><?php echo esc_attr(ucwords($inputfield2));?></label>
    <select id="<?php echo esc_attr(ucwords($inputfield2));?>" name="field2" class="input_box">
 <?php
 $ex_array = $addoptions_value_field2['field2_add_options'];
array_unshift($ex_array,"");
unset($ex_array[0]); 
      	foreach ($ex_array as $key => $value_field2) {

      		echo '<option value='.esc_attr($key).'>'.esc_attr(ucwords($value_field2)).'</option>';

      	}
      ?>
    </select>
<?php	
}
if($tag_select_field2 == 'Textarea'){
?>
   <label for="<?php echo esc_attr(ucwords($inputfield2));?>"><?php echo esc_attr(ucwords($inputfield2));?></label>
    <textarea id="<?php echo esc_attr(ucwords($inputfield2));?>" name="field2" placeholder="<?php echo esc_attr(ucwords($inputfield2));?>" style="height:200px" class="input_box"></textarea>
<?php	
}
?>

<!----------------------------------------------------------------------------->
<?php
if($tag_select_field3 == 'Input'){
?>
    <label for="<?php echo esc_attr(ucwords($inputfield3));?>"><?php echo esc_attr(ucwords($inputfield3));?></label>
    <input type="<?php echo esc_attr(ucwords($fieldtype3));?>" id="<?php echo esc_attr(ucwords($inputfield3));?>" name="field3" placeholder="<?php echo esc_attr(ucwords($inputfield3));?>" class="input_box">
<?php
}
if($tag_select_field3 == 'Select'){
?>
 <label for="<?php echo esc_attr(ucwords($inputfield3));?>"><?php echo esc_attr(ucwords($inputfield3));?></label>
    <select id="<?php echo esc_attr(ucwords($inputfield3));?>" name="field3" class="input_box">
      <?php
$ex_array = $addoptions_value_field3['field3_add_options'];
array_unshift($ex_array,"");
unset($ex_array[0]); 
foreach ($ex_array as $key => $value_field3) {

echo '<option value='.esc_attr($key).'>'.esc_attr(ucwords($value_field3)).'</option>';

   }

 ?>
    </select>
<?php	
}
if($tag_select_field3 == 'Textarea'){
?>
   <label for="<?php echo esc_attr(ucwords($inputfield3));?>"><?php echo esc_attr(ucwords($inputfield3));?></label>
    <textarea id="<?php echo esc_attr(ucwords($inputfield3));?>" name="field3" placeholder="<?php echo esc_attr(ucwords($inputfield3));?>" style="height:200px" class="input_box"></textarea>
<?php	
}
?>
<?php
if ($add_more_fields_date == 'ON') {
?>
<label>Date</label>
<input type="date" name="date_s" class="input_box">
<?php
}
if ($add_more_fields_from_date == 'ON') {
?>
<label>From Date</label>
<input type="date" name="from_date" class="input_box">
<?php	
}
if ($add_more_fields_to_date == 'ON') {
?>
<label>To Date</label>
<input type="date" name="to_date" class="input_box">
<?php	
}
if ($add_more_fields_gender == 'ON') {
?>
<label>Gender</label>
<select name="gender" class="input_box">
	<option value="He">He</option>
	<option value="She">She</option>
</select>
<?php	
}
if ($add_more_fields_countries == 'ON') {
?>
<label>Countries</label>
<select name="countries" id="" class="input_box">
	<option data-countryCode="GB" value="44" Selected>UK (+44)</option>
	<option data-countryCode="US" value="1">USA (+1)</option>
	<optgroup label="Other countries">
		<option data-countryCode="DZ" value="213">Algeria (+213)</option>
		<option data-countryCode="AD" value="376">Andorra (+376)</option>
		<option data-countryCode="AO" value="244">Angola (+244)</option>
		<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
		<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
		<option data-countryCode="AR" value="54">Argentina (+54)</option>
		<option data-countryCode="AM" value="374">Armenia (+374)</option>
		<option data-countryCode="AW" value="297">Aruba (+297)</option>
		<option data-countryCode="AU" value="61">Australia (+61)</option>
		<option data-countryCode="AT" value="43">Austria (+43)</option>
		<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
		<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
		<option data-countryCode="BH" value="973">Bahrain (+973)</option>
		<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
		<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
		<option data-countryCode="BY" value="375">Belarus (+375)</option>
		<option data-countryCode="BE" value="32">Belgium (+32)</option>
		<option data-countryCode="BZ" value="501">Belize (+501)</option>
		<option data-countryCode="BJ" value="229">Benin (+229)</option>
		<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
		<option data-countryCode="BT" value="975">Bhutan (+975)</option>
		<option data-countryCode="BO" value="591">Bolivia (+591)</option>
		<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
		<option data-countryCode="BW" value="267">Botswana (+267)</option>
		<option data-countryCode="BR" value="55">Brazil (+55)</option>
		<option data-countryCode="BN" value="673">Brunei (+673)</option>
		<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
		<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
		<option data-countryCode="BI" value="257">Burundi (+257)</option>
		<option data-countryCode="KH" value="855">Cambodia (+855)</option>
		<option data-countryCode="CM" value="237">Cameroon (+237)</option>
		<option data-countryCode="CA" value="1">Canada (+1)</option>
		<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
		<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
		<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
		<option data-countryCode="CL" value="56">Chile (+56)</option>
		<option data-countryCode="CN" value="86">China (+86)</option>
		<option data-countryCode="CO" value="57">Colombia (+57)</option>
		<option data-countryCode="KM" value="269">Comoros (+269)</option>
		<option data-countryCode="CG" value="242">Congo (+242)</option>
		<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
		<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
		<option data-countryCode="HR" value="385">Croatia (+385)</option>
		<option data-countryCode="CU" value="53">Cuba (+53)</option>
		<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
		<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
		<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
		<option data-countryCode="DK" value="45">Denmark (+45)</option>
		<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
		<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
		<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
		<option data-countryCode="EC" value="593">Ecuador (+593)</option>
		<option data-countryCode="EG" value="20">Egypt (+20)</option>
		<option data-countryCode="SV" value="503">El Salvador (+503)</option>
		<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
		<option data-countryCode="ER" value="291">Eritrea (+291)</option>
		<option data-countryCode="EE" value="372">Estonia (+372)</option>
		<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
		<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
		<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
		<option data-countryCode="FJ" value="679">Fiji (+679)</option>
		<option data-countryCode="FI" value="358">Finland (+358)</option>
		<option data-countryCode="FR" value="33">France (+33)</option>
		<option data-countryCode="GF" value="594">French Guiana (+594)</option>
		<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
		<option data-countryCode="GA" value="241">Gabon (+241)</option>
		<option data-countryCode="GM" value="220">Gambia (+220)</option>
		<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
		<option data-countryCode="DE" value="49">Germany (+49)</option>
		<option data-countryCode="GH" value="233">Ghana (+233)</option>
		<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
		<option data-countryCode="GR" value="30">Greece (+30)</option>
		<option data-countryCode="GL" value="299">Greenland (+299)</option>
		<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
		<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
		<option data-countryCode="GU" value="671">Guam (+671)</option>
		<option data-countryCode="GT" value="502">Guatemala (+502)</option>
		<option data-countryCode="GN" value="224">Guinea (+224)</option>
		<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
		<option data-countryCode="GY" value="592">Guyana (+592)</option>
		<option data-countryCode="HT" value="509">Haiti (+509)</option>
		<option data-countryCode="HN" value="504">Honduras (+504)</option>
		<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
		<option data-countryCode="HU" value="36">Hungary (+36)</option>
		<option data-countryCode="IS" value="354">Iceland (+354)</option>
		<option data-countryCode="IN" value="91">India (+91)</option>
		<option data-countryCode="ID" value="62">Indonesia (+62)</option>
		<option data-countryCode="IR" value="98">Iran (+98)</option>
		<option data-countryCode="IQ" value="964">Iraq (+964)</option>
		<option data-countryCode="IE" value="353">Ireland (+353)</option>
		<option data-countryCode="IL" value="972">Israel (+972)</option>
		<option data-countryCode="IT" value="39">Italy (+39)</option>
		<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
		<option data-countryCode="JP" value="81">Japan (+81)</option>
		<option data-countryCode="JO" value="962">Jordan (+962)</option>
		<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
		<option data-countryCode="KE" value="254">Kenya (+254)</option>
		<option data-countryCode="KI" value="686">Kiribati (+686)</option>
		<option data-countryCode="KP" value="850">Korea North (+850)</option>
		<option data-countryCode="KR" value="82">Korea South (+82)</option>
		<option data-countryCode="KW" value="965">Kuwait (+965)</option>
		<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
		<option data-countryCode="LA" value="856">Laos (+856)</option>
		<option data-countryCode="LV" value="371">Latvia (+371)</option>
		<option data-countryCode="LB" value="961">Lebanon (+961)</option>
		<option data-countryCode="LS" value="266">Lesotho (+266)</option>
		<option data-countryCode="LR" value="231">Liberia (+231)</option>
		<option data-countryCode="LY" value="218">Libya (+218)</option>
		<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
		<option data-countryCode="LT" value="370">Lithuania (+370)</option>
		<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
		<option data-countryCode="MO" value="853">Macao (+853)</option>
		<option data-countryCode="MK" value="389">Macedonia (+389)</option>
		<option data-countryCode="MG" value="261">Madagascar (+261)</option>
		<option data-countryCode="MW" value="265">Malawi (+265)</option>
		<option data-countryCode="MY" value="60">Malaysia (+60)</option>
		<option data-countryCode="MV" value="960">Maldives (+960)</option>
		<option data-countryCode="ML" value="223">Mali (+223)</option>
		<option data-countryCode="MT" value="356">Malta (+356)</option>
		<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
		<option data-countryCode="MQ" value="596">Martinique (+596)</option>
		<option data-countryCode="MR" value="222">Mauritania (+222)</option>
		<option data-countryCode="YT" value="269">Mayotte (+269)</option>
		<option data-countryCode="MX" value="52">Mexico (+52)</option>
		<option data-countryCode="FM" value="691">Micronesia (+691)</option>
		<option data-countryCode="MD" value="373">Moldova (+373)</option>
		<option data-countryCode="MC" value="377">Monaco (+377)</option>
		<option data-countryCode="MN" value="976">Mongolia (+976)</option>
		<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
		<option data-countryCode="MA" value="212">Morocco (+212)</option>
		<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
		<option data-countryCode="MN" value="95">Myanmar (+95)</option>
		<option data-countryCode="NA" value="264">Namibia (+264)</option>
		<option data-countryCode="NR" value="674">Nauru (+674)</option>
		<option data-countryCode="NP" value="977">Nepal (+977)</option>
		<option data-countryCode="NL" value="31">Netherlands (+31)</option>
		<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
		<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
		<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
		<option data-countryCode="NE" value="227">Niger (+227)</option>
		<option data-countryCode="NG" value="234">Nigeria (+234)</option>
		<option data-countryCode="NU" value="683">Niue (+683)</option>
		<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
		<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
		<option data-countryCode="NO" value="47">Norway (+47)</option>
		<option data-countryCode="OM" value="968">Oman (+968)</option>
		<option data-countryCode="PW" value="680">Palau (+680)</option>
		<option data-countryCode="PA" value="507">Panama (+507)</option>
		<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
		<option data-countryCode="PY" value="595">Paraguay (+595)</option>
		<option data-countryCode="PE" value="51">Peru (+51)</option>
		<option data-countryCode="PH" value="63">Philippines (+63)</option>
		<option data-countryCode="PL" value="48">Poland (+48)</option>
		<option data-countryCode="PT" value="351">Portugal (+351)</option>
		<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
		<option data-countryCode="QA" value="974">Qatar (+974)</option>
		<option data-countryCode="RE" value="262">Reunion (+262)</option>
		<option data-countryCode="RO" value="40">Romania (+40)</option>
		<option data-countryCode="RU" value="7">Russia (+7)</option>
		<option data-countryCode="RW" value="250">Rwanda (+250)</option>
		<option data-countryCode="SM" value="378">San Marino (+378)</option>
		<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
		<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
		<option data-countryCode="SN" value="221">Senegal (+221)</option>
		<option data-countryCode="CS" value="381">Serbia (+381)</option>
		<option data-countryCode="SC" value="248">Seychelles (+248)</option>
		<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
		<option data-countryCode="SG" value="65">Singapore (+65)</option>
		<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
		<option data-countryCode="SI" value="386">Slovenia (+386)</option>
		<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
		<option data-countryCode="SO" value="252">Somalia (+252)</option>
		<option data-countryCode="ZA" value="27">South Africa (+27)</option>
		<option data-countryCode="ES" value="34">Spain (+34)</option>
		<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
		<option data-countryCode="SH" value="290">St. Helena (+290)</option>
		<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
		<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
		<option data-countryCode="SD" value="249">Sudan (+249)</option>
		<option data-countryCode="SR" value="597">Suriname (+597)</option>
		<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
		<option data-countryCode="SE" value="46">Sweden (+46)</option>
		<option data-countryCode="CH" value="41">Switzerland (+41)</option>
		<option data-countryCode="SI" value="963">Syria (+963)</option>
		<option data-countryCode="TW" value="886">Taiwan (+886)</option>
		<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
		<option data-countryCode="TH" value="66">Thailand (+66)</option>
		<option data-countryCode="TG" value="228">Togo (+228)</option>
		<option data-countryCode="TO" value="676">Tonga (+676)</option>
		<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
		<option data-countryCode="TN" value="216">Tunisia (+216)</option>
		<option data-countryCode="TR" value="90">Turkey (+90)</option>
		<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
		<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
		<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
		<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
		<option data-countryCode="UG" value="256">Uganda (+256)</option>
		<!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
		<option data-countryCode="UA" value="380">Ukraine (+380)</option>
		<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
		<option data-countryCode="UY" value="598">Uruguay (+598)</option>
		<!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
		<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
		<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
		<option data-countryCode="VA" value="379">Vatican City (+379)</option>
		<option data-countryCode="VE" value="58">Venezuela (+58)</option>
		<option data-countryCode="VN" value="84">Vietnam (+84)</option>
		<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
		<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
		<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
		<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
		<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
		<option data-countryCode="ZM" value="260">Zambia (+260)</option>
		<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
	</optgroup>
</select>
<?php	
}
if ($add_more_fields_seats == 'ON') {
?>
<label>Seat</label>
<input type="text" name="seats" class="input_box">
<?php	
}
if ($add_more_fields_rooms == 'ON') {
?>
<label>Room</label>
<input type="text" name="rooms" class="input_box">
<?php	
}
?>
<!----------------------------------------------------------------------------->
<?php
if($tag_select_field4 == 'Input'){
?>
    <label for="<?php echo esc_attr(ucwords($inputfield4));?>"><?php echo esc_attr(ucwords($inputfield4));?></label>
    <input type="<?php echo esc_attr(ucwords($fieldtype4));?>" id="<?php echo esc_attr(ucwords($inputfield4));?>" name="field4" placeholder="<?php echo esc_attr(ucwords($inputfield4));?>" class="input_box">
<?php
}
if($tag_select_field4 == 'Select'){
?>
 <label for="<?php echo esc_attr(ucwords($inputfield4));?>"><?php echo esc_attr(ucwords($inputfield4));?></label>
    <select id="<?php echo esc_attr(ucwords($inputfield4));?>" name="field4" class="input_box">
       <?php
         $ex_array = $addoptions_value_field4['field4_add_options'];
array_unshift($ex_array,"");
unset($ex_array[0]); 
      	foreach ($ex_array as $key => $value_field4) {

      		echo '<option value='.esc_attr($key).'>'.esc_attr(ucwords($value_field4)).'</option>';

      	}
      ?>
    </select>
<?php	
}
if($tag_select_field4 == 'Textarea'){
?>
   <label for="<?php echo esc_attr(ucwords($inputfield4));?>"><?php echo esc_attr(ucwords($inputfield4));?></label>
    <textarea id="<?php echo esc_attr(ucwords($inputfield4));?>" name="field4" placeholder="<?php echo esc_attr(ucwords($inputfield4));?>" style="height:200px; resize: none;" class="input_box"></textarea>
<?php	
}
?>
    <input type="submit" value="Submit" name="submit" class="submit_customization">

  </form>
</div> 
<?php
	
	if(isset($_POST['submit'])){

	$field1 = sanitize_text_field($_POST['field1']);
	$field2 = sanitize_text_field($_POST['field2']);
	$field3 = sanitize_text_field($_POST['field3']);
	$field4 = sanitize_text_field($_POST['field4']);

	$date = sanitize_text_field($_POST['date_s']);
	$from_date = sanitize_text_field($_POST['from_date']);
	$to_date = sanitize_text_field($_POST['to_date']);
	$gender = sanitize_text_field($_POST['gender']);
	$countries = sanitize_text_field($_POST['countries']);
	$seats = sanitize_text_field($_POST['seats']);
	$rooms = sanitize_text_field($_POST['rooms']);

	if($add_more_fields_date == 'OFF'){
		$date='form';
		$outdate='';
	}
	if($add_more_fields_from_date  == 'OFF'){
		$from_date='form';
		$outputfrom_date='';
	}
	if($add_more_fields_to_date == 'OFF'){
		$to_date='form';
		$outputto_date='';
	}
	if($add_more_fields_gender  == 'OFF'){
		$gender='form';
		$outputgender='';
	}
	if($add_more_fields_countries  == 'OFF'){
		$countries='form';
		$outputcountries='';
	}
	if($add_more_fields_seats   == 'OFF'){
		$seats='form';
		$outputseats='';
	}
	if($add_more_fields_rooms    == 'OFF'){
		$rooms='form';
		$outputrooms='';
	}
	//////***/////

	if($add_more_fields_date == 'ON'){
		$outdate='Data :'.$date;
	}
	if($add_more_fields_from_date  == 'ON'){
		$outputfrom_date='From Date :'.$from_date;
	}
	if($add_more_fields_to_date == 'ON'){
		$outputto_date='To Date :'.$to_date;
	}
	if($add_more_fields_gender  == 'ON'){
		$outputgender='Gender :'.$gender;
	}
	if($add_more_fields_countries  == 'ON'){
		$outputcountries='Countries :'.$countries;
	}
	if($add_more_fields_seats   == 'ON'){
		$outputseats='Seats :'.$seats;
	}
	if($add_more_fields_rooms    == 'ON'){
		$outputrooms='Rooms :'.$rooms;
	}

	if(empty($field1 && $field2 && $field3 && $field4 && $date && $from_date && $to_date && $gender && $countries && $seats && $rooms )){
		echo' <div style=" background-color: #ea9696; color:#000; padding:10px; margin-top:40px;"> All Fields Is Required </div>';
	}
	else{

		$sent ='';
		if($tag_select_field1 == 'Select'){

		$fieldvalueid = sanitize_text_field($_POST['field1']);
		$field1_email = $addoptions_value_field1['field1_email'];
		array_unshift($field1_email,"");
		unset($field1_email[0]);
		
		$addoptions_value_field1 = $addoptions_value_field1['field1_add_options'];
		array_unshift($addoptions_value_field1,"");
		unset($addoptions_value_field1[0]);
		$addoptionsnew=$addoptions_value_field1[$fieldvalueid];

		$toemail = $field1_email[$fieldvalueid];
		$to = ''.sanitize_text_field($toemail).'';
		$subject = 'Reservation Booking';

		 $body = '
		'.sanitize_text_field(ucwords($inputfield1)).' : '.sanitize_text_field(ucwords($addoptionsnew)).'
		<br>
		'.sanitize_text_field(ucwords($inputfield2)).' : '.sanitize_text_field(ucwords($_POST['field2'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield3)).' : '.sanitize_text_field(ucwords($_POST['field3'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield4)).' : '.sanitize_text_field(ucwords($_POST['field4'])).'
		<br>'
		.sanitize_text_field(ucwords($outdate)).'
		<br>'
		.sanitize_text_field(ucwords($outputfrom_date)).'
		<br>'
		.sanitize_text_field(ucwords($outputto_date)).'
		<br>'
		.sanitize_text_field(ucwords($outputgender)).'
		<br>'
		.sanitize_text_field(ucwords($outputcountries)).'
		<br>'
		.sanitize_text_field(ucwords($outputseats)).'
		<br>'
		.sanitize_text_field(ucwords($outputrooms))
		;
			$headers = array('Content-Type: text/html; charset=UTF-8');
			$sent = wp_mail( $to, $subject, $body, $headers );

			//*****//
		
global $wpdb;
$table = $wpdb->prefix.'reservation_entries';
$data = array('entries' => sanitize_text_field($body));
$format = array('%s','%d');
$wpdb->insert($table,$data,$format);
$my_id = $wpdb->insert_id;

//***////

		}
		if($tag_select_field2 == 'Select'){

		$fieldvalueid = sanitize_text_field($_POST['field2']);
		$field2_email = $addoptions_value_field2['field2_email'];
		array_unshift($field2_email,"");
		unset($field2_email[0]);
		
		$addoptions_value_field2 = $addoptions_value_field2['field2_add_options'];
		array_unshift($addoptions_value_field2,"");
		unset($addoptions_value_field2[0]);
		$addoptionsnew=$addoptions_value_field2[$fieldvalueid];

		$toemail = $field2_email[$fieldvalueid];
		$to = ''.sanitize_text_field($toemail).'';
		$subject = 'Reservation Booking';
		$body = '
		'.sanitize_text_field(ucwords($inputfield1)).' : '.sanitize_text_field(ucwords($_POST['field1'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield2)).' : '.sanitize_text_field(ucwords($addoptionsnew)).'
		<br>
		'.sanitize_text_field(ucwords($inputfield3)).' : '.sanitize_text_field(ucwords($_POST['field3'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield4)).' : '.sanitize_text_field(ucwords($_POST['field4']))
		.'
		<br>'
		.sanitize_text_field(ucwords($outdate)).'
		<br>'
		.sanitize_text_field(ucwords($outputfrom_date)).'
		<br>'
		.sanitize_text_field(ucwords($outputto_date)).'
		<br>'
		.sanitize_text_field(ucwords($outputgender)).'
		<br>'
		.sanitize_text_field(ucwords($outputcountries)).'
		<br>'
		.sanitize_text_field(ucwords($outputseats)).'
		<br>'
		.sanitize_text_field(ucwords($outputrooms))
		;
		// echo $body;
		$headers = array('Content-Type: text/html; charset=UTF-8');
		$sent = wp_mail( $to, $subject, $body, $headers );
//*****//
		
global $wpdb;
$table = $wpdb->prefix.'reservation_entries';
$data = array('entries' => sanitize_text_field($body));
$format = array('%s','%d');
$wpdb->insert($table,$data,$format);
$my_id = $wpdb->insert_id;

//***////
		}


		if($tag_select_field3 == 'Select'){

		$fieldvalueid = sanitize_text_field($_POST['field3']);
		$field3_email = $addoptions_value_field3['field3_email'];
		array_unshift($field3_email,"");
		unset($field3_email[0]);
		
		$addoptions_value_field3 = $addoptions_value_field3['field3_add_options'];
		array_unshift($addoptions_value_field3,"");
		unset($addoptions_value_field3[0]);
		$addoptionsnew=$addoptions_value_field3[$fieldvalueid];

		$toemail = $field3_email[$fieldvalueid];
		$to = ''.sanitize_text_field($toemail).'';
		$subject = 'Reservation Booking';
		$body = '
		'.sanitize_text_field(ucwords($inputfield1)).' : '.sanitize_text_field(ucwords($_POST['field1'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield2)).' : '.sanitize_text_field(ucwords($_POST['field2'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield3)).' : '.sanitize_text_field(ucwords($addoptionsnew)).'
		<br>
		'.sanitize_text_field(ucwords($inputfield4)).' : '.sanitize_text_field(ucwords($_POST['field4']))
		.'
		<br>'
		.sanitize_text_field(ucwords($outdate)).'
		<br>'
		.sanitize_text_field(ucwords($outputfrom_date)).'
		<br>'
		.sanitize_text_field(ucwords($outputto_date)).'
		<br>'
		.sanitize_text_field(ucwords($outputgender)).'
		<br>'
		.sanitize_text_field(ucwords($outputcountries)).'
		<br>'
		.sanitize_text_field(ucwords($outputseats)).'
		<br>'
		.sanitize_text_field(ucwords($outputrooms))
		;
		$headers = array('Content-Type: text/html; charset=UTF-8');
		$sent = wp_mail( $to, $subject, $body, $headers );
//*****//

global $wpdb;
$table = $wpdb->prefix.'reservation_entries';
$data = array('entries' => sanitize_text_field($body));
$format = array('%s','%d');
$wpdb->insert($table,$data,$format);
$my_id = $wpdb->insert_id;

//***////

}
		///****////
		if($tag_select_field4 == 'Select'){
			$fieldvalueid = sanitize_text_field($_POST['field4']);
		$field4_email = $addoptions_value_field4['field4_email'];
		array_unshift($field4_email,"");
		unset($field4_email[0]);
		
		$addoptions_value_field4 = $addoptions_value_field4['field4_add_options'];
		array_unshift($addoptions_value_field4,"");
		unset($addoptions_value_field4[0]);
		$addoptionsnew=$addoptions_value_field4[$fieldvalueid];

		$toemail = $field4_email[$fieldvalueid];
		$to = ''.sanitize_text_field($toemail).'';
		$subject = 'Reservation Booking';
		$body = '
		'.sanitize_text_field(ucwords($inputfield1)).' : '.sanitize_text_field(ucwords($_POST['field1'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield2)).' : '.sanitize_text_field(ucwords($_POST['field2'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield3)).' : '.esc_attr(ucwords($_POST['field3'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield4)).' : '.sanitize_text_field(ucwords($addoptionsnew))
		.'
		<br>'
		.sanitize_text_field(ucwords($outdate)).'
		<br>'
		.sanitize_text_field(ucwords($outputfrom_date)).'
		<br>'
		.sanitize_text_field(ucwords($outputto_date)).'
		<br>'
		.sanitize_text_field(ucwords($outputgender)).'
		<br>'
		.sanitize_text_field(ucwords($outputcountries)).'
		<br>'
		.sanitize_text_field(ucwords($outputseats)).'
		<br>'
		.sanitize_text_field(ucwords($outputrooms))
		;

		$headers = array('Content-Type: text/html; charset=UTF-8');
		$sent = wp_mail( $to, $subject, $body, $headers );

//*****//
		
global $wpdb;
$table = $wpdb->prefix.'reservation_entries';
$data = array('entries' => sanitize_text_field($body));
$format = array('%s','%d');
$wpdb->insert($table,$data,$format);
$my_id = $wpdb->insert_id;
//***////
}
if($tag_select_field1 != 'Select' && $tag_select_field2 != 'Select' &&  $tag_select_field3 != 'Select' &&  $tag_select_field4 != 'Select'){
$body = '
		'.sanitize_text_field(ucwords($inputfield1)).' : '.sanitize_text_field(ucwords($_POST['field1'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield2)).' : '.sanitize_text_field(ucwords($_POST['field2'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield3)).' : '.esc_attr(ucwords($_POST['field3'])).'
		<br>
		'.sanitize_text_field(ucwords($inputfield4)).' : '.sanitize_text_field(ucwords($_POST['field4']))
		.'
		<br>'
		.sanitize_text_field(ucwords($outdate)).'
		<br>'
		.sanitize_text_field(ucwords($outputfrom_date)).'
		<br>'
		.sanitize_text_field(ucwords($outputto_date)).'
		<br>'
		.sanitize_text_field(ucwords($outputgender)).'
		<br>'
		.sanitize_text_field(ucwords($outputcountries)).'
		<br>'
		.sanitize_text_field(ucwords($outputseats)).'
		<br>'
		.sanitize_text_field(ucwords($outputrooms))
		;
global $wpdb;
$table = $wpdb->prefix.'reservation_entries';
$data = array('entries' => sanitize_text_field($body));
$format = array('%s','%d');
$wpdb->insert($table,$data,$format);
$my_id = $wpdb->insert_id;
}
		if($my_id){
			echo '<div style="background-color:#5ebc5f; margin-top:30px; color:#000; padding:10px; border-radius:10px;">Msg sent </div>';
		}
		else{
			echo '<div style="background-color:#ea7070; margin-top:30px; color:#000; padding:10px; border-radius:10px;"> No sent </div>';
		}

	}
}
	return ob_get_clean();
}
?>