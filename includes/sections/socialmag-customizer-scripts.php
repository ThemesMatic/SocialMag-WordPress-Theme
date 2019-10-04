<?php
	// ThemesMatic jquery controls for theme customizer radio buttons
	function customizer_custom_scripts() { ?>
	<script type="text/javascript">
	// Adds a class to active radio selections
	jQuery(document).ready(function($) {
		$('input:radio').click(function () {
		    $('label:has(input:radio:checked)').addClass('active-control');
		    $('label:has(input:radio:not(:checked))').removeClass('active-control');
		});
		// Loop through each checked radio button
		$('input:radio').each(function () {
		    $('label:has(input:radio:checked)').addClass('active-control');
		});
	});
	
	jQuery(document).ready(function($) {
	    
	    // Shows/hides boxed width option
		$('#customize-control-socialmag_boxed_check input[type="checkbox"]').click(function(){
	        if($(this).prop("checked") == true){
	            $('#customize-control-socialmag_site_width').show();
	        }
	        else if($(this).prop("checked") == false){
	            $("#customize-control-socialmag_site_width").hide();
	        }
	    });
	    
	    // Checks for current state of boxed width option and shows/hides site width option
	    if($('#customize-control-socialmag_boxed_check input[type="checkbox"]').prop("checked") == true){
	            $('#customize-control-socialmag_site_width').show();
	        }
	        else if($('#customize-control-socialmag_boxed_check input[type="checkbox"]').prop("checked") == false){
	            $("#customize-control-socialmag_site_width").hide();
	        }
	});
	</script>
<?php } //end customizer_custom_scripts