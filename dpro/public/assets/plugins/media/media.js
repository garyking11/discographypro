function gatherImageValues() {
	var imageArray = new Array();
		$("input:text[name='image']").each(function(){		
				imageArray.push($(this).val());
		}); // end gather array values
		
		$("#allImage").empty();
		$('#allImage').val(imageArray);
		
	}
	
function gatherCaptionValues() {
	var captionArray = new Array();
			$("textarea[name='image-caption']").each(function(){			
				captionArray.push($(this).val());
		}); // end gather array values
		
		$("#allImageCaption").empty();
		$('#allImageCaption').val(captionArray);
		
	}
	// $('#image-added').empty();
	
	// Alert user to changes
function alertUserToImageChanges() {
		$('#image-scripts2').html('<span class="info">Do you want to save your changes</span>');	
		$("#edit-image").text('Save Changes');
		$("#edit-image").removeClass('btn btn-success');
		$("#edit-image").removeClass('btn btn-info');
		$("#edit-image").addClass('btn btn-warning');
		$("#edit-image").fadeIn();
		}
	$('#add-image').on('click', function() {
		$(this).select();
		  alertUserToImageChanges();			
	});	
		
	$('#image-added').on('click', 'input', function() {
		$(this).select();
		  alertUserToImageChanges();			
	});	
	
	$('#image-added').on('click', 'textarea', function() {
		$(this).select();
		  alertUserToImageChanges();			
	});	
	
	$('.image-caption').on('blur', function(){
	gatherCaptionValues();
	
});
// end functions	 
	 	
$(document).ready(function() {
	
	$("#edit-image").on('click', function(e) {									
		
		e.preventDefault();
		gatherImageValues();
		gatherCaptionValues();
		
				
		var component = $('#component_type').val();
		var aid = $('#id').val();
		var username =  $('#username').val();
		var post_action = $('#media-action').val(); // must change this
		var item1 = $('#allImage').val();
		var item2 = $("#allImageCaption").val();
		var item3 = $("#media_type").val(); // must change this
	/*	var item4 = $("#").val();
		var item5 = $("#").val();
		var item6 = $("#").val();
		var item7 = $("#").val();
		var item8 = $("#").val();
		var item9 = $("#").val();
		var item10 = $("#").val();
		var item11 = $("#").val();
		var item12 = $("#").val();
		var item13 = $("#").val();
		var item14 = $("#").val();
		var item15 = $("#").val();
		var item16 = $("#").val();*/
		
		 
	$.ajax({	
			type: "POST",
			//url: 'Assets/Plugins/Image/image-select.php',
			url: 'index?post_action=' + post_action,
			
			data: 	
			"post_action=" + escape(post_action)
			+ "&aid=" + escape(aid)
			+ "&component=" + escape(component)
			+ "&username=" + escape(username)
			+ "&item1=" + escape(item1)
			+ "&item2=" + escape(item2)
		/*	+ "&item3=" + escape(item3)
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
			
			$('#image-scripts1').html("<?php include 'http://discographypro.com/dev/Site/Config/Database.php'; $db = new \Database\Database; ?>")	
			$('#image-scripts2').html('<span class="success">You have updated your images</span>');	
			//$('#image-scripts3').html('<?php include "Assets/Plugins/Image/-image-select.php"; ?> helloooooo');	
		  $("#edit-image").removeClass('btn btn-warning');
			$("#edit-image").addClass('btn btn-success');
			$("#edit-image").html('<i class="icon-white icon-ok">');
			$("#edit-image").text('Success');
	  	 //var numInputs = $("#image-added input").length;	
	
			}
		}); // end ajax
	});	// end click
}); // end document.ready


		 // Add caption to textarea array
		//$('textarea.image-caption').val();
	 	
// Add image to slideshow
	$('#add-image').on('click',function() {			
		var albumid = $('#id').val();
		
		//dropdown select form
		var selectImage = $('#select-image').val();
		$('#select-image').find("option:selected").text();
		
		// create element with above value	
		$('#image-added').append(
			'<div class="image-item ui-state-default">'
			
	// Show the thumbnails of selected slideshow images
			+ '<img class="thumbnail" name="selected-thumb"'
			+ 'src="Site/Assets/Images/album/' +  albumid + '/' + selectImage  + '" />'
			
	// Add a caption box to the image
			+ '<textarea class="image-caption" name="image-caption" style=""></textarea>'
				+ ' &nbsp;&nbsp;<a class="remove-image btn btn-danger btn-small">Remove</a>'
			// Get values from input fields to add to array which is sent to the database
			+ '<input type="text" disabled="disabled" class="image clear" name="image"'
			+  'value="Site/Assets/Images/album/' +  albumid + '/' + selectImage + '" /></div>'
			
		// Remove the image from the slideshow
		
			
		); // end prepend
	
		$('.image-caption').hide().fadeIn(); //.focus()
	
		//var imageArray = new Array();			
		gatherImageValues();
		gatherCaptionValues();
		
		// update thumbnails on add			
		var selectImage = $('#select-image').val();
		var allImage = $('#allImage').val();
		 
		 $.each( [imageArray], function(i, l){
		 }); 
			 							
		}); // end add-image

	  // remove image image
	
	$('#image-added').on('click', function() {
		$(this).select();
		 gatherImageValues();
		 gatherCaptionValues();
		 alertUserToImageChanges(); 
	});	
	
	$('#image-added').on('click', 'a.remove-image', function(){ 
  		$(this).parent().remove();
			
				gatherImageValues();
				gatherCaptionValues();
				alertUserToImageChanges();
	}); // end remove social account 
	 
				
		/*//validate input field to be not empty
		$('#image-added').on('blur', '.image', function(){
			if( !this.value ) {
			$(this).css('border', '1px solid #ff0000');
			return false;
			
		//	alert('empty');
			} else {
				$(this).css('border', 'inherit');
			}
		
			gatherCaptionValues();
			gatherImageValues();
		
		});*/
		
		
		/*//validate input field for url
		$('#image-added').on('blur', '.image', function(){
				var input = $(this);
				var val = input.val();
				if (val && !val.match('Site/Assets/images/')) {
					input.val(val);
		
				} else {	
			input.val(val);
			}
			
			gatherCaptionValues();
			gatherImageValues();
			alertUserToImageChanges();
				
			});*/
			
			
			/*var img = new Object();
		img.src = "";
		img.caption = "";
		
		
		var img1 = new Object(img);
		img1.src = "/assets/yada";
		img.caption = "music album"; 
		
		var images = Array();
		images.push(img1);
		[2:39:05 PM] Kevin Townsend: like this, then you just change img src and caption when change them
		
		or you could say images[i].caption = captionArray[i]
		
	
	*/
	
	

/*function gatherValues() {
 
 //alert('gathering');
 $("input:text[name='image']").each(function(i){  
  images[i].src = $(this).val();
 }); // end gather array values
 
 $("textarea[name='image-caption']").each(function(i){   
  images[i].caption = $(this).val();
 }); // end gather array values
}


var srcs = "";
var captions = "";
for(var i = 0; i < images.length; i++){
 srcs += images[i].src;
 captions += images[i].caption;
}*/
				
				
/*						
var srcs = "";
var captions = "";
for(var i = 0; i < images.length; i++){
 srcs += images[i].src;
 captions += images[i].caption;

[2:57:55 PM] Kevin Townsend: just put it inside the ajax call,  it's just a string
[2:58:13 PM] Gary King: right..... got it ... i think
[2:58:27 PM] Kevin Townsend: I'm pretty sure you don't even need to do that,  you can use json to pass the array with ajax in it's entirety
[2:58:38 PM] Kevin Townsend: so it will be an array at the server*/
