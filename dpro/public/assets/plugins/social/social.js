function gatherValues() {
	var newArray = new Array();
		$("input:text[name='social']").each(function(){		
				newArray.push($(this).val());
		}); // end gather array values
		
		$("#allSocial").empty();
		$('#allSocial').val(newArray);
		alertUserToSocialChanges();
	}

// Alert user to changes
function alertUserToSocialChanges() {
		//$('#social-scripts2').html('<span class="warning">Do you want to save your changes</span>');	
		$("#edit-social").text('Save Changes');
		$("#edit-social").removeClass('btn btn-success');
		$("#edit-social").removeClass('btn btn-info');
		$("#edit-social").addClass('btn btn-warning');
		$("#edit-social").fadeIn();
		}
		
	
	$('#add-social').on('click', function() {
		$(this).select();
		  alertUserToImageChanges();			
	});	
		
	$('#social-added').on('click', 'input', function() {
		$(this).select();
		  alertUserToSocialChanges();			
	});	
	
	$('#social-added').on('click', 'textarea', function() {
		$(this).select();
		  alertUserToSocialChanges();			
	});	
	
// end functions
	
// end functions

$(document).ready(function() {
	
	$("#edit-social").on('click', function(e) {									
		
		e.preventDefault();
	
		var component = $('#component_type').val();
		var aid = $('#id').val();
		var username =  $('#username').val();
		var item1 = $('#allSocial').val();
		var action = $('#social-action').val();
		var item2 = document.getElementById("select-social").value;
	/*	var item3 = document.getElementById("").value;
		var item4 = document.getElementById("").value;
		var item5 = document.getElementById("").value;
		var item6 = document.getElementById("").value;
		var item7 = document.getElementById("").value;
		var item8 = document.getElementById("").value;
		var item9 = document.getElementById("").value;
		var item10 = document.getElementById("").value;
		var item11 = document.getElementById("").value;
		var item12 = document.getElementById("").value;
		var item13 = document.getElementById("").value;
		var item14 = document.getElementById("").value;
		var item15 = document.getElementById("").value;
		var item16 = document.getElementById("").value;*/
		 
	$.ajax({	
			type: "POST",
			//url: 'Assets/Plugins/Social/social-select.php',
			url: 'index?post_action=' + action,
			data: 	
			"action=" + escape(action)
			+ "&aid=" + escape(aid)
			+ "&component=" + escape(component)
			+ "&username=" + escape(username)
			+ "&item1=" + escape(item1)
			+ "&item2=" + escape(item2)
	/*		+ "&item3=" + escape(item3)
			+ "&item4=" + escape(item4) 
			+ "&item5=" + escape(item5) 
			+ "&item6=" + escape(item6) 
			+ "&item7=" + escape(item7) 
			+ "&item8=" + escape(item8)
			+ "&item9=" + escape(item9) 
			+ "&item10=" + escape(item10) 
			+ "&item11=" + escape(item11) 
			+ "&item12=" + escape(item12) 
			+ "&item13=" + escape(item13)
			+ "&item14=" + escape(item14)
			+ "&item15=" + escape(item15) 
			+ "&item16=" + escape(item16)*/,
						
		success: function(data) {
			
			$('#social-scripts1').html("<?php include 'http://discographypro.com/dev/Site/Config/Database.php'; $db = new \Database\Database; ?>")	
			$('#social-scripts2').html('<span class="success">You have updated your social icons</span>');	
			//$('#social-scripts3').html('<?php include "Assets/Plugins/Social/-social-select.php"; ?> helloooooo');	
		  $("#edit-social").css('color', '#333');
			$("#edit-social").text('Update Social');
			
			 
			 var numInputs = $("#social-added input").length;	
	
			}
		}); // end ajax
	});	// end click
}); // end document.ready






// Sortable 
/*$(document).ready(function(){ 
	var allSocial = $('.social').val();
	}); */ 
	 
	$('#add-social').on('click',function() {
		
			var selectSocial = $('#select-social').val();
			$('#select-social').find("option:selected").text();
			
			// create element with above value	
			$('#social-added').prepend(
				'<p class="social-item ui-state-default">'
				+ '<input type="text" class="social warning" name="social" placeholder="Enter your ' + selectSocial  + ' link" value="' + 'http://'  + '" />'
				+ ' &nbsp;&nbsp;<a class="remove-social btn btn-danger btn-small"> Remove</a></p>'
			); // end prepend
			
			gatherValues();
			
			/*$('#social-form :input').on('click', function() {	
			???????
			});*/
	}); // end add-social 
		
	$('#social-added').on('click', 'input', function() {
		$(this).select();
		 alertUserToSocialChanges();			
	});	

	// remove social account
	$('#social-added').on('click', 'a.remove-social', function(){ 
  		$(this).parent().remove();
			gatherValues();
	}); // end remove social account 
	
	
	
	
					
	//validate input field to be not empty
	$('#social-added').on('blur', '.social', function(){
	if( !this.value ) {
		$(this).css('border', '1px solid #ff0000');
		return false;
			
	} else {
		$(this).css('border', 'inherit');
	}
	
	gatherValues();
	
	});
			
	// validate input field for http://
	$('#social-added').on('blur', '.social', function(){
	
		var input = $(this);
		var val = input.val();
			//check for http:// or https://
			if (val && !val.match(/^http([s]?):\/\/.*/)) {
	
		
		} else {
				input.val(val);
		}
	
	gatherValues();
				
}); //end doc ready
