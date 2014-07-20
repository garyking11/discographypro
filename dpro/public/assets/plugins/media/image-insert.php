<form id="image-form" method="post" action="/image/edit/<?php echo $id; ?>" name="image-form">         

<div id="slideshow-images" class="sortable-container">

<?php

$id = substr( $item_url, strrpos( $item_url, '/' )+1 );

?>  
<input type="text" id="item-id" name="item-id" value="<?php echo $id; ?>" />
<input type="hidden" id="component_type" name="component_type" value="<?php echo $component; ?>" />
<input type="hidden" id="media-action" name="media-action" value="editImage" />
<input type="hidden" id="media_type" name="media_type" value="image" placeholder="Media Type"> 

<div id="image-data"></div>
     
		<?php $image_url = dirname('../../site/assets/images/' . $id . '/') . '/' . $component .'/' . $id . '/'; ?> 
       
     <div class="bg-1 box-round">
       
     <button id="edit-image" class="btn hide" >Update Image Gallery</button>
     
     <p id="images-select"><a class="btn" id="add-image">Add selected image</a></p>
          
          <select id="select-image" name="select-image">
              
            <?php       
						        
              echo $_GET['upload']; 
							
              if($_GET['upload'] == 'true') {
                  
                  $pathToImage = dirname('../../../site/assets/images/' . $id . '/') . '/' . $component .'/' . $id . '/';	
              
              }
              
              else {
                
              		$pathToImage = $image_url;
              
              }
              
              if ($handle = opendir($pathToImage)) {
                
									while (false !== ($file = readdir($handle))) {
										
									if ($file != "." && $file != ".." && $file != "DS_Store" && $file != "thumbs.db" && $file != "Thumbs.db" && $file != "thumbnails")
									
									{
                  
           ?>
            
            <option value="<?php echo $file; ?>"><?php echo  $file; ?></option>
            
           <?php
              }
							
              }
							
              closedir($handle);		
							
              }
							
              else
							
              {
								echo '';
								
							}	
							
              ?> 
              
          </select>
          
          <div id="image-results"></div>
          <div id="image-scripts2"></div>
          <div id="image-scripts3"></div>
          
      </div><!-- end div bg-1 --> 
      
    <div id="image-added" class="sortable bg-1 box-round"> 
    
    <?php
    switch ($component){
      case 'album':    
    ?>       
    <textarea id="allImage" name="allImage"><?php echo $media['item1']; ?></textarea>
    <textarea id="allImageCaption" name="allImageCaption"><?php echo $media['item2']; ?></textarea>
    
    
    <?php					
    
    
    //echo $id;
    //	 $media =  ORM::for_table('album')->join('media', array('album.id', '=', 'media.album_id'))->find_one($id);
    //print_r($media);
    //echo $media['item1'];
    /*  $query_params = array(
    ':id' => $_GET['id']);
    
    $stmt = $db->prepare("SELECT * FROM album WHERE id = :id");
    if ($stmt->execute($query_params)) {
    $artist = $stmt->fetch();
    }
    
    $media_stmt = $db->prepare("SELECT * FROM album LEFT JOIN media ON album.id = media.album_id WHERE album.id = :id");
    if ($media_stmt->execute($query_params)) {
    $media = $media_stmt->fetch();
    }*/
     
        if($media['item1'] != "") {
            $image_items =   $media['item1'];
            $image_items = explode(',', $image_items);
            $caption_items =   $media['item2'];
            $caption_items = explode(',', $caption_items);
            $num_images = count($image_items);
            
            //	echo  $media['item1'] . ' ~ media test';
              
              for($i=0; $i < $num_images; $i++)
               {
                  $image =  $image_items[$i];
                  $caption = $caption_items[$i];
                  
                    // $image . 'test';
            ?>
                  
            <div class="image-item ui-state-default">
                <img class="thumbnail" name="selected-thumb" 
                src="../../site/assets/images/<?php echo $component . '/' . $id . '/' . $image; ?>" />
                
                <!-- Add a caption to the image -->
                <textarea id="image-caption" name="image-caption"><?php echo $caption; ?></textarea>
                &nbsp;&nbsp;<a class="remove-image btn btn-danger btn-small">Remove</a>
                <input type="text" disabled="disabled" class="image warning" name="image" value="<?php echo $image; ?>" />
            </div>
              <?php	}
            }	//else {}    
      break;
      
      case 'artist':  
    ?>       
    <textarea id="allImage" name="allImage"><?php echo $media['item1']; ?></textarea>
    <textarea id="allImageCaption" name="allImageCaption"><?php echo $media['item2']; ?></textarea>
    
    
    <?php					
    
    /*
    
    $stmt = $db->prepare("SELECT * FROM artist WHERE id = :id");
    if ($stmt->execute($query_params)) {
    $artist = $stmt->fetch();
    }
    
    $media_stmt = $db->prepare("SELECT * FROM artist LEFT JOIN media ON artist.id = media.artist_id WHERE artist.id = :id");
    if ($media_stmt->execute($query_params)) {
    $media = $media_stmt->fetch();
    }*/					
         
        if($media['item1'] != "") {
            $image_items =   $media['item1'];
            $image_items = explode(',', $image_items);
            $caption_items =   $media['item2'];
            $caption_items = explode(',', $caption_items);
            $num_images = count($image_items);
            
            //	echo  $media['item1'] . ' ~ media test';
              
              for($i=0; $i < $num_images; $i++)
               {
                  $image =  $image_items[$i];
                  $caption = $caption_items[$i];
                  
                    //echo $image . 'test';
            ?>
                  
            <div class="image-item ui-state-default">
                <img class="thumbnail" name="selected-thumb" 
                src="../../site/assets/images/<?php echo $component . '/' . $artist['id'] . '/' . $image; ?>" />
                
                <!-- Add a caption to the image -->
                <textarea id="image-caption" name="image-caption"><?php echo $caption; ?></textarea>
                &nbsp;&nbsp;<a class="remove-image btn btn-danger btn-small">Remove</a>
                <input type="text" disabled="disabled" class="image warning" name="image" value="<?php echo $image; ?>" />
            </div>
              <?php	}
            }	//else {}   					
      break;
      
      case 'studio':  
    ?>       
    <textarea id="allImage" name="allImage"><?php echo $media['item1']; ?></textarea>
    <textarea id="allImageCaption" name="allImageCaption"><?php echo $media['item2']; ?></textarea>
    <?php						
                
    /*	
          $query_params = array(
          ':id' => $_GET['id']);
          
         $media_stmt = $db->prepare("SELECT * FROM studio LEFT JOIN media ON studio.id = media.studio_id WHERE studio.id = :id");
          if ($media_stmt->execute($query_params)) {
          $media = $media_stmt->fetch();
          }
    
          ?>*/
    ?>
       
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
            ?>
                  
            <div class="image-item ui-state-default">
                <img class="thumbnail" name="selected-thumb" 
                src="../../site/assets/images/<?php echo $component . '/' . $studio['id'] . '/' . $image; ?>" />
                
                <!-- Add a caption to the image -->
                <textarea id="image-caption" name="image-caption"><?php echo $caption; ?></textarea>
                &nbsp;&nbsp;<a class="remove-image btn btn-danger btn-small">Remove</a>
                <input type="text" disabled="disabled" class="image warning" name="image" value="<?php echo $image; ?>" />
            </div>
              <?php	}
            }	//else {} 					
      break;
    
      case 'label':  
          
    ?>       
    <textarea id="allImage" name="allImage"><?php echo $media['item1']; ?></textarea>
    <textarea id="allImageCaption" name="allImageCaption"><?php echo $media['item2']; ?></textarea>
    
        <?php					
    
    /*
        
          $query_params = array(
          ':id' => $_GET['id']);
          
          $media_stmt = $db->prepare("SELECT * FROM label LEFT JOIN media ON label.id = media.label_id WHERE label.id = :id");
          if ($media_stmt->execute($query_params)) {
            $media = $media_stmt->fetch();
          }*/
    
        
         
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
            ?>
                  
            <div class="image-item ui-state-default">
                <img class="thumbnail" name="selected-thumb" 
                src="../../site/assets/images/<?php echo $component . '/' . $label['id'] . '/' . $image; ?>" />
                
                <!-- Add a caption to the image -->
                <textarea id="image-caption" name="image-caption"><?php echo $caption; ?></textarea>
                &nbsp;&nbsp;<a class="remove-image btn btn-danger btn-small">Remove</a>
                <input type="text" disabled="disabled" class="image warning" name="image" value="<?php echo $image; ?>" />
            </div>
              <?php	}
            }	//else {}   					
      break;
      
      case 'configuration':  
    ?>       
    <textarea id="allImage" name="allImage"><?php echo $media['item1']; ?></textarea>
    <textarea id="allImageCaption" name="allImageCaption"><?php echo $media['item2']; ?></textarea>
    
    
    <?php					
    
    
    /*	 $media =  ORM::for_table('album')->join('media', array('album.id', '=', 'media.album_id'))->find_one($id);
    
    $query_params = array(
    ':id' => 1);
    
    $stmt = $db->prepare("SELECT * FROM site WHERE id = :id");
    if ($stmt->execute($query_params)) {
    $artist = $stmt->fetch();
    }
    
    $media_stmt = $db->prepare("SELECT * FROM site LEFT JOIN media ON site.id = media.site_id WHERE site.id = :id");
    if ($media_stmt->execute($query_params)) {
    $media = $media_stmt->fetch();
    }*/
          
     
         
        if($media['item1'] != "") {
            $image_items =   $media['item1'];
            $image_items = explode(',', $image_items);
            $caption_items =   $media['item2'];
            $caption_items = explode(',', $caption_items);
            $num_images = count($image_items);
            
            //	echo  $media['item1'] . ' ~ media test';
              
              for($i=0; $i < $num_images; $i++)
               {
                  $image =  $image_items[$i];
                  $caption = $caption_items[$i];
                  
                    echo $image . 'test';
            ?>
                  
            <div class="image-item ui-state-default">
                <img class="thumbnail" name="selected-thumb" 
                src="../../site/assets/images/<?php echo $component . '/' . $artist['id'] . '/' . $image; ?>" />
                
                <!-- Add a caption to the image -->
                <textarea id="image-caption" name="image-caption"><?php echo $caption; ?></textarea>
                &nbsp;&nbsp;<a class="remove-image btn btn-danger btn-small">Remove</a>
                <input type="text" disabled="disabled" class="image warning" name="image" value="<?php echo $image; ?>" />
            </div>
              <?php	}
            }	//else {}   					
      break;				
      
      default: echo 'no images selected';
            
      } // end switch
       
      
      ?>
           
    </div><!-- end image-added -->
      
      <div id="allImages">&nbsp;</div>
      <!--<div id="image-thumbnails"></div>-->
    
    
    </div><!-- end slideshow-images -->  
    </form>