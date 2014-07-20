<form id="video-form" method="post" name="video-form">         

<div id="playlist-video" class="sortable-container">
            
      <input type="hidden" id="component_type" name="component_type" value="<?php echo $component; ?>" />
      <input type="hidden" id="video-action" name="video-action" value="editVideo" />
       
      <?php 
      $video_url = dirname('Site/Assets/Video/' . $id . '/') . '/' . $component .'/' . $id . '/';
      $pathToVideo = $video_url;
      ?> 
    
     <textarea id="allVideo" name="allVideo"><?php echo $media['item5']; ?></textarea>
     <textarea id="allVideoCaption" name="allVideoCaption"><?php echo $media['item6']; ?></textarea>
    
    
        <input 
        type="hidden" 
        id="media_type" 
        name="media_type"
        value="Video"
        placeholder="Media Type"> 
                
       <div class="bg-1 box-round">
       
       <a class="btn" id="upload-album-video" href="#data" >Upload</a>
       <button id="edit-video" class="btn hide" >Update Playlist</button>
       <p><a class="btn" id="add-video">Add new embed code</a></p>
       
     <!--<select id="select-video" name="select-video">
            
          <?php
          //  if ($handle = opendir($pathToVideo)) {
          //  while (false !== ($file = readdir($handle))) {
          //  if ($file != "." && $file != "..") 			{
          ?>
        <option value="<?php //echo $file; ?>"><?php //echo  $file; ?></option>
         <?php
        //    }
        //    }
        //   closedir($handle);		
        //    }
        //    else
        //    {echo '';}	
            ?> 
        </select>-->
    		<div id="video-results"></div>
        <div id="video-scripts2"></div>
        <div id="video-scripts3"></div>
        </div><!-- end div bg-1 -->
        
        
        <div id="video-added" class="sortable bg-1 box-round">
        
          <?php 
							
							if($media['item5'] != "") {
					
              $video_items =   $media['item5'];
              $video_items = explode(',', $video_items);
       
              $video_caption_items =   $media['item6'];
              $video_caption_items = explode(',', $video_caption_items);
 
              $num_video = count($video_items);
              
                for($i=0; $i < $num_video; $i++)
                 
                 {
                    $video =  $video_items[$i];
                    $video_caption = $video_caption_items[$i];
                    
                        echo '<div class="video-item ui-state-default">'
                        //. '<p>' .  basename($video) . '</p>'
                        
                        // Add a caption to the video
												. '<p>Paste video embed code</p>'
												. '<textarea class="video-embed" name="video-embed">' . $video . '</textarea>'
												. '<p>Video caption</p>'
                        . '<textarea class="video-caption" name="video-caption">'  . $video_caption .'</textarea>'
                        . ' &nbsp;&nbsp;<a class="remove-video btn btn-danger btn-small">Remove</a></div>';
                       // . ' <input type="text" disabled="disabled" class="video warning" name="video" value="' . $video . '" />';
                     
                  }
									
							}
							
							else {
								
							}
            
           ?>
        
        </div>
        
        <!--<div id="allVideo">&nbsp;</div>-->
        <!--<div id="video-thumbnails"></div>-->
    
      
	</div><!-- end playlist-video -->  
</form>