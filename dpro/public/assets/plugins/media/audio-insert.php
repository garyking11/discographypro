<form id="audio-form" method="post" name="audio-form">         

<div id="playlist-audio" class="sortable-container">
       
            <input type="hidden" id="component_type" name="component_type" value="<?php echo $component; ?>" />
            <input type="hidden" id="audio-action" name="audio-action" value="editAudio" />
             
         <?php 
            $audio_url = dirname('Site/Assets/Audio/' . $id . '/') . '/' . $component .'/' . $id . '/';
            $pathToAudio = $audio_url;
            //echo $pathToAudio;
            ?> 
           <textarea id="allAudio" name="allAudio"><?php echo $media['item3']; ?></textarea>
           <textarea id="allAudioCaption" name="allAudioCaption"><?php echo $media['item4']; ?></textarea>
          
              <input 
              type="hidden" 
              id="media_type" 
              name="media_type"
              value="Audio"
              placeholder="Media Type"> 
             
       <div class="bg-1 box-round">
       <a class="btn" id="upload-album-audio" href="#data" >Upload</a>
       <button id="edit-audio" class="btn hide" >Update Playlist</button>
       <p><a class="btn" id="add-audio">Add selected audio</a></p>
       
     <select id="select-audio" name="select-audio">
            
          <?php
            if ($handle = opendir($pathToAudio)) {
            while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != "..") 			{
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
    		
        		<div id="audio-results"></div>
            <div id="audio-scripts2"></div>
            <div id="audio-scripts3"></div>
        </div><!-- end div border -->
        
        
        <div id="audio-added" class="sortable bg-1 box-round">

        
          <?php 

				switch ($component){
      	case 'album':    
										
					if($media['item3'] != "" && $component =='album') {
					
              $audio_items =   $media['item3'];
              $audio_items = explode(',', $audio_items);
       
              $audio_caption_items =   $media['item4'];
              $audio_caption_items = explode(',', $audio_caption_items);
							
						
                for($i=0; $i < $num_audio; $i++)
                 
                 {
                    $audio =  $audio_items[$i];
                    $audio_caption = $audio_caption_items[$i];
                    
                        echo '<div class="audio-item ui-state-default">'
                        . '<p>' .  basename($audio) . '</p>'
                        
                        // Add a caption to the audio
                        . '<textarea class="audio-caption" name="audio-caption" maxlength="100">'  . $audio_caption .'</textarea>'
                        . ' &nbsp;&nbsp;<a class="remove-audio btn btn-danger btn-small">Remove</a>'
                        . ' <input type="text" disabled="disabled" class="audio warning" name="audio" value="' . $audio . '" /></div>';                  
                  }
							}
							
							else {}
				break;
				
				case 'artist':  
						?>
            
						<?php
      
            $query_params = array(
            ':id' => $_GET['id']);
            
            $media_stmt = $db->prepare("SELECT * FROM artist LEFT JOIN media ON artist.id = media.artist_id WHERE artist.id = :id");
            if ($media_stmt->execute($query_params)) {
              $media = $media_stmt->fetch();
              //echo 
              //print_r($media);
            }
            ?>
           <textarea id="allAudio" name="allAudio"><?php echo $media['item3']; ?></textarea>
           <textarea id="allAudioCaption" name="allAudioCaption"><?php echo $media['item4']; ?></textarea>
           
           <?php  
					if($media['item1'] != "") {
							$audio_items =   $media['item3'];
							$audio_items = explode(',', $audio_items);
							$caption_items =   $media['item4'];
							$caption_items = explode(',', $caption_items);
							$num_audios = count($audio_items);
								for($i=0; $i < $num_audios; $i++)
								 {
										$audio =  $audio_items[$i];
										$caption = $caption_items[$i];
							?>
                    
              <div class="audio-item ui-state-default">
                  <?php echo $component . '/' . $artist['id'] . '/' . $audio; ?>
                  
                  <!-- Add a caption to the audio -->
                  <textarea id="audio-caption" name="audio-caption"><?php echo $caption; ?></textarea>
                  &nbsp;&nbsp;<a class="remove-audio btn btn-danger btn-small">Remove</a>
                  <input type="text" disabled="disabled" class="audio warning" name="audio" value="<?php echo $audio; ?>" />
              </div>
								<?php	}
						  }	//else {}   					
				break;
				
				case 'studio':  
						?>
            
            <?php 
						
						$query_params = array(
						':id' => $_GET['id']);
						
						$media_stmt = $db->prepare("SELECT * FROM studio LEFT JOIN media ON studio.id = media.studio_id WHERE studio.id = :id");
						if ($media_stmt->execute($query_params)) {
							$media = $media_stmt->fetch();
						}
			
						?>
      
           <textarea id="allAudio" name="allAudio"><?php echo $media['item3']; ?></textarea>
           <textarea id="allAudioCaption" name="allAudioCaption"><?php echo $media['item4']; ?></textarea>           
           
           <?php  
					if($media['item1'] != "") {
							$audio_items =   $media['item3'];
							$audio_items = explode(',', $audio_items);
							$caption_items =   $media['item4'];
							$caption_items = explode(',', $caption_items);
							$num_audios = count($audio_items);
								for($i=0; $i < $num_audios; $i++)
								 {
										$audio =  $audio_items[$i];
										$caption = $caption_items[$i];
							?>
                    
              <div class="audio-item ui-state-default">
                  <?php echo $component . '/' . $studio['id'] . '/' . $audio; ?>
                  
                  <!-- Add a caption to the audio -->
                  <textarea id="video-caption" name="video-caption"><?php echo $caption; ?></textarea>
                  &nbsp;&nbsp;<a class="remove-audio btn btn-danger btn-small">Remove</a>
                  <input type="text" disabled="disabled" class="audio warning" name="audio" value="<?php echo $audio; ?>" />
              </div>
								<?php	}
						  }	//else {} 					
				break;
	
				case 'label':  
						?>
            
						<?php 
						
						$query_params = array(
						':id' => $_GET['id']);
						
						$media_stmt = $db->prepare("SELECT * FROM label LEFT JOIN media ON label.id = media.label_id WHERE label.id = :id");
						if ($media_stmt->execute($query_params)) {
							$media = $media_stmt->fetch();
						}
			
						?>
                        
           <textarea id="allAudio" name="allAudio"><?php echo $media['item3']; ?></textarea>
           <textarea id="allAudioCaption" name="allAudioCaption"><?php echo $media['item4']; ?></textarea>
           
           <?php 
					 
					  
					if($media['item1'] != "") {
							$audio_items =   $media['item3'];
							$audio_items = explode(',', $audio_items);
							$caption_items =   $media['item4'];
							$caption_items = explode(',', $caption_items);
							$num_audios = count($audio_items);
								for($i=0; $i < $num_audios; $i++)
								 {
										$audio =  $audio_items[$i];
										$caption = $caption_items[$i];
							?>
                    
              <div class="audio-item ui-state-default">
                  <?php echo $component . '/' . $label['id'] . '/' . $audio; ?>
                  
                  <!-- Add a caption to the audio -->
                  <textarea><?php echo $caption; ?></textarea>
                  &nbsp;&nbsp;<a class="remove-audio btn btn-danger btn-small">Remove</a>
                  <input type="text" disabled="disabled" class="audio warning" name="audio" value="<?php echo $audio; ?>" />
              </div>
								<?php	}
						  }	//else {}   					
				break;
				
				default: echo 'no audios selected';
							
      	} // end switch
				 
      	
				?>
             
			</div><!-- end audio-added -->
        
        <div id="allAudios">&nbsp;</div>
        <!--<div id="audio-thumbnails"></div>-->
    
       <!-- </div>-->
        
	</div><!-- end playlist-audio -->  
</form>