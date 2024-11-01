jQuery(document).ready(function($) {	
		//* Include colorpicker
	$('.wp-color-picker-field').wpColorPicker();
	
	$('#wow_google_login input:checkbox:checked').each(function(){
		var str = $(this).attr("id");
		var check = str.replace("wow_", "");
		$( "input[name='wow_google_login["+check+"]']" ).val(1);	
		});
	
	$('#wow_google_login input[type="checkbox"]').change(function () {
		var str = $(this).attr("id");
		var check = str.replace("wow_", "");
		if($(this).prop('checked')){			
			$( "input[name='wow_google_login["+check+"]']" ).val(1);			
		}
		else {
			$( "input[name='wow_google_login["+check+"]']" ).val(0);
		}
	});	
	
	
})
