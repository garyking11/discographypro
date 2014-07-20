  
<a class="btn" href="#">
  <i class="icon-repeat"></i> Reload</a>
<a class="btn btn-small btn-info" href="#">
  <i class="icon-info-sign"></i> Info</a>
<a class="btn btn-danger" href="#">
  <i class="icon-trash icon-small"></i></a>
<a class="btn btn-small" href="#">
  <i class="icon-cog"></i> Settings</a>


<form method="post" action=""> 
  
  <h2>Field config example (Separate config page)</h2>

  <div class="row-fluid">	
      <div class="span3">
          
          <h4>Set Default Section Fields (Album)</h4>
          <a class="complete" href="#"><i class="icon-plus"></i>Add new section</a>
          
          <ol>
          <li>Select column?</li>
          <li>Drag to position?</li>
          <li>Select form type</li>
          <li>Sortable</li>
          </ol>
               
          <a class="complete" href="#">Restore defaults</a>
						<?php
						// start section loop
							$sections = array('section 0' => 'SECTION EXAMPLE 0 Long width testing', 'section 1' => 'SECTION 1');
							
							foreach($sections as $key => $value) {
								$sectionname = strtolower(str_replace(" ", "-" , $value));
					 ?>
          
          <fieldset class="section">
              <div class="section-name border box-round"> 
                  <input type="checkbox">&nbsp;&nbsp;<?php echo $value; ?>
                   
                      <div>
                          <a href="#" rel="section-trash">&nbsp;&nbsp;<i class="icon-trash"></i></a>  
                          <span class="slideToggle"> <i class="icon-edit"></i></span>                        
                          
                          <div class="slider">
                              <input type="text" value="<?php echo $value; ?>"  placeholder="Section name" />
                              <a class="toggle-close" rel="add-section" href="#"><i class="icon-ok"></i></a> 
                              <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
                          </div><!-- end slider -->
                      </div>
               </div>
       				
              <p><a rel="add-field-toggle" href="#"><i class="icon-plus"></i>Add a field</a></p>
              
              <div class="slider">
             
              <h5>Select type</h5>
                  <select name="select-form">
                  <option value="text"> Text</option>
                  <option value="textarea"> Textarea</option>
                  <option value="select"> Select</option>
                  <option value="multiple-select"> Multiple Select</option>
                  <option value="checkbox"> Checkbox</option>
                  <option value="radio"> Radio</option>
                  </select>
              &nbsp;&nbsp;<a class="toggle-close" rel="add-field" href="#"><i class=" icon-ok"></i></a>
              <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
              
              </div>
              
 							<div class="sortable-container box-round">
              
              <ul class="sortable">
            
            <div id="load-it-here">
            <?php 
              // start field loop
							$i = 0;
              $fields  = array('FIELD 0 Testing long field name, even longer to test thoroughly','FIELD 1', 'FIELD 2', 'FIELD3');
									
							
							print_r($field_array );
							
             ?>
						  </div>	
              
              <?php	
                  foreach($fields as $key => $value) {
                    $fieldname = strtolower(str_replace(" ", "-" , $value));
                    
               ?>
    					<li class="box-round">
              	
                <span>
                    <label for="<?php echo $fieldname; ?>">
                    
                    <input 
                    id="<?php echo $fieldname; ?>" 
                    name="<?php echo $fieldname; ?>" 
                    type="checkbox">&nbsp;
                    <?php echo $value; ?> 
                        
                    </label>

                    <a href="#" rel="field-trash" class="toggle-close">&nbsp;&nbsp;<i class="icon-trash"></i></a>                  
                    <span class="slideToggle"> <i class="icon-edit"></i></span>
                    

                <div class="slider">
                    <input type="text"
                    id="<?php echo $fieldname; ?>"  
                    name="<?php echo $fieldname; ?>" 
                    value="<?php echo $value; ?>" 
                    placeholder="Field name" />
                    
                    <a class="toggle-close" rel="update-field" href="#"><i class=" icon-ok"></i></a>
                    <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
                </div> 
                </span>   
                 
              </li>
              
              <?php } ?>
              
              </ul>
              </div><!-- end sortable-container -->
                </fieldset>
 				  <?php } ?>

          </div><!-- end col span -->	 
          
          <div class="span3">
          
          <h4>Set Default Section Fields (Artist)</h4>
          <a class="complete" href="#"><i class="icon-plus"></i>Add new section</a>

          <ol>
          <li>Select column?</li>
          <li>Drag to position?</li>
          <li>Select form type</li>
          <li>Sortable</li>
          </ol>
              
           
              <a class="complete" href="#">Restore defaults</a>

          <?php 
					// start section loop
							$sections = array('section 0' => 'ANOTHER SECTION 0', 'section 1' => 'ALSO A SECTION 1');
							
							foreach($sections as $key => $value) {
								$sectionname = strtolower(str_replace(" ", "-" , $value));
								
					 ?>
           
           <fieldset class="section"> 
           
              <div class="section-name border box-round"> 
                  <input type="checkbox">&nbsp;&nbsp;<?php echo $value; ?>
                   
                      <div>
                          <a href="#" rel="section-trash">&nbsp;&nbsp;<i class="icon-trash"></i></a>  
                          <span class="slideToggle"> <i class="icon-edit"></i></span>                        
                          
                          <div class="slider">
                              <input type="text" value="<?php echo $value; ?>"  placeholder="Section name" />
                              <a class="toggle-close" rel="add-section" href="#"><i class="icon-ok"></i></a> 
                              <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
                          </div><!-- end slider -->
                      </div>
               </div>

              <p><a rel="add-field-toggle" href="#"><i class="icon-plus"></i>Add a field</a></p>
              
              <div class="slider">
             
              <h5>Select type</h5>
                  <select name="select-form">
                  <option value="text"> Text</option>
                  <option value="textarea"> Textarea</option>
                  <option value="select"> Select</option>
                  <option value="multiple-select"> Multiple Select</option>
                  <option value="checkbox"> Checkbox</option>
                  <option value="radio"> Radio</option>
                  </select>
              &nbsp;&nbsp;<a class="toggle-close" rel="add-field" href="#"><i class=" icon-ok"></i></a>
              <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
              
              </div>
                                            
 							<div class="sortable-container box-round">
              <ul class="sortable">
              
            <?php 
              // start field loop
                  $fields = array('field 0' => 'FIELD 0', 'field 1' => 'FIELD 1', 'field 2' => 'FIELD 2', 'field 3' => 'FIELD3');
                  
                  foreach($fields as $key => $value) {
                    $fieldname = strtolower(str_replace(" ", "-" , $value));
                    
               ?>
    					<li class="box-round">
                <span>
                    <label for="<?php echo $fieldname; ?>">
                    
                    <input 
                    id="<?php echo $fieldname; ?>" 
                    name="<?php echo $fieldname; ?>" 
                    type="checkbox">&nbsp;
                    <?php echo $value; ?> 
                        
                    </label>

                    <a href="#" rel="field-trash" class="toggle-close">&nbsp;&nbsp;<i class="icon-trash"></i></a>                  
                    <span class="slideToggle"> <i class="icon-edit"></i></span>
                    

                    <div class="slider">
                        <input type="text"
                        id="<?php echo $fieldname; ?>"  
                        name="<?php echo $fieldname; ?>" 
                        value="<?php echo $value; ?>" 
                        placeholder="Field name" />
                        
                        <a class="toggle-close" rel="update-field" href="#"><i class=" icon-ok"></i></a>
                        <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
                    </div> 
                </span>   
              </li>
              
              <?php } ?> 
               
              </ul>
              </div><!-- end sortable-container --> 
              
 					</fieldset>
          
 				  <?php } ?>
         
          </div><!-- end col span -->	      
          <div class="span3">
          
          
          
          <h4>Set Default Section Fields (Studio)</h4>
          <a class="complete" href="#"><i class="icon-plus"></i>Add new section</a>

          <ol>
          <li>Select column?</li>
          <li>Drag to position?</li>
          <li>Select form type</li>
          <li>Sortable</li>
          </ol>
              
           
              <a class="complete" href="#">Restore defaults</a>


         <?php 
					// start section loop
							$sections = array('section 0' => 'THIS SECTION 0', 'section 1' => 'THAT SECTION 1');
							
							foreach($sections as $key => $value) {
								$sectionname = strtolower(str_replace(" ", "-" , $value));
								
					 ?>
          <fieldset class="section">

          
              <div class="section-name border box-round"> 
                  <input type="checkbox">&nbsp;&nbsp;<?php echo $value; ?>
                   
                      <div>
                          <a href="#" rel="section-trash">&nbsp;&nbsp;<i class="icon-trash"></i></a>  
                          <span class="slideToggle"> <i class="icon-edit"></i></span>                        
                          
                          <div class="slider">
                              <input type="text" value="<?php echo $value; ?>"  placeholder="Section name" />
                              <a class="toggle-close" rel="add-section" href="#"><i class="icon-ok"></i></a> 
                              <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
                          </div><!-- end slider -->
                      </div>
               </div>
 
              <p><a rel="add-field-toggle" href="#"><i class="icon-plus"></i>Add a field</a></p>
              
              <div class="slider">
             
              <h5>Select type</h5>
                  <select name="select-form">
                  <option value="text"> Text</option>
                  <option value="textarea"> Textarea</option>
                  <option value="select"> Select</option>
                  <option value="multiple-select"> Multiple Select</option>
                  <option value="checkbox"> Checkbox</option>
                  <option value="radio"> Radio</option>
                  </select>
              &nbsp;&nbsp;<a class="toggle-close" rel="add-field" href="#"><i class=" icon-ok"></i></a>
              <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
              
              </div>
                               
 							<div class="sortable-container box-round">
              <ul class="sortable">
              
            <?php 
              // start field loop
                  $fields = array('field 0' => 'FIELD 0', 'field 1' => 'FIELD 1', 'field 2' => 'FIELD 2', 'field 3' => 'FIELD3');
                  
                  foreach($fields as $key => $value) {
                    $fieldname = strtolower(str_replace(" ", "-" , $value));
                    
               ?>
    					<li class="box-round">
                <span>
                    <label for="<?php echo $fieldname; ?>">
                    
                    <input 
                    id="<?php echo $fieldname; ?>" 
                    name="<?php echo $fieldname; ?>" 
                    type="checkbox">&nbsp;
                    <?php echo $value; ?> 
                        
                    </label>

                    <a href="#" rel="field-trash" class="toggle-close">&nbsp;&nbsp;<i class="icon-trash"></i></a>                  
                    <span class="slideToggle"> <i class="icon-edit"></i></span>
                    

                    <div class="slider">
                        <input type="text"
                        id="<?php echo $fieldname; ?>"  
                        name="<?php echo $fieldname; ?>" 
                        value="<?php echo $value; ?>" 
                        placeholder="Field name" />
                        
                        <a class="toggle-close" rel="update-field" href="#"><i class=" icon-ok"></i></a>
                        <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
                    </div> 
                </span>   
              </li>
              
              <?php } ?>
                  
              </ul>
              </div><!-- end sortable-container -->
               
 					</fieldset>
          
 				  <?php } ?>
           
          </div><!-- end col span -->	 
          
          <div class="span3">
           
          <h4>Set Default Section Fields (Agency)</h4>
          
          <a class="complete" href="#"><i class="icon-plus"></i>Add new section</a>
          
          <ol>
          <li>Select column?</li>
          <li>Drag to position?</li>
          <li>Select form type</li>
          <li>Sortable</li>
          </ol> 
          
              <a class="complete" href="#">Restore defaults</a>


         <?php 
					// start section loop
							$sections = array('section 0' => 'MY SECTION 0', 'section 1' => 'YOUR SECTION 1');
							
							foreach($sections as $key => $value) {
								$sectionname = strtolower(str_replace(" ", "-" , $value));
								
					 ?>
           
          <fieldset class="section">
          
              <div class="section-name border box-round"> 
                  <input type="checkbox">&nbsp;&nbsp;<?php echo $value; ?>
                   
                      <div>
                          <a href="#" rel="section-trash">&nbsp;&nbsp;<i class="icon-trash"></i></a>  
                          <span class="slideToggle"> <i class="icon-edit"></i></span>                        
                          
                          <div class="slider">
                              <input type="text" value="<?php echo $value; ?>"  placeholder="Section name" />
                              <a class="toggle-close" rel="add-section" href="#"><i class="icon-ok"></i></a> 
                              <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
                          </div><!-- end slider -->
                      </div>
               </div>

              <p><a rel="add-field-toggle" href="#"><i class="icon-plus"></i>Add a field</a></p>
              
              <div class="slider">
             
              <h5>Select type</h5>
                  <select name="select-form">
                  <option value="text"> Text</option>
                  <option value="textarea"> Textarea</option>
                  <option value="select"> Select</option>
                  <option value="multiple-select"> Multiple Select</option>
                  <option value="checkbox"> Checkbox</option>
                  <option value="radio"> Radio</option>
                  </select>
              &nbsp;&nbsp;<a class="toggle-close" rel="add-field" href="#"><i class=" icon-ok"></i></a>
              <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
              
              </div>
                             
 							<div class="sortable-container box-round">
              <ul class="sortable">
              
            <?php 
              // start field loop
                  $fields = array('field 0' => 'FIELD 0', 'field 1' => 'FIELD 1', 'field 2' => 'FIELD 2', 'field 3' => 'FIELD3');
                  
                  foreach($fields as $key => $value) {
                    $fieldname = strtolower(str_replace(" ", "-" , $value));
                    
               ?>
    					<li class="box-round">
                <span>
                    <label for="<?php echo $fieldname; ?>">
                    
                    <input 
                    id="<?php echo $fieldname; ?>" 
                    name="<?php echo $fieldname; ?>" 
                    type="checkbox">&nbsp;
                    <?php echo $value; ?> 
                        
                    </label>

                    <a href="#" rel="field-trash" class="toggle-close">&nbsp;&nbsp;<i class="icon-trash"></i></a>                  
                    <span class="slideToggle"> <i class="icon-edit"></i></span>
                    

                    <div class="slider">
                        <input type="text"
                        id="<?php echo $fieldname; ?>"  
                        name="<?php echo $fieldname; ?>" 
                        value="<?php echo $value; ?>" 
                        placeholder="Field name" />
                        
                        <a class="toggle-close" rel="update-field" href="#"><i class=" icon-ok"></i></a>
                        <a class="toggle-close" href="#"><i class="icon-minus"></i></a>  
                    </div> 
                </span>   
              </li>
              
              <?php } ?>
                  
              </ul>
              </div><!-- end sortable-container --> 
 					</fieldset>
 				  <?php } ?>
          
          
          
        
      </div><!-- end col span -->	 
    	</div><!-- end row-fluid -->

      </form>