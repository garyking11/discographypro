$(document).ready(function() {
	
	function alertUserToAlbumChanges() {
		//$('#image-scripts2').html('<span class="info">Do you want to save your changes</span>');	
		$("#edit-image").text('Save Changes');
		$("#edit-image").removeClass('btn btn-success');
		$("#edit-image").removeClass('btn btn-info');
		$("#edit-image").addClass('btn btn-warning');
		$("#edit-image").fadeIn();
		}
		 
		$("#album-form :input").on('click', function() {
		var formChildren = $("#album-form").find('input');	
			$("#album-form").find('input');
			//alert(formChildren.length);	
		}); // end on click
		
	$('.edit').on('click', function(e) {
		e.preventDefault;
		var component = $(this).attr('id');
		console.log(component);
		//alert(component);
		
	
		
		/*$.ajax({	
			type: "POST",
			url: 'index?post_action=' + component,
			//url: 'index?post_action=' + post_action,
			
			data: 	
			"id=" + escape(id)
			/*+ "&aid=" + escape(aid)
			+ "&component=" + escape(component)
			+ "&username=" + escape(username)
			+ "&item1=" + escape(item1)
			+ "&item2=" + escape(item2)
			+ "&item3=" + escape(item3)
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
			+ "&item16=" + escape(item16),*/
						
		/*success: function(data) {
			$('#db-credentials').empty();
			
			$("#btn-update").removeClass('btn btn-warning');
			$("#btn-update").addClass('btn btn-success');
			$("#btn-update").html('<i class="icon-white icon-ok">');
			$("#btn-update").text('Success');
			
			$('#btn-update').html("Update Successful");
			//$('#content').load('discography/Site/Include/site-content.php?id=' + id + ';')
			//	alert(id);
			}
		}); // end ajax*/
		
	}); // end edit-alblum click
	console.log('ALL edit-controller.js has been fired');
}); // end doc ready
