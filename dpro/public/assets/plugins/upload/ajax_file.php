<?php
session_start();
//$session_id=2;
$valid_formats = array("jpg", "png", "gif","jpeg","JPG", "GIF", "PNG", "JPEG","mp3", "MP3", "ogg","OGG","mp4", "MP4", "webm","WEBM", "ico", "ICO");
$image_formats = array("jpg", "png", "gif","jpeg","JPG", "GIF", "PNG", "JPEG", "ico", "ICO");
$audio_formats = array("mp3", "MP3", "ogg","OGG");
$video_formats = array("mp4", "MP4", "webm","WEBM");
print_r($_POST) . ' this is the ajax file';

//exit;


if($_SERVER['REQUEST_METHOD'] === "POST")
 {
		$img_path = __DIR__.'/../../../'. $_POST['upload_directory'];
	 
		foreach($_FILES['photoimg']['name'] as $findex => $name) {
		//echo $filename.' has file size of '.$_FILES['photoimg']['size'][$findex].' bytes';
		
		$size = $_FILES['photoimg']['size'][$findex];
	
		if(strlen($name))
					 {
			list($txt, $ext) = explode(".", $name);
			//not a social icon
			//if($_POST['upload-icon'] != 'upload-social-icon') {
				
				
				if(in_array($ext, $image_formats )) {
					
					/**
					 *Images
					*/	
					//check if configuration file
					if ($_POST['component_upload'] ==  'configuration') { 
					$path = __DIR__.'/../../../'.'site/assets/' . 'images/' 
					. $_POST['component_upload'] . '/' . $_POST['component_id'] . '/';
					} else {
					
					//component uploads 
					$path = __DIR__.'/../../../'.'site/assets/' . 'images/' 
					. $_POST['component_upload'] . '/' . $_POST['component_id'] . '/' ;
	
					} // end else
					
					
					// Create folder for this studio' images files
					$image_structure = $path; 
						if (!file_exists($image_structure)) {
							if (!mkdir($image_structure, 0777, true)) {
							die('Failed to create folders...');
						}
					}
				}	//end if(in_array)
					
					
							//	} else { 
									
							//					if(in_array($ext, $image_formats )) {
												/**
												 *Icons
												*/				
							//					$path = __DIR__. '/../../Plugins/' . 'Social/images/PNG/' ;
												//$directory_path = 'site/assets/' . 'Images/' 
												//. $_POST['component_upload'] . '/'. $_POST['component_id'] . '/' ;
					
							//				}	//end if(in_array)
							//			} // if social icon
					
					/**
					 *Audio
					*/							
					if(in_array($ext, $audio_formats )) {
						
					//check if configuration file
					if ($_POST['component_upload'] ==  'configuration') { 
					$path = __DIR__.'/../../../'.'site/assets/' . 'audio/' 
					. $_POST['component_upload'] . '/' . $_POST['component_id'] . '/';
					} else {
					
					//component uploads 	
					$path = __DIR__.'/../../../'.'site/assets/' . 'audio/' 
					. $_POST['component_upload'] . '/'. $_POST['component_id'] . '/' ;	
					//$directory_path = 'site/assets/' . 'Audio/' 
					//. $_POST['component_upload'] . '/'. $_POST['component_id'] . '/' ;
					
					} // end else
					
					// Create folder for this studio' audio files
					$audio_structure = $path;
						if (!file_exists($audio_structure)) {
							if (!mkdir($audio_structure, 0777, true)) {
								die('Failed to create folders...');
						}
					}
			} // end if(in_array)
					/**
					 *Video
					*/	
					if(in_array($ext, $video_formats )) {
						
					//check if configuration file
					if ($_POST['component_upload'] ==  'configuration') { 
					$path = __DIR__.'/../../../'.'site/assets/' . 'video/' 
					. $_POST['component_upload'] . '/' . $_POST['component_id'] . '/';
					} else {
					
					//component uploads 
					$path = __DIR__.'/../../../'.'site/assets/' . 'video/'  
					. $_POST['component_upload'] . '/'. $_POST['component_id'] . '/' ;	
					//$directory_path = 'site/assets/' . 'Video/' 
					//. $_POST['component_upload'] . '/' . $_POST['component_id'] . '/' ;
					} // end else
					
					// Create folder for this studio' audio files
					$video_structure = $path;
						if (!file_exists($video_structure)) {
							if (!mkdir($video_structure, 0777, true)) {
									die('Failed to create folders...');
							}
					}
				} //end if(in_array)
					

				if(in_array($ext,$valid_formats))
					{
					if($size<(10000*1000))
						{
							$actual_image_name = $name;
							
							$tmp = $_FILES['photoimg']['tmp_name'][$findex];
							
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
									
									if (in_array($ext, $image_formats )) { 
										 
											echo '<img 
											src="' . $_POST['upload_directory'] . $name . '" 
											class="preview"  
											alt="' . $name 
											. '"/>';
											
									}
																	 
									else if (in_array($ext, $audio_formats )) { 
									 echo '<br /><strong>Audio files uploaded:</strong> <br />' 
									 . $name; 
										echo $filename.' : ' . ($size/1000000) .' megabytes';
									}
									
									else if (in_array($ext, $video_formats )) { 
									 echo '<br /><strong>Video files uploaded:</strong> <br />' 
									 . $name; 
									 echo $filename.' : ' . ($size/1000000) .' megabytes';
									}
									
								 else {
									 echo '<br /><strong>No additional files uploaded:</strong> <br />'; 
									}
									
									//print_r($_POST); exit;
									//scandir($path);
									 
										$_SESSION["image"]=$actual_image_name;						
								}
						else echo "failed"; 
					}
					
					
			
			else
			echo  ($size/1000000)  . " megabytes.  Error: (Image file size max 10 meg)";					
							}
			else
			echo 'Error: Invalid file format..
			 ("jpg", "png", "gif","jpeg","JPG", "GIF", "PNG", "JPEG","mp3", "MP3", "ogg","OGG","mp4", "MP4", "webm","WEBM")';	 
							}
			else
			echo "Error: There has been an error and your image has not been uploaded.<br />(Perhaps you tried to upload an image file size larger than 5 meg or an invalid file format";
				}		// end foreach	
		exit;
	
}

?>

<?php //start image-insert
//include '../Media/image-insert.php' ?>

