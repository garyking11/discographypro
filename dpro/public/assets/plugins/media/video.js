function gatherVideoValues() {
	var videoArray = new Array();
		$("textarea[name='video-embed']").each(function(){		
				videoArray.push($(this).val());
		}); // end gather array values
		
		$("#allVideo").empty();
		$('#allVideo').val(videoArray);
		
	}
	
function gatherVideoCaptionValues() {
	var captionArray = new Array();
			$("textarea[name='video-caption']").each(function(){			
				captionArray.push($(this).val());
		}); // end gather array values
		
		$("#allVideoCaption").empty();
		$('#allVideoCaption').val(captionArray);
		
	}
	// $('#video-added').empty();
	
	// Alert user to changes
function alertUserToVideoChanges() {
		//$('#video-scripts2').html('<span class="info">Do you want to save your changes</span>');	
		$("#edit-video").text('Save Changes');
		$("#edit-video").removeClass('btn btn-success');
		$("#edit-video").removeClass('btn btn-info');
		$("#edit-video").addClass('btn btn-warning');
		$("#edit-video").fadeIn();
		}
	$('#add-video').on('click', function() {
		$(this).select();
	//	alert($('#select-video').val()) ;
		  alertUserToVideoChanges();			
	});	
		
	$('#video-added').on('click', 'input', function() {
		$(this).select();
		  alertUserToVideoChanges();			
	});	
	
	$('#video-added').on('click', 'textarea', function() {
		$(this).select();
		  alertUserToVideoChanges();			
	});	
	
	$('.video-caption').on('blur', function(){
	gatherVideoCaptionValues();
	
	});

  $('.video-embed').on('blur', function(){
  	gatherVideoValues();	
	});	

// end functions	 
	 	
$(document).ready(function() {
	
$("#edit-video").on('click', function(e) {									
	
		e.preventDefault();
		gatherVideoValues();
		gatherVideoCaptionValues();
		
				
		var component = $('#component_type').val();
		var aid = $('#id').val();
		var username =  $('#username').val();
		var post_action = $('#video-action').val(); // must change this
	
		var item5 = $("#allVideo").val();
		var item6 = $("#allVideoCaption").val();
	  /*var item7 = $("#").val();
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
			//url: 'Assets/Plugins/Video/video-select.php',
			url: 'index?post_action=' + post_action,
			
			data: 	
			"post_action=" + escape(post_action)
			+ "&aid=" + escape(aid)
			+ "&component=" + escape(component)
			+ "&username=" + escape(username)
			+ "&item5=" + escape(item5) 
			+ "&item6=" + escape(item6) 
		  /*+ "&item7=" + escape(item7) 
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
			
			$('#video-scripts1').html("<?php include 'http://discographypro.com/dev/Site/Config/Database.php'; $db = new \Database\Database; ?>")	
			//$('#video-scripts2').html('<span class="success">You have updated your playlist</span>');	
			//$('#video-scripts3').html('<?php include "Assets/Plugins/Video/-video-select.php"; ?> helloooooo');	
		  $("#edit-video").removeClass('btn btn-warning');
			$("#edit-video").addClass('btn btn-success');
			$("#edit-video").html('<i class="icon-white icon-ok">');
			$("#edit-video").text('Success');
	  	 //var numInputs = $("#video-added input").length;	
	
			}
		}); // end ajax
	});	// end click
}); // end document.ready


		 // Add caption to textarea array
		//$('textarea.video-caption').val();
	 	
// Add video to slideshow
	$('#add-video').on('click',function() {			
		var albumid = $('#id').val();
		
		//dropdown select form
		var selectVideo = $('#select-video').val();
		$('#select-video').find("option:selected").text();
		
		// create element with above value	
		$('#video-added').append(
			'<div class="video-item ui-state-default">'
			
	// Show the thumbnails of selected playlist tracks
		//	+ '<img class="thumbnail" name="selected-thumb"'
			//+ 'src="Site/Assets/Video/album/' +  albumid + '/' + selectVideo  + '" />'
			
	// Add a caption box to the video
			+ '<p>Paste video embed code</p>'
			+ '<textarea class="video-embed" name="video-embed" style=""></textarea>'
			+ '<p>Video caption</p>'
			+ '<textarea class="video-caption" name="video-caption" style=""></textarea>'
			+ ' &nbsp;&nbsp;<a class="remove-video btn btn-danger btn-small">Remove</a>'
			// Get values from input fields to add to array which is sent to the database
			//+ '<input type="text" disabled="disabled" class="video clear" name="video"'
			//+  'value="Site/Assets/Video/album/' +  albumid + '/' + selectVideo + '" />'
			+'</div>'
			
		// Remove the video from the slideshow
		
			
		); // end prepend
	
		$('.video-caption').hide().fadeIn(); //.focus()
	
		//var videoArray = new Array();			
		gatherVideoValues();
		gatherVideoCaptionValues();
		
		// update thumbnails on add			
		var selectVideo = $('#select-video').val();
		var allVideo = $('#allVideo').val();
		 
	//	 $.each( [videoArray], function(i, l){
		// }); 
			 							
		}); // end add-video

	  // remove video video
	
	$('#video-added').on('click', function() {
		$(this).select();
		 gatherVideoValues();
		 gatherVideoCaptionValues();
		 alertUserToVideoChanges(); 
	});	
	
	$('#video-added').on('click', 'a.remove-video', function(){ 
  		$(this).parent().remove();
			
				gatherVideoValues();
				gatherVideoCaptionValues();
				alertUserToVideoChanges();
	}); // end remove social account 
	 
				
		/*//validate input field to be not empty
		$('#video-added').on('blur', '.video', function(){
			if( !this.value ) {
			$(this).css('border', '1px solid #ff0000');
			return false;
			
		//	alert('empty');
			} else {
				$(this).css('border', 'inherit');
			}
		
			gatherVideoCaptionValues();
			gatherVideoValues();
		
		});*/
		
		
		/*//validate input field for url
		$('#video-added').on('blur', '.video', function(){
				var input = $(this);
				var val = input.val();
				if (val && !val.match('Site/Assets/video/')) {
					input.val(val);
		
				} else {	
			input.val(val);
			}
			
			gatherVideoCaptionValues();
			gatherVideoValues();
			alertUserToVideoChanges();
				
			});*/
			
			
			/*var img = new Object();
		img.src = "";
		img.caption = "";
		
		
		var img1 = new Object(img);
		img1.src = "/assets/yada";
		img.caption = "music album"; 
		
		var video = Array();
		video.push(img1);
		[2:39:05 PM] Kevin Townsend: like this, then you just change img src and caption when change them
		
		or you could say video[i].caption = captionArray[i]
		
	
	*/
	
	

/*function gatherValues() {
 
 //alert('gathering');
 $("input:text[name='video']").each(function(i){  
  video[i].src = $(this).val();
 }); // end gather array values
 
 $("textarea[name='video-caption']").each(function(i){   
  video[i].caption = $(this).val();
 }); // end gather array values
}


var srcs = "";
var captions = "";
for(var i = 0; i < video.length; i++){
 srcs += video[i].src;
 captions += video[i].caption;
}*/
				
				
/*						
var srcs = "";
var captions = "";
for(var i = 0; i < video.length; i++){
 srcs += video[i].src;
 captions += video[i].caption;

[2:57:55 PM] Kevin Townsend: just put it inside the ajax call,  it's just a string
[2:58:13 PM] Gary King: right..... got it ... i think
[2:58:27 PM] Kevin Townsend: I'm pretty sure you don't even need to do that,  you can use json to pass the array with ajax in it's entirety
[2:58:38 PM] Kevin Townsend: so it will be an array at the server*/
