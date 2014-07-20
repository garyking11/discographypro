	
		$('a[rel="popup-01"]').live('click', function(e) {	
            //alert('test');
			e.preventDefault();
			$.fancybox(this,{
			'padding'		: 0,
			'autoScale'		: true,
			'transitionIn'	: 'fade',
			'transitionOut'	: 'fade',
			'title'		: $('a[rel="popup-01"]').title,
			'titleShow'   : false,
			'overlayOpacity' :   0.8, 
			'overlayColor'  :   '#000', 
			//'easingIn' : 'swing',
			'showCloseButton' : true
			});
		 }); // end click
		 

		 
		$('a[rel="equipment-popup"]').live('click', function(e) {	
			 
			 
                var name = $(this).attr('title');
                //e.preventDefault();
                $.ajax({
                        type	: "POST",
                        cache	: false,
                        url		: "studio/studio-equipment-popup.php",
                        data	: '_01=' + escape(name),
                        success: function(data) {
                        $.fancybox(data);

                                //alert(data);
                        //	$('#equipment-data').html(data);
//				$.fancybox({
//    				'url'	: "studio/studio-equipment-popup.php",
//					'padding'		: 0,
//					'autoScale'		: true,
//					'transitionIn'	: 'fade',
//					'transitionOut'	: 'fade',
//					//'title'		: $(this).title,
//					//'titleShow'   : false,
//					'overlayOpacity' :   0.8, 
//					'overlayColor'  :   '#000', 
//					'showCloseButton' : true
//				}); // end fancybox		
			} // end success
	  }); // end ajax
		
    }); // end click		 