 
<!DOCTYPE html><head>
  
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
 
 
				<script>
        $(function() {
        $( ".draggable" ).draggable();
        
        $( "#droppable" ).droppable({
        drop: function( event, ui ) {
        $( this )
        .addClass( "ui-state-highlight" )
        .find( "p" )
        .html( "Dropped!" );
        }
        });
        });
        </script>
        
        
        <!-- start sortable -->
         <script>
        $(function() {
        $( ".sortable" ).sortable({
        connectWith: ".column"
        });
        $( ".portlet" ).addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
        .find( ".portlet-header" )
        .addClass( "ui-widget-header ui-corner-all" )
        .prepend( "<span class='ui-icon ui-icon-minusthick'></span>")
        .end()
        .find( ".portlet-content" );
        $( ".portlet-header .ui-icon" ).click(function() {
        $( this ).toggleClass( "ui-icon-minusthick" ).toggleClass( "ui-icon-plusthick" );
        $( this ).parents( ".portlet:first" ).find( ".portlet-content" ).toggle();
        });
        $( ".column" ).disableSelection();
        });
        </script>
        
        
        
        
        <?php include 'app/backend/include/header.php'; ?>
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
	width: 760px;
	padding:20px;
	float: right;
}

 
.portlet { margin: 0 1em 1em 0; }
.portlet-header { margin: 0.3em; padding-bottom: 4px; padding-left: 0.2em; }
.portlet-header .ui-icon { float: right; }
.portlet-content { padding: 0.4em; }
.ui-sortable-placeholder { border: 1px dotted black; visibility: visible !important; height: 50px !important; }
.ui-sortable-placeholder * { visibility: hidden; }

</style>
</head>

    
<div id="stack">
    
        <div class="container">
        
            <h1>Stack</h1>
            
              <div id="function-bar">
              	<form id="input-selections" name="input-selections" method="post">
                  <h3>top</h3>                 
                  
                      <ul class="nobullet">
          
                          <li>
                          <label for="select1"></label>
                          <select id="select1" name="select1">
                          <option value="" selected >Select Category</option>
                          <option value="item1">Item 1</option>
                          <option value="item2">Item 2</option>
                          <option value="item3">Item 3</option>
                          </select> 
                          </li>
                          
                          <li>
                          <label for="select2"></label>
                          <select id="select2" name="select2">                          
                          <option value="" selected >Select Category</option>
                          <option value="item1">Item 1</option>
                          <option value="item2">Item 2</option>
                          <option value="item3">Item 3</option>
                          </select> 
                          </li>
                          
                          <li>
                          <label for="select3"></label>
                          <select id="select3" name="select3">
                          <option value="" selected >Select Category</option>
                          <option value="item1">Item 1</option>
                          <option value="item2">Item 2</option>
                          <option value="item3">Item 3</option>
                          </select> 
                          </li>
                          
                          <li>
                          <label for="select4"></label>
                          <select id="select4" name="select4">
                          <option value="" selected >Select Category</option>
                          <option value="item1">Item 1</option>
                          <option value="item2">Item 2</option>
                          <option value="item3">Item 3</option>
                          </select> 
                          </li>
                          
                      </ul>     
                      
                      </form>         
                  </div>
                  
                  <div id="left-column">
                  
                  <h3>left-column</h3>
                  
                  
                  <div class="portlet draggable sortable">
                  <div class="portlet-header">Text</div>
                  <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                   </div>
                   
                  <div class="portlet draggable sortable">
                  <div class="portlet-header">Textarea</div>
                  <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                  </div>
                  
                  <div class="portlet draggable sortable">
                  <div class="portlet-header">Select</div>
                  <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                  </div>
                   
                  <div class="portlet draggable sortable">
                  <div class="portlet-header">Radio</div>
                  <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                  </div> 
                  
                  <div class="portlet draggable sortable">
                  <div class="portlet-header">Checkbox</div>
                  <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                  </div>



                  <p class="ui-widget-content draggable sortable"><label for="text"></label>
                  <input id="text" type="text" name="text" value="text" placeholder="Text Field" /></p>
                  
                  
                  <p class="ui-widget-content draggable sortable"><label for="textarea"></label>
                  <textarea id="textarea" placeholder="Textarea"></textarea></p>
                  
                  
                  <p>     
                  <label for="select-item"></label>
                  <select id="select-item" class="draggable sortable" name="select-item">
                  <option value="" selected >Select</option>
                  <option value="item1">Item 1</option>
                  <option value="item2">Item 2</option>
                  <option value="item3">Item 3</option>
                  </select> 
                  </p>
                   
                  <p>
                  <label for="radio"></label>
                  <input id="radio" type="radio" name="radio" value="radio" class="draggable sortable" > Radio
									</p>
                    
                  <p>
                  <label for="checkbox"></label>
                  <input id="checkbox" type="checkbox" name="checkbox" value="checkbox" class="draggable sortable" > Checkbox<br>

                  </p>
                  
                  
                  </div><!-- end left-column -->
                  
                  <div id="right-column" class="clearfix">
                  
                  <h3>right-column</h3>
                  
                  <form id="test" name="test" method="post">
                  
                  <h4>Drag here</h4>
                  
                  <div class="ui-widget-header ui-droppable" id="droppable">
                      <p>Drop here</p>
                  
                                      
                    &nbsp;
                      
                      
                  </div><!-- end drag-container -->
                    </form>
                  </div><!-- end right-column -->
              
        </div><!-- end container -->  
        
    </div><!-- end stack -->
