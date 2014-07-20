<div id="topnav">
    <ul>
    <?php
					$path = "http" . (($_SERVER['SERVER_PORT']==443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];;
			$page_name = basename($path);         // $file is set to "index.php"
			$page_name = basename($path, ".php"); // $file is set to "index"
//echo $page_name;
      $nav_items = array(
			'home' => '/', 
			'details' => 'details',
			'discography' => 'discography', 
			'pricing' => 'pricing', 			
			'support' => 'support',
			'contact' => 'contact', 
			'stack' => 'stack',  
			);
			
					foreach ($nav_items as $key => $value) { ?>
          
							<li>
              <?php if ($page_name == $key)  
								  { echo '<a class="' . $value . ' active" href="' . $value . '">' . $key . '</a>';} 
									else {
									echo '<a class="' . $value . ' " href="' . $value . '">' . $key . '</a>';} ?>
								<?php } 	?>
                </li>
					 
	 
    </ul>
</div>