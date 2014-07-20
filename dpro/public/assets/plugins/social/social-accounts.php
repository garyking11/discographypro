<div id="social-scripts1"></div>
<div id="social-scripts2"></div>
<div id="social-scripts3"></div>
<div id="social-results"></div>
<div id="social-accounts" class="bg-1">

<form id="social-form" method="post" name="social-form">         
  <input type="hidden" id="component_type" name="component_type" value="<?php echo $component; ?>" />
  <input type="hidden" id="social-action" name="social-action" value="editSocial" />
  
  
  <textarea id="allSocial" name="allSocial" class="hide"><?php echo $social['item1']; ?></textarea>

<div class="border box-round"> 

  <a class="btn media-type" id="upload-social-icon" href="#data" >Upload</a>
	<button id="edit-social" class="btn hide">Update Social</button>
  <p><a id="add-social" class="btn" >Add social URL</a></p>
  
  <select name="select-social" id="select-social" class="">
  <option value="facebook">Facebook</option>
  <option value="flickr">Flickr</option>
  <option value="youtube">Youtube</option>
  <option value="amazon">Amazon</option>
  <option value="cdbaby">CD Baby</option>
  <option value="reverbnation">Reverb Nation</option>
  <option value="soundify">Soundify</option>
  <option value="allmusic">allmusic</option>
  <option value="emusic">emusic</option>
  <option value="wikipedia">Wikipedia</option>
  </select>   
  </div><!-- end div border -->
  
</form>  
<p class="note">Paste embed code into form field<br />
(embed code only)</p>

  <div id="social-added" class="sortable">
      <?php 
      $items =   $social['item1'];
      $social_items = explode(',', $items);
      			
		  foreach ($social_items as $value) {	 
				$social_image_path = 'Assets/Plugins/Social/images/PNG/';
				
				$social_icons = array('allmusic', 'website', 'amazon', 'brightkite', 'blinklist', 'cdbaby', 'delicious', 'design_float', 'digg', 'dopplr', 'email', 'emusic', 'facebook', 'youtube', 'rhapsody', 'twitter', 'feed', 'flickr','friendfeed', 'mixx', 'myspace');
				
				foreach ($social_icons as $icon) {
					if(strpos ($value, $icon)!== false) {$this_image = 
				'<img class="social_icon clearfix" src="' . $social_image_path . $icon . '.png " alt="' . $icon . '" />';} 
				}
						
      echo 
        
      '<p class="social-item ui-state-default">' 
				 
				. $this_image 
        . '<input type="text" class="social warning" name="social" value="' . $value . '" />'
        . ' &nbsp;&nbsp;<a class="remove-social btn btn-danger btn-small"> Remove</a></p>';
      }

      ?> 
  </div><!-- end social-added -->
</div><!-- end bg-gray -->  