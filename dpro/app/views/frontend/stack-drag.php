<?php include 'app/backend/include/header.php'; ?>

</head>

    <div id="stack">
    
        <div class="container">
        
            <h1>Stack</h1>
            
              <div id="function-bar">
                         
                          
              	<form id="input-selections" name="input-selections" method="post">
                  <h3>Function Bar</h3>                 
                  				
                           
                      <ul class="nobullet">
													
                          <li>
                          <input id="checkbox" type="checkbox" name="checkbox" value="checkbox" class="draggable " >
                          <label for="checkbox">Editable&nbsp; </label>
                          </li>
                          
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
                  
                  <div id="left-column" class="clearfix">
                  
                  <h3>Field Options</h3>
                 
                  <i class="icon-plus"></i>
                  <div class="ui-widget-content ui-droppable draggable cloneable droppable new-section section field-icon">
                 		 <p>Drag me</p>                     
                  </div><!-- end new-section -->
                          
                  <form id="input-selections" name="input-selections" method="post">
                  
                          <div class="ui-widget-content draggable cloneable fieldDrag field-icon">
                          <label for="text"></i></label>
                          <input id="text" type="text" name="text" value="" placeholder="Text Field" />
                          </div>
                          
                          
                          <div class="ui-widget-content draggable cloneable fieldDrag field-icon">
                          <label for="textarea"><i class="icon-plus"></i></label>
                          <textarea id="textarea" placeholder="Textarea"></textarea>
                          </div>
                          
                          
                          <div class="ui-widget-content draggable cloneable fieldDrag field-icon">     
                          <label for="select-item"><i class="icon-plus"></i></label>
                          <select id="select-item" class="" name="select-item">
                              <option value="" selected >Select</option>
                              <option value="item1">Item 1</option>
                              <option value="item2">Item 2</option>
                              <option value="item3">Item 3</option>
                          </select> 
                          </div>
                           
                          <div class="ui-widget-content draggable fieldDrag field-icon">
                          <label for="radio"><i class="icon-plus"></i></label>
                          <input id="radio" type="radio" name="radio" value="radio" class="draggable " > Radio 
                          
                          </div>
                            
                          <div class="ui-widget-content draggable cloneable fieldDrag field-icon">
                          <label for="checkbox"><i class="icon-plus"></i></label>
                          <input id="checkbox" type="checkbox" name="checkbox" value="checkbox" class="draggable " > Checkbox 
                          </div>
                      
                  </form>
                  
                  </div><!-- end left-column -->
                  
                  <div id="right-column" class="clearfix sortable">
                  
                  <h3>Drag Here</h3>
                  
                 
                  <form id="test" name="test" method="post">
                  
                 <h3>Field Options</h3>
                 <div class="ui-widget-content draggable ui-droppable section field-icon">
                         <h4>Standard Set</h4>    
                                                 
                      </div><!-- end new-section -->
                  <!--<div id="right-col-panel-left">
                      
                  </div>
                  
                  <div id="right-col-panel-right clearfix ">
                  right
                  </div>  -->              
                 
                      </form>
              			
                    
                   
                  </div><!-- end right-column -->
      
      
      
      <div class="clear"></div>
