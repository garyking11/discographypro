
  $(document).ready(function(){
	 
    $("#ajax-mailer-form").validate({	   
		rules: {
		
			name: {nameRequired: [".name"]},
	 		email: {require_from_group: [1,".group"]},
 			phone: {require_from_group: [1,".group"]}

	   		}, // end rules
				
			messages: {
			
			email: {
    		email: "Format: name@domain.com"
			}
		   }, //end messages
     
		   submitHandler: function(form) {
  			
			var name = $('#name').val();	
			var phone = $('#phone').val();
			var email = $('#email').val();
			var message = $('#message').val();
						
			$.ajax({
			  url: "/plugins/ajax-mailer/ajax-process.php",
			  type: "POST",
			  data:
				"name=" + escape(name)	
				+ "&email=" + escape(email)
				+ "&phone=" + escape(phone)
				+ "&message=" + escape(message),
			
			  success: function(data){
				 $('#ajax-mailer').html(data);
			   $('#ajax-mailer').css('background', 'none');
			   $('#ajax-mailer').css('height', '100');
			  }
			}); // end ajax
			 }
	}); // end validate
  });
