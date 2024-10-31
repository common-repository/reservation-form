 // function reply_click(clicked_id)
 //  {
 //  	jQuery(function($){
 //    $(".addoption"+clicked_id+"").append('<li ><input type="text" name="add_option'+clicked_id+'[]"></li>');
 //  	});
 //  }
jQuery(function($){
  $("#btnfield1").click(function(){
    $(".add_options_field1_ol").append('<li><td><input name="field1_add_options[] required" ></td></li><td>');
    $(".email_field1_ol").append('<li><td><input name="field1_email[] required" ></td></li><td>');
  });
   $("#btnfield2").click(function(){
    $(".add_options_field2_ol").append('<li><td><input name="field2_add_options[] required" ></td></li><td>');
    $(".email_field2_ol").append('<li><td><input name="field2_email[] required" ></td></li><td>');
  });
   $("#btnfield3").click(function(){
     $(".add_options_field3_ol").append('<li><td><input name="field3_add_options[] required" ></td></li><td>');
    $(".email_field3_ol").append('<li><td><input name="field3_email[] required" ></td></li><td>');
  });
    $("#btnfield4").click(function(){
    $(".add_options_field4_ol").append('<li><td><input name="field4_add_options[] required" ></td></li><td>');
    $(".email_field4_ol").append('<li><td><input name="field4_email[] required" ></td></li><td>');
  });
});
function togglePopup(){
  document.getElementById("popup-1").classList.toggle("active");
}