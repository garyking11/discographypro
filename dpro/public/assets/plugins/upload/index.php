<div class="row-fluid">
	<div class="span12">
		 <div class="upload-form bg-gray ">
<!-- <script type="text/javascript" src="Assets/Plugins/Upload/js/file-upload.js"></script>
  <script type="text/javascript" src="Assets/Plugins/Upload/js/jquery-form.js"></script>-->
        <fieldset>
          <form id="imageform" name="imageform[]" method="post" 
          enctype="multipart/form-data" 
          action="Assets/Plugins/Upload/ajax_file.php" >

            <h4>Upload media from your computer</h4>
            <p>Maximum size of 10 megabytes per file<br />
            Image Formats: jpg, png, gif, jpeg, JPG, GIF, PNG, JPEG<br />
            Audio Formats: mp3, MP3, ogg, OGG<br />
            Video Formats: mp4, MP4, webm, WEBM<br /> 
            </p>
            
            <p><input type="file" name="photoimg[]" id="photoimg" multiple  />	</p>	 
 
            
            <?php //echo $upload_directory; ?>
            <div class="hide"> 
            <input type="text" id="component_id" name="component_id" rel="image" value="<?php echo $id; ?>" />
            <input type="text" id="component_upload" name="component_upload"  value="<?php echo $component; ?>" />
            <!--<input type="text" id="upload-icon" name="upload-icon"  value="upload-social-icon" />-->
            <!-- Show thumbnail on completion -->
            <?php $upload_directory = 'Site/Assets/Images/' . $component . '/' . $id . '/'; ?>
            <input type="text" id="upload_directory" name="upload_directory"  value="<?php echo $upload_directory; ?>" />
    
            </div>  
          </form>
        </fieldset> 
        
        <div class="progress"><div class="bar"></div><div class="percent">0%</div></div>
        
        <div id="status"></div>  
        <div id='preview'></div><!-- results --> 
  
		</div><!-- end upload-form-->
	</div><!--end span12 -->
</div><!--end row-fluid -->