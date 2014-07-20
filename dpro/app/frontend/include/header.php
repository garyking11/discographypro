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
        <link type="text/css" href="<?php echo APPLICATION_PATH; ?>public/assets/css/barebones.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo APPLICATION_PATH; ?>public/assets/css/main.css" rel="stylesheet" />
        <link type="text/css" href="<?php echo APPLICATION_PATH; ?>site/assets/css/local.css" rel="stylesheet" />
 
     		<link rel="stylesheet" href="<?php echo APPLICATION_PATH; ?>public/assets/fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" 
        href="<?php echo APPLICATION_PATH; ?>plugins/jQuery.jPlayer/skin/pink.flag/jplayer.pink.flag.css"  />
        <!-- Add Nivo -->
        <!--<link type="text/css" href="<?php echo APPLICATION_PATH; ?>plugins/nivo-slider/nivo-slider.css" rel="stylesheet" />  --> 
        
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="<?php echo APPLICATION_PATH; ?>
        plugins/fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
        
        <link rel="stylesheet" href="<?php echo APPLICATION_PATH; ?>
        plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />				

				<link rel="stylesheet" href="<?php echo APPLICATION_PATH; ?>
        plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />   
				
        <link rel="stylesheet" href="<?php echo APPLICATION_PATH; ?>plugins/modern-slide-in/modern-slide-in/css/sequencejs-theme.modern-slide-in.css" />
        
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>        
				<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        
				<script type="text/javascript" src="<?php echo APPLICATION_PATH; ?>assets/js/modernizr.js"></script>
       <!--<script type="text/javascript" src="<?php echo APPLICATION_PATH; ?>plugins/cycle/jquery.cycle.all.js"></script>-->
       <script type="text/javascript" src="<?php echo APPLICATION_PATH; ?>plugins/jquery.bxslider/jquery.bxslider.min.js"></script>
      
       
       <!-- <script src="<?php echo APPLICATION_PATH; ?>plugins/modern-slide-in/modern-slide-in/scripts/jquery.sequence-min.js"></script>
<script src="<?php echo APPLICATION_PATH; ?>plugins/modern-slide-in/modern-slide-in/sequencejs-options.modern-slide-in.js"></script>-->


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
  <!-- Scrolling Paralax -->     

<script type="text/javascript" src="<?php echo APPLICATION_PATH; ?>plugins/scrolling-parallax/jquery.scrolling-parallax.js"></script>
<!-- Copyright (c) 2009 Jon Raasch (http://jonraasch.com/)

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

    Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
    Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY JON RAASCH 'AS IS' AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL JON RAASCH OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. -->
<script type="text/javascript">

$(function() {
    
    $.scrollingParallax('dpro/plugins/scrolling-parallax/bd10.jpg', {
        bgHeight : '250%',
        staticSpeed : .25,
				 loopIt : true,
				 bgRepeat: true,
        staticScrollLimit : false
    });   
});

</script>
</head>
