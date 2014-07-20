<?php  session_start(); ?>
<!DOCTYPE html>
<head>

<!--[if lt IE 7]><html class="no-js ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js ie ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js ie ie8 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js ie ie9 lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js"> <!--<![endif]-->

    <title>discographyPro</title>
    <meta charset="utf-8">
    <?php 
		define("APPLICATION_PATH", "dpro/"); ?> 			<!-- start font-awesome -->
       
				 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

         <!-- start local css -->    
         <link type="text/css" href="<?php echo APPLICATION_PATH; ?>plugins/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo APPLICATION_PATH; ?>assets/css/barebones.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo APPLICATION_PATH; ?>site/assets/css/main.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo APPLICATION_PATH; ?>site/assets/css/local.css" rel="stylesheet" />
 
     		<link rel="stylesheet" href="<?php echo APPLICATION_PATH; ?>assets/fonts/font-awesome/css/font-awesome.min.css">
      
        <!-- Add Nivo -->
        <!--<link type="text/css" href="<?php echo APPLICATION_PATH; ?>plugins/nivo-slider/nivo-slider.css" rel="stylesheet" />  --> 
        
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
       <!--<script type="text/javascript" src="<?php echo APPLICATION_PATH; ?>plugins/cycle/jquery.cycle.all.js"></script>-->
       <script type="text/javascript" src="<?php echo APPLICATION_PATH; ?>plugins/jquery.bxslider/jquery.bxslider.min.js"></script>

   <!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
   <![endif]-->        
    
      <script type="text/javascript">
			
			$(window).load(function() {
				$('#slideshow').bxSlider({
						auto: true ,
					//	autoControls: true,
							slideWidth: 1100,
							mode: 'vertical',
							captions: true,
							minSlides: 2,
							maxSlides: 2,
							pause: 5000,
							speed: 3000,
							autoHover: true
					});
			});
			
		 </script>
</head>
