<form id="image-form" method="post" name="image-form">         

<div id="slideshow-images">
    <div class="row-fluid">
        <div class="span6">
            <div id="image-results"></div>
            
            <!--<div id="image-accounts" class="bg-1"> -->
            <div id="image-scripts2"></div>
            <div id="image-scripts3"></div>
            
            <input type="hidden" id="component_type" name="component_type" value="<?php echo $component; ?>" />
            <input type="hidden" id="media-action" name="media-action" value="editImage" />
            <button id="edit-image" class="btn hide" >Update Slideshow</button>
            
            <?php 
            $image_url = dirname('Site/Assets/Images/' . $id . '/') . '/album/' . $id . '/';
            $pathToImage = $image_url;
            //echo $pathToImage;
            ?> 
        
        </div><!-- end span6 -->
        <div class="span6">
        
            <a class="btn" id="upload-album-images" href="#data" >Upload</a>
            
           <textarea id="allImage" name="allImage"><?php echo $media['item1']; ?></textarea>
           <textarea id="allImageCaption" name="allImageCaption"><?php echo $media['item2']; ?></textarea>
          
           <label for="media_type">&nbsp;</label>
              <input 
              type="hidden" 
              id="media_type" 
              name="media_type"
              value="image"
              placeholder="Media Type"> 
       
       </div><!-- end span6 -->
       </div><!-- end row-fluid (sub) -->
        
       <div class="border box-round">
       
       <p><a class="btn" id="add-image">Add selected image</a></p>
       
     <select id="select-image" name="select-image">
            
          <?php
            if ($handle = opendir($pathToImage)) {
            while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != ".." && $file != "index-imgs.php" && $file != "thumbs.db" && $file != "Thumbs.db" && $file != "thumbnails") 			{
          ?>
        <option value="<?php echo $file; ?>"><?php echo  $file; ?></option>
         <?php
            }
            }
            closedir($handle);		
            }
            else
            {echo '';}	
            ?> 
        </select>
    		
        </div><!-- end div border -->
        
        
        <div id="image-added" class="sortable">
        
          <?php 
							
							if($media['item1'] != "") {
					
              $image_items =   $media['item1'];
              $image_items = explode(',', $image_items);
       
              $caption_items =   $media['item2'];
              $caption_items = explode(',', $caption_items);
 
              $num_images = count($image_items);
              
                for($i=0; $i < $num_images; $i++)
                 
                 {
                    $image =  $image_items[$i];
                    $caption = $caption_items[$i];
                    
                        echo '<div class="image-item ui-state-default">'
                        . '<img class="thumbnail" name="selected-thumb" src="' . $image . '" />'
                        
                        // Add a caption to the image
                        . '<textarea class="image-caption" name="image-caption" maxlength="100">'  . $caption .'</textarea>'
                        . ' &nbsp;&nbsp;<a class="remove-image btn btn-danger btn-small">Remove</a>'
                        . ' <input type="text" disabled="disabled" class="image warning" name="image" value="' . $image . '" /></div>';
                     
                  }
									
							}
							
							else {
								
							}
            
           ?>
        
        </div>
        
        <div id="allImages">&nbsp;</div>
        <!--<div id="image-thumbnails"></div>-->
    
      
	</div><!-- end slideshow-images -->  
</form>