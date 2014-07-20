<?php include 'app/frontend/include/header.php'; ?>

    <script type="text/javascript" src="/dpro/plugins/ajax-mailer/ajax-mailer.js"></script>
    <script type="text/javascript" src="/dpro/plugins/ajax-mailer/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/dpro/plugins/ajax-mailer/additional-methods.js"></script>
		<link rel="stylesheet" type="text/css" href="/dpro/plugins/ajax-mailer/style.css" />

</head>
<body class="support">
    
    <div id="wrap">
            
        <header id="hd">
            
           <div class="container">
             
                 <div class="row">
                    
                    <a href="/"><img src="<?php echo APPLICATION_PATH; ?>site/assets/images/common/logo.png" alt="disocgraphyPro" /></a>                                  
                   <div class="navtop">
                       
                      <nav class="top-client"><?php include 'app/frontend/nav/nav-client.php'; ?></nav>
                      
                      <nav class="top-admin"><?php //if($logged_in) {include 'APPLICATION_PATH. ' /app/backend/nav/nav-admin.php';} ?></nav>
                                                                
                   </div><!-- end navtop -->
             
         		 		</div><!-- end row -->
             
            </div><!--end container -->             
         
        </header><!-- #hd -->
            
        <div id="bd"> 

          <section id="image-banner">
              <div class="container">
                  <div class="row clearfix">
                     
                     <!-- <div id="slideshow" style="max-width: 1100px;"> -->
                       <!--
                          <div class="hp-slide">
                          <h3>For Producers/Engineers<br />
                          Studio Owners/Musicians</h3>
                          <p>Show your production, compositions and studio portfolio</p>
                          </div>
                          
                          <div class="hp-slide">
                          <h3><i class="icon-microphone"></i>  Multimedia</h3>
                          <p>Embed audio (SoundCloud, ReverbNation, mp3)<br /> 
                          		Embed video (YouTube/Vimeo)
                          </p>
                          </div>
                          
                          <div class="hp-slide">
                          <h3><i class="icon-search"></i> Searchable</h3>
                          <p>Search by project name, artist, studio, agency</p>
                          </div>   
                           
                          <div class="hp-slide">
                          <h3><i class="icon-css3"></i> Responsive design</h3>
                          <p> Displays properly in browser, tablet and mobile devices</p>
                          </div>    
                          
                          <div class="hp-slide">
                          <h3><strong>UI</strong> Intuitive user interface</h3>
                          <p>Easy to use dashboard</p>
                          </div>         
                              
                          <div class="hp-slide">
                          <h3>Social links manager</h3>
                          <p>Built in social management tool<br>
                            <i class="icon-facebook"></i>
                            <i class="icon-youtube"></i>
                            <i class="icon-music"></i> 
                            <i class="icon-pinterest"></i> 
                            <i class="icon-dropbox"></i>
                            <i class="icon-github"></i>
                            <i class="icon-google-plus-sign"></i>
                            <i class="icon-instagram"></i>
                            <i class="icon-linkedin"></i>
                            <i class="icon-skype"></i>
                            <i class="icon-yelp"></i>
                            <i class="icon-cloud"></i>
                            <i class="icon-flickr"></i>
                            <i class="icon-tumblr"></i>
                            </p>
                          </div>    
                
                	</div>--> <!--end slideshow -->
                       
                	</div><!-- end row -->
              </div><!-- end container -->        
          </section><!-- image-banner-->        
   
        
        <section id="section-one">
            <div class="container">         
            <h1>Support</h1>   				
                <div class="row clearfix">
                  
                    <div class="span6">
                     
                		</div><!-- end span -->
                    
                     <div class="span6">
                   	&nbsp;
                		</div> 
                
                </div><!-- end row -->
            </div><!-- end container --> 
        </section><!-- end section-one -->
        
            
        <section id="section-two">
            <div class="container">
                  
                <div class="row clearfix">
                    <div class="span6">
                         
                     <h3>Author</h3>
                     <ul class="nobullet">
                     <li><strong>Gary King</strong></li>
                     <li>Studio owner/producer/engineer, musican, web developer</li>
                     </ul> 
                                           
                     <h3>The Team</h3>
                     <ul class="nobullet">
                     <li>Developers: Gary King, <a href="http://heroicdesigns.com/">Nick Glenn</a></li>
                     </ul> 
 
                     <h3>Additional Credits</h3>
                        
                     <ul class="nobullet">
                     <li>Page photos: Gary King, Jesse Diaz, Americanvirus (Jonas Seaman)</li>
                     </ul>

                </div><!-- end span -->                          
                <div class="span6">
                    
                  &nbsp;
                </div> 
                
                    
             </div><!-- end row -->                  
            </div><!-- end container --> 
        </section><!-- end section-two -->
           
           <section id="section-three">
              <div class="container">
   
                  <div class="row clearfix">
                      <div class="span6">
 
                  		<ul class="nobullet">
                      <li><i class="icon-envelope-alt"></i> <a href="#">Contact Support</a></li>

                      </ul>
                      </div>
                      
                      <div class="span6">

                       &nbsp;
                          
                      </div><!-- end span -->
                  </div><!-- end row -->                
              </div><!-- end container --> 
           </section><!-- end section-three -->
            
        </div><!-- #bd -->

   </div><!-- #wrap -->
  
<footer>      
<?php include 'app/frontend/include/footer.php'; ?>
</footer><!-- ./footer -->

</body>
</html>