<h3>Image Library</h3>
<?php

$image_url = dirname('../../../Site/Assets/Images/') . '/Images/album/';

$pathToImage = $image_url;
//$pathToImage = $image_url;

		if ($handle = opendir($pathToImage)) {
		while (false !== ($file = readdir($handle))) {
		if ($file != "." && $file != ".." && $file != "index-imgs.php" && $file != "thumbs.db" && $file != "Thumbs.db" && $file != "thumbnails") {
		?>
		
<?php echo '<img class="thumbnail" style="height: 80px; display: inline; " src="Site/Assets/Images/album/' .  $file  .'" alt="' . $file . '" />'; ?>
 
 
		<?php
		}
		}
		closedir($handle);		
		}
		else
		{echo '';}	
		?> 