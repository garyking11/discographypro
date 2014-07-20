<?php	echo 'TEST';
if($facebook_name !== false) {$this_image = 
				'<img class="social_icon clearfix" src="Assets/Plugins/Social/images/PNG/' . 'facebook.png' . '" alt="' . 'facebook' . '" />';} 
				
				else if ($twitter_name !== false) {$this_image = 
				'<img class="social_icon clearfix" src="Assets/Plugins/Social/images/PNG/' . 'twitter.png' . '" alt="' . 'twitter ' . '" />';} 
				
				else if ($rhapsody_name !== false) {$this_image = 
				'<img class="social_icon clearfix" src="Assets/Plugins/Social/images/PNG/' . 'rhapsody.png' . '" alt="' . 'rhapsody' . '" />';} 
				
				else {$this_image = 'icon not available';}
?>