$('document').ready(function() {
	//$.noConflict();
	 
	$('#album-form :input, .editor').focus(function() {	
	$('#btn-update-album').val('SAVE NEW CHANGES?')
		//alert('fired');
	//  $(this).attr('placeholder', '');
	})
	
	//;​	
//fade linkHover imgs
  $('.linkHover').hover( function() {
	  $(this).animate({opacity: '.65'}, 400);
  }, function() {
	  $(this).animate({opacity: '1'},400);
  });
  
  
  $('.shift').hover( function() { //, #sidebar a
  $(this).animate({bottom: '3px'},{queue:false,duration:100});
  }, function() {
  $(this).animate({bottom: '0'},{queue:false,duration:400});
  });
  
  //Slide the panels in admin pages
	$('.slideToggle').on('click', function(e) {	
	e.preventDefault();
	$(this).next('div.slider').fadeToggle("slow");
	//alert('toggle');
	});	 

/* Start config forms */	

  //Slide the panels in config-form-mgr
	$('.toggle-close').on('click', function(e) {	
	e.preventDefault();
	$(this).parent('div.slider').fadeOut("slow");
	//alert('toggle');
	});	


/*//ACCORDION BUTTON ACTION	
$('div.question h3').click(function () {
    var openContent = $(this).closest(".question");

    openContent.toggleClass("open");
    $(this).next().slideToggle('fast');
});

$('div.question .close').click(function () {
    var openContent = $(this).closest(".question");

    openContent.toggleClass("open");
    $(this).next().next().slideToggle('fast');
});*/

$('a[rel="add-field"]').on('click', function(e) {
	
		e.preventDefault(); 
			//alert('test');
	
			var id = $(this).prev().attr('id');
			var value = $(this).prev().val();
	
			$.ajax({	
					type: "POST",
					//url: 'app/library/Model/config-form.php', 
					  
					data: 	
					"key =" + escape(id)
					+ "&value=" + escape(value),
								
					success: function(data) {
						//$('#load-it-here').load('app/library/Model/config-form.php');
						//$('#load-it-here').html('<label for="<?php echo $fieldname; ?>"><input id="<?php echo $fieldname; ?>" name="<?php echo $fieldname; ?>" type="checkbox">&nbsp; <?php echo $value; ?> </label>');
						
						$('#load-it-here').html('<?php $field_array = array_push($fields, "new-field");  ?>' + 'testing');
						
					 	console.log(value);
						
					}
					
				}); // end ajax
});


$('a[rel="add-field-toggle"], a[rel="add-single-section"]').on('click', function(e) {
	
		e.preventDefault();
		var createField = $(this).parent().next('div.slider');
		
		createField.fadeToggle("slow");
	
			//alert(createField);
	
			var id = $(this).prev().attr('id');
			var value = $(this).prev().val();
	
			$.ajax({	
					type: "POST",
					//url: 'admin/config/' + id, ADD
					  
					data: 	
					"key =" + escape(id)
					+ "&value=" + escape(value),
								
					success: function(data) {
					 	console.log(value);
					}
					
				}); // end ajax
});
	

$('a[rel="field-trash"]').on('click', function(e) {
			e.preventDefault();
			var removeThis = $(this).parent('span');
			
			if (!confirm("Do you want to delete? \nThis will remove all content associated with this field.")){
      return false;
			}
			else {
			removeThis.remove();
			}
			
			console.log(removeThis);
});

$('a[rel="section-trash"]').on('click', function(e) {
			e.preventDefault();
			var removeThis = $(this).parent().parent().parent('fieldset.section')
			 
			if (!confirm("Do you want to delete? \nThis will remove all content associated with this section.")){
      return false;
			}
			else {
			removeThis.remove();
			}
			
			console.log(removeThis);
});
	  

	/* sortable field names */
			$(".sortable").sortable({ 
			 cursor: "move",
			 cancel: "a,button"
	 
	});
   
	/* End config forms */
	         	
  $('.editor').css('background', 'none');
   setTimeout(function() { $('.editor').fadeIn(1000);}, 1200); 

			
// start social-accounts sortable	
	$(function() {
		$( "#social-accounts .sortable" ).sortable({
		placeholder: "ui-state-highlight",
		containment: "#social-accounts",
		context: this,
		update: function(){        
	
	// gather array values
	var newArray = new Array();
		$("input:text[name='social']").each(function(){		
			newArray.push($(this).val());
		}); // end gather array values
		
		$("#allSocial").empty();
		$('#allSocial').val(newArray);
		}
	
		});
		$( ".sortable" ).disableSelection();
		});
		
		
		//Back to top hide and animate
		if ($('#bd').height() > $(window).height()) {
			$('.back-to-top').removeClass('hide');
		}
		/* $('.back-to-top').removeClass('hide'); */
		$('a.back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 'slow');
				return false;
		});
		
	// start slideshow-images sortable	
	$(function() {
		$( "#slideshow-images .sortable" ).sortable({
		containment: "#slideshow-images",
		 placeholder: "ui-state-highlight",
		 
		 context: this,
		 update: function(){        
	
			// gather array values
			var newArray = new Array();
				$("input:text[name='photo']").each(function(){		
					newArray.push($(this).val());
				}); // end gather array values
				
				$("#allPhoto").empty();
				$('#allPhoto').val(newArray);
		}
	
		});
		$( ".sortable" ).disableSelection();
		});
		
	
		// start playlist-audio sortable	
	$(function() {
		$( "#playlist-audio .sortable" ).sortable({
		containment: "#playlist-audio",
		 placeholder: "ui-state-highlight",
		 
		 context: this,
		 update: function(){        
	
			// gather array values
			var newArray = new Array();
				$("input:text[name='audio']").each(function(){		
					newArray.push($(this).val());
				}); // end gather array values
				
				$("#allAudio").empty();
				$('#allAudio').val(newArray);
		}
	
		});
		$( ".sortable" ).disableSelection();
		});
		
		
		// start playlist-video sortable	
	$(function() {
		$( "#playlist-video .sortable" ).sortable({
		containment: "#playlist-video",
		 placeholder: "ui-state-highlight",
		// cursor: "move", 
		 context: this,
		 update: function(){        
	
			// gather array values
			var newArray = new Array();
				$("input:text[name='video']").each(function(){		
					newArray.push($(this).val());
				}); // end gather array values
				
				$("#allVideo").empty();
				$('#allVideo').val(newArray);
		}
	
		});
		$( ".sortable" ).disableSelection();
		});
		
	
	
	// start datepicker
	$(function() {
		$( "#areleasedate" ).datepicker({
		changeMonth: true,
		changeYear: true,
		yearRange: '1960:2060'
		});
		});	
				 

	// start tiny mce
	tinyMCE.init({
	  mode : "textareas",
	  theme : "advanced",
	  plugins : "emotions,spellchecker,advhr,insertdatetime,preview", 
	  width: '100%', 
	  height: '250',
		//forced_root_block : false,
    //force_br_newlines : false,
    //force_p_newlines : false,
	  // Theme options - button# indicated the row# only
	  theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,fontselect,fontsizeselect,formatselect",
	  theme_advanced_buttons2 : "cut,copy,paste,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,|,code,preview,|,forecolor,backcolor",
	  theme_advanced_buttons3 : "insertdate,inserttime,|,spellchecker,advhr,,removeformat,|,sub,sup,|,charmap,emotions",      
	  theme_advanced_toolbar_location : "top",
	  theme_advanced_toolbar_align : "left",
	  theme_advanced_statusbar_location : "bottom",
	  theme_advanced_resizing : true,
	  editor_selector : "mceEditor",
	  editor_deselector : "mceNoEditor"
	});


	
	//start fancybox
	$(".delete-component").fancybox({
		//href: href,//'Assets/Plugins/Upload/index.php?media_type=image',
	  autoSize : false,
		maxWidth: 500,
		//afterShow : function() {  
		//var media_type = $("#upload-album-images").attr('rel');             
		//$('#media_id').val() = media_type;
		//alert(media_type);
		//},
		scrolling   : 'no',
		maxHeight: 300,
		helpers : {
		overlay : {
			css : { 'overflow' : 'hidden' }
		}
},
		//href: 'index.php',
		transitionIn  : 'elastic',
		transitionOut : 'elastic',
		
		beforeClose: function() {
          //$('#image-insert').load('../Assets/Plugins/Media/image-insert');
					//location.reload();
					 //alert('closed');
        },
				
		//title : 'Add an album image to your page',
	  scrolling : 'yes'
		});
		
		
	//start fancybox
	$("#upload-social-icon").fancybox({
		//href: href,//'Assets/Plugins/Upload/index.php?media_type=image',
	  autoSize : false,
		maxWidth: 500,
		//afterShow : function() {  
		//var media_type = $("#upload-album-images").attr('rel');             
		//$('#media_id').val() = media_type;
		//alert(media_type);
		//},
		minHeight: 400,
		helpers : {
		overlay : {
			css : { 'overflow' : 'hidden' }
		}
},
		//href: 'index.php',
		transitionIn  : 'elastic',
		transitionOut : 'elastic',
		
		beforeClose: function() {
          //$('#image-insert').load('../Assets/Plugins/Media/image-insert');
					//location.reload();
					 //alert('closed');
        },
				
		//title : 'Add an album image to your page',
	  scrolling : 'yes'
		});
		
	$("#upload-album-images").fancybox({
		//href: href,//'Assets/Plugins/Upload/index.php?media_type=image',
	  autoSize : false,
		maxwidth: 500,
		//afterShow : function() {  
		//var media_type = $("#upload-album-images").attr('rel');             
		//$('#media_id').val() = media_type;
		//alert(media_type);
		//},
		minHeight: 400,
		helpers : {
		overlay : {
			css : { 'overflow' : 'hidden' }
		}
},
		//href: 'index.php',
		transitionIn  : 'elastic',
		transitionOut : 'elastic',
		
		beforeClose: function() {
          //$('#image-insert').load('../Assets/Plugins/Media/image-insert');
					//location.reload();
					 //alert('closed');
        },
				
		//title : 'Add an album image to your page',
	  scrolling : 'yes'
		});

$("#upload-album-audio").fancybox({
	  autoSize : false,
		maxWidth: 500,
		minHeight: 400,
		//maxHeight: 300,
		transitionIn  : 'elastic',
		transitionOut : 'elastic',
		helpers : {
		overlay : {
			css : { 'overflow' : 'hidden' }
		}
},
		//title : 'Add an album audio track to your page',
	  scrolling : 'yes'
		});


}); // end doc ready

		
		  function inHouseP() {//alert('test');
    var inHousePro = document.getElementById("produced_by_inhouse");
    if(inHousePro.checked == true)
    { 	
    document.getElementById("inHouseP").innerHTML = "P:  <?php echo INHOUSE . '<br />&nbsp;&nbsp;Other producer:'; ?>";

			inHousePro.value = '1';
	
    }
    else {
    if( inHousePro.checked == false)
    document.getElementById("inHouseP").innerHTML = "<?php echo ' P: '. INHOUSE; ?><br />&nbsp;&nbsp;Produced by:";
	
	inHousePro.value = '0';
	
    }
    }
	window.onload = inHouseP();
	
	
	
    function inHouseE() {
    var inHousePro = document.getElementById("engineered_by_inhouse");
    if(inHousePro.checked == true)
    { 	
    document.getElementById("inHouseE").innerHTML = "E: <?php echo INHOUSE . '<br />&nbsp;&nbsp;Other engineer:'; ?>";
	
			inHousePro.value = '1';
	
    }
    else {
    if( inHousePro.checked == false)
    document.getElementById("inHouseE").innerHTML = "<?php echo ' E: '. INHOUSE; ?><br />&nbsp;&nbsp;Engineered ";
	
	inHousePro.value = '0';
	
    }
    }
	window.onload = inHouseE();
	
	
	
	
    function inHouseM() {
    var inHousePro = document.getElementById("mastered_by_inhouse");
    if(inHousePro.checked == true)
    { 	
    document.getElementById("inHouseM").innerHTML = "M: <?php echo INHOUSE . '<br />&nbsp;&nbsp;Other mastering:'; ?>";
	
	inHousePro.value = '1';
	
    }
    else {
    if( inHousePro.checked == false)
    document.getElementById("inHouseM").innerHTML = "<?php echo ' M: '. INHOUSE; ?><br />&nbsp;&nbsp;Mastered ";
	
	inHousePro.value = '0';
	
    }
    }
	window.onload = inHouseM();
	
	
	
    function inHousePP() {
    var inHousePro = document.getElementById("post_production_by_inhouse");
    if(inHousePro.checked == true)
    { 	
    document.getElementById("inHousePP").innerHTML = "Post: <?php echo INHOUSE . '<br />&nbsp;&nbsp;Other Post Production:'; ?>";
	
	inHousePro.value = '1';
	
    }
    else {
    if( inHousePro.checked == false)
    document.getElementById("inHousePP").innerHTML = "<?php echo ' Post:  '. INHOUSE; ?><br />&nbsp;&nbsp;Post Production ";
	
	inHousePro.value = '0';
	
    }
    }
	window.onload = inHousePP();