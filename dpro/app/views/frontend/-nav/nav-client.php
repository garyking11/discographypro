<div id="topnav">
    <ul>
    <?php
      $nav_items = array(
			'home' => 'home', 
			'details' => 'details',
			'example' => 'discography', 
			'pricing' => 'pricing', 
			'contact' => 'contact', 
			'support' => 'support' 
			);
			
					foreach ($nav_items as $key => $value) {
							echo '<li><a class="' . $key . '" href="' . $value . '">' . $key . '</a></li>';
					 
					}
    ?>
    </ul>
</div>