 $(document).ready(function() { 
 
        $('#photoimg').on('change', function()	{  
	      $('.progress').removeClass('progress-danger');
		    $('.progress').removeClass('progress-success');
			  $("#preview").html('Media uploading');
				 
				 //$("#current").hide();
				 var bar = $('.bar');
				 var percent = $('.percent');
				 var status = $('#status');
				 
        //$("#preview").html('<img src="Assets/img/ajax-loader.gif" alt="Uploading...."/>');
				
				$("#imageform").ajaxForm({
					 
						beforeSend: function() {
						status.empty();
						var percentVal = '0%';
	 
						bar.width(percentVal)
						percent.html(percentVal);
						
    		},
   		 
			    uploadProgress: function(event, position, total, percentComplete) {
				
						var percentVal = percentComplete + '%';
						bar.width(percentVal);
						percent.html(percentVal);
			
				 // console.log(percentVal, position, total);
		
    		},
			
					complete: function(xhr) {
						var percentVal = '100%';
						bar.width(percentVal);
						
				if ( $('#preview').text().contains('Error') )
						{ 
						
								$('.progress').addClass('progress progress-danger');
						 
						 } else {
					
										$('.progress').addClass('progress progress-success');
										 
										//location.reload();
					 					//$('#image-insert').fadeIn().load('Assets/Plugins/Upload/ajax_file.php'); 
										//$.ajaxSetup({ cache: false });
										var id = $('#id').val();
										var component = $('#component').val();
										//alert(id + ' ' + component);
												$.ajax({
													//url: 'Assets/Plugins/Upload/available-images.php',
													cache: false,
													//delegation: true,
													success: function(data) {
													//alert(data);
														//	$('#image-data').html(data).hide().fadeIn();
															$('#image-insert').hide().fadeIn().load('Assets/Plugins/Media/image-insert.php?id=' + id + '&component=' + component + '&upload=true'); 
															 
															//$('#image-insert').hide().fadeIn().load('Assets/Plugins/Upload/ajax_file.php'); 
															$('#audio-insert').hide().fadeIn().load('Assets/Plugins/Media/audio-insert.php?id=' + id + '&component=' + component + '&upload=true');  
															$('#video-insert').hide().fadeIn().load('Assets/Plugins/Media/video-insert.php?id=' + id + '&component=' + component + '&upload=true'); 
													
													},
													
														error: function(jqXHR) {
															alert(jqXHR.state());
														}
													
												}); 
						 			}
						 
									percent.html(percentVal);
									$('#photoimg').val(""); //remove value for iPad
									//status.html('Thank You Upload Complete!')
						 }
								
							, target: '#preview'
				
				}).submit();
		
			});
	
}); 		
			console.log('All file_upload.js has been fired');
			console.error();
			//console.debug();
			console.warn();
			console.info();
			