function gatherAudioValues() {
	var audioArray = new Array();
		$("input:text[name='audio']").each(function(){		
				audioArray.push($(this).val());
		}); // end gather array values
		
		$("#allAudio").empty();
		$('#allAudio').val(audioArray);
		
	}
	
function gatherAudioCaptionValues() {
	var captionArray = new Array();
			$("textarea[name='audio-caption']").each(function(){			
				captionArray.push($(this).val());
		}); // end gather array values
		
		$("#allAudioCaption").empty();
		$('#allAudioCaption').val(captionArray);
		
	}
	// $('#audio-added').empty();
	
	// Alert user to changes
function alertUserToAudioChanges() {
		//$('#audio-scripts2').html('<span class="info">Do you want to save your changes</span>');	
		$("#edit-audio").text('Save Changes');
		$("#edit-audio").removeClass('btn btn-success');
		$("#edit-audio").removeClass('btn btn-info');
		$("#edit-audio").addClass('btn btn-warning');
		$("#edit-audio").fadeIn();
		}
	$('#add-audio').on('click', function() {
		$(this).select();
	//	alert($('#select-audio').val()) ;
		  alertUserToAudioChanges();			
	});	
		
	$('#audio-added').on('click', 'input', function() {
		$(this).select();
		  alertUserToAudioChanges();			
	});	
	
	$('#audio-added').on('click', 'textarea', function() {
		$(this).select();
		  alertUserToAudioChanges();			
	});	
	
	$('.audio-caption').on('blur', function(){
	gatherAudioCaptionValues();
	
});
// end functions	 
	 	
$(document).ready(function() {
	
	$("#edit-audio").on('click', function(e) {									
		
		e.preventDefault();
		gatherAudioValues();
		gatherAudioCaptionValues();


/*function gatherValues() {
 
 //alert('gathering');
 $("input:text[name='audio']").each(function(i){  
  audio[i].src = $(this).val();
 }); // end gather array values
 
 $("textarea[name='audio-caption']").each(function(i){   
  audio[i].caption = $(this).val();
 }); // end gather array values
}*/
				
		var component = $('#component_type').val();
		var aid = $('#id').val();
		var username =  $('#username').val();
		var post_action = $('#audio-action').val(); // must change this
		var item3 = $('#allAudio').val();
		var item4 = $("#allAudioCaption").val();
		/*var item3 = $("#media_type").val(); // must change this
		var item4 = $("#").val();
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
			//url: 'Assets/Plugins/Audio/audio-select.php',
			url: 'index?post_action=' + post_action,
			
			data: 	
			"post_action=" + escape(post_action)
			+ "&aid=" + escape(aid)
			+ "&component=" + escape(component)
			+ "&username=" + escape(username)
		//	+ "&item1=" + escape(item1)
		//	+ "&item2=" + escape(item2)
			+ "&item3=" + escape(item3)
			+ "&item4=" + escape(item4) 
		/*	+ "&item5=" + escape(item5) 
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
			
			$('#audio-scripts1').html("<?php include 'http://discographypro.com/dev/Site/Config/Database.php'; $db = new \Database\Database; ?>")	
			//$('#audio-scripts2').html('<span class="success">You have updated your playlist</span>');	
			//$('#audio-scripts3').html('<?php include "Assets/Plugins/Audio/-audio-select.php"; ?> helloooooo');	
		  $("#edit-audio").removeClass('btn btn-warning');
			$("#edit-audio").addClass('btn btn-success');
			$("#edit-audio").html('<i class="icon-white icon-ok">');
			$("#edit-audio").text('Success');
	  	 //var numInputs = $("#audio-added input").length;	
	
			}
		}); // end ajax
	});	// end click
}); // end document.ready


		 // Add caption to textarea array
		//$('textarea.audio-caption').val();
	 	
// Add audio to slideshow
	$('#add-audio').on('click',function() {			
		var id = $('#id').val();
		
		//dropdown select form
		var selectAudio = $('#select-audio').val();
		$('#select-audio').find("option:selected").text();
		
		// create element with above value	
		$('#audio-added').append(
			'<div class="audio-item ui-state-default">'
			
	// Show the thumbnails of selected playlist tracks
		//	+ '<img class="thumbnail" name="selected-thumb"'
			//+ 'src="Site/Assets/Audio/album/' +  albumid + '/' + selectAudio  + '" />'
			
	// Add a caption box to the audio
			+ '<p>' + selectAudio + '</p>'
			+ '<textarea class="audio-caption" name="audio-caption" style=""></textarea>'
			+ ' &nbsp;&nbsp;<a class="remove-audio btn btn-danger btn-small">Remove</a>'
			// Get values from input fields to add to array which is sent to the database
			+ '<input type="text" disabled="disabled" class="audio clear" name="audio"'
			+  'value="Site/Assets/Audio/'+ component + '/' +  id + '/' + selectAudio + '" />'
			+'</div>'
			
		// Remove the audio from the slideshow
		
			
		); // end prepend
	
		$('.audio-caption').hide().fadeIn(); //.focus()
	
		//var audioArray = new Array();			
		gatherAudioValues();
		gatherAudioCaptionValues();
		
		// update thumbnails on add			
		var selectAudio = $('#select-audio').val();
		var allAudio = $('#allAudio').val();
		 
	//	 $.each( [audioArray], function(i, l){
		// }); 
			 							
		}); // end add-audio

	  // remove audio audio
	
	$('#audio-added').on('click', function() {
		$(this).select();
		 gatherAudioValues();
		 gatherAudioCaptionValues();
		 alertUserToAudioChanges(); 
	});	
	
	$('#audio-added').on('click', 'a.remove-audio', function(){ 
  		$(this).parent().remove();
			
				gatherAudioValues();
				gatherAudioCaptionValues();
				alertUserToAudioChanges();
	}); // end remove social account 
	 
				
		/*//validate input field to be not empty
		$('#audio-added').on('blur', '.audio', function(){
			if( !this.value ) {
			$(this).css('border', '1px solid #ff0000');
			return false;
			
		//	alert('empty');
			} else {
				$(this).css('border', 'inherit');
			}
		
			gatherAudioCaptionValues();
			gatherAudioValues();
		
		});*/
		
		
		/*//validate input field for url
		$('#audio-added').on('blur', '.audio', function(){
				var input = $(this);
				var val = input.val();
				if (val && !val.match('Site/Assets/audio/')) {
					input.val(val);
		
				} else {	
			input.val(val);
			}
			
			gatherAudioCaptionValues();
			gatherAudioValues();
			alertUserToAudioChanges();
				
			});*/
			
			
			/*var img = new Object();
		img.src = "";
		img.caption = "";
		
		
		var img1 = new Object(img);
		img1.src = "/assets/yada";
		img.caption = "music album"; 
		
		var audio = Array();
		audio.push(img1);
		[2:39:05 PM] Kevin Townsend: like this, then you just change img src and caption when change them
		
		or you could say audio[i].caption = captionArray[i]
		
	
	*/
	
	

/*function gatherValues() {
 
 //alert('gathering');
 $("input:text[name='audio']").each(function(i){  
  audio[i].src = $(this).val();
 }); // end gather array values
 
 $("textarea[name='audio-caption']").each(function(i){   
  audio[i].caption = $(this).val();
 }); // end gather array values
}


var srcs = "";
var captions = "";
for(var i = 0; i < audio.length; i++){
 srcs += audio[i].src;
 captions += audio[i].caption;
}*/
				
				
/*						
var srcs = "";
var captions = "";
for(var i = 0; i < audio.length; i++){
 srcs += audio[i].src;
 captions += audio[i].caption;

[2:57:55 PM] Kevin Townsend: just put it inside the ajax call,  it's just a string
[2:58:13 PM] Gary King: right..... got it ... i think
[2:58:27 PM] Kevin Townsend: I'm pretty sure you don't even need to do that,  you can use json to pass the array with ajax in it's entirety
[2:58:38 PM] Kevin Townsend: so it will be an array at the server*/
