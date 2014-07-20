<!DOCTYPE html>
<head>
  
    <title>discographyPro</title>
    <meta charset="utf-8">
    <?php 
		define("APPLICATION_PATH", "dpro/"); ?> 			<!-- start font-awesome -->
       
				 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

         <!-- start local css -->    

        <link type="text/css" href="<?php echo APPLICATION_PATH; ?>public/assets/css/barebones.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo APPLICATION_PATH; ?>public/assets/css/main.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo APPLICATION_PATH; ?>site/assets/css/local.css" rel="stylesheet" />
 
     		<link rel="stylesheet" href="<?php echo APPLICATION_PATH; ?>public/assets/fonts/font-awesome/css/font-awesome.min.css">
      
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="<?php echo APPLICATION_PATH; ?>
        plugins/fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
        
        <link rel="stylesheet" href="<?php echo APPLICATION_PATH; ?>
        plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />				

				<link rel="stylesheet" href="<?php echo APPLICATION_PATH; ?>
        plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />   

				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>        
				<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        
				<script type="text/javascript" src="<?php echo APPLICATION_PATH; ?>assets/js/modernizr.js"></script>  
    
 <!-- start droppable -->

<style>

html {
	background: #fff;
}


#stack input[type="text"], #stack input[type="email"], #stack input[type="search"], #stack input[type="tel"], #stack input[type="file"], textarea {
    -moz-appearance: none;
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #FFFFFF;
    border-radius: 5px 5px 5px 5px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5) inset;
    color: #9D9E9E;
    display: block;
    font-size: 14px;
    font-weight: 400;
    height: 18px;
    max-width: 180px;
    outline: 0 none;
    padding: 10px 15px;
    text-shadow: 1px 1px 0 #FFFFFF;
    vertical-align: middle;
    width: 100%;
}

#stack label {/*display: block;*/ }

#stack {
	background: #fafafa;
	position: relative;
	min-height: 1000px;
}

#stack ul {
	padding: 0;
	
}



#function-bar {
	background: #eaeaea;
	width: 1060px;
	height: 100px;
	padding:20px;
	}

#function-bar li {
	display: inline;
	height: 30px;
}

#left-column {
	position: relative;
	background: #cacaca;
	width: 260px;
	padding:20px;
	float: left;
}

#right-column {
	background: #dadada;
	width: 750px;
	padding:20px;
	float: right;
}


#right-column #right-col-panel-left {
	width: 200px; 
	background: #999;
	float: left;
	}

#right-column #right-col-panel-right {
	width: 200px;
	float: right;
	background: #333;
	}



#right-column .ui-widget-content {
    height: 100%;
		min-height: 61px;
		min-width:727px;
}

#right-column .ui-widget-content > div {
    height: 100%;
		min-height: 61px;
		min-width:500px;
}


.ui-widget-content {
  height: 61px;
	background: none;
	border: none;
}


.ie8 {
	/*width:300px;*/
}


#stack #left-column div {
	width: 250px; 
	display: block;
	border: 1px solid #999;
}

#stack #right-column div {
	width: 300px;
	float: left;
	padding: 10px;
	border: 1px solid #999;
	
}

#stack .section-innner {
	min-height: 60px;
}

.field-icon {
	width:300px;
	max-width: 250px;
	background: #fff;
	padding: 10px;
	border-top: 1px solid #999;
	
}
 
.ui-widget-content {
  color: #222222;
}

</style>

 
  <script>
$(function() {
		//$( "#left-column" ).accordion();
		
		$( "#left-column div" ).draggable({
				appendTo: "body",
				helper: "clone"
		});

$( "#right-column" )/*.droppable({
	activeClass: "ui-state-default",
	hoverClass: "ui-state-hover",
	accept: ":not(.ui-sortable-helper)",
	drop: function( event, ui ) {
			$( this ).find( ".placeholder" ).remove();
			$( "<div></div>" ).text( ui.draggable.text() ).appendTo( this );
		}
			})*/.sortable({
				//containment: "section",
				cursor: "move",
				items: "div:not(.placeholder)",
				sort: function() {
// gets added unintentionally by droppable interacting with sortable
// using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
					$( this ).removeClass( "ui-state-default" );
					
				}
		});
  });


/*******/

	$(document).ready(function(){
	//	$(".objectDrag").draggable({helper:'clone'});  
//$( ".section" ).draggable();
		$(".section").droppable({
			accept: ".fieldDrag",
			//hoverClass: "ui-state-active",
			drop: function(event,ui){-
					console.log("Item was Dropped");
					$(this).append($(ui.draggable).clone());
					//alert('dropped');
					//$(this).append($(ui.draggable).clone());
					$('#right-column div').removeClass( "new-section" );
					//$('#right-column div').removeClass( "fieldDrag" );
					$('#right-column div i ').removeClass("icon-plus");
					$('#right-column div i ').addClass("icon-sort-by-attributes-alt ");
					//$('#right-column div').addClass( "section" );
					//$('#right-column div i ').removeClass("icon-plus");
					//$('#right-column div i ').addClass("icon-sort-by-attributes-alt ");
					
				}
		});


$(" #right-column").droppable({
			accept: ".new-section",
			//hoverClass: "ui-state-active",
			drop: function(event,ui){-
					console.log("Item was Dropped");
					$(this).append($(ui.draggable).clone());
					//alert('dropped');
					//$(this).append($(ui.draggable).clone());
					//$('#right-column div').removeClass( "new-section" );
					//$('#right-column div').removeClass( "fieldDrag" );
					$('#right-column div i ').removeClass("icon-plus");
					$('#right-column div i ').addClass("icon-sort-by-attributes-alt ");
					//$('#right-column div').addClass( "section" );
					//$('#right-column div i ').removeClass("icon-plus");
					//$('#right-column div i ').addClass("icon-sort-by-attributes-alt ");
					
				}
		});		
	/*$("#right-column").droppable({
			accept: ".new-section",
			//hoverClass: "ui-state-active",
			drop: function(event,ui){-
					console.log("Section Item was Dropped");
					
					$(this).append($(ui.draggable).clone());
					//$('#right-column div').addClass( "section" );
					$('#right-column div').removeClass( "new-section" );
					
					//$('#right-column div.section').css("list-style", "none");
					//$('#right-column div i ').removeClass("icon-plus");
					//$('#right-column div i ').addClass("icon-sort-by-attributes-alt ");
					
				}
		});*/
	});
	
	</script>

