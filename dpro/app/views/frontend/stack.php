<?php include 'app/backend/include/header.php'; ?>

 
    <?php
    session_start();
     
    include("app/controllers/PFBC/Form.php");
   ?>


</head>

    <div id="stack">
    
        <div class="container">
        
            <h1>Stack</h1>
            
              <div id="function-bar">
                         
                          
              	<form id="input-selections" name="input-selections" method="post">
                   
                      </form>         
                  </div>
                  
                  <div id="left-column" class="clearfix">
                      
                  </div><!-- end left-column -->
                  
                  <div id="right-column" class="clearfix sortable">
                  <form id="input-selections" name="input-selections" method="post">
                  <div id="right-col-panel-left">
                     <?php
										 
										  $form = new Form("login");
											$form->addElement(new Element_HTML('<legend>Login</legend>'));
											$form->addElement(new Element_Hidden("form", "login"));
											$form->addElement(new Element_Email("Email Address:", "Email", array(
													"required" => 1
											)));
											$form->addElement(new Element_Password("Password:", "Password", array(
													"required" => 1
											)));
											$form->addElement(new Element_Checkbox("", "Remember", array(
													"1" => "Remember me"
											)));
											$form->addElement(new Element_Button("Login"));
											$form->addElement(new Element_Button("Cancel", "button", array(
											"onclick" => "history.go(-1);"
											)));
											$form->render();
											
											?>
                  </div>
                  
                  <div id="right-col-panel-right clearfix ">
                  right
                  </div>                
                 
                      </form>
              			
                    
                   
                  </div><!-- end right-column -->
      
      
      
      <div class="clear"></div>
