<?php
namespace Upload;

class Upload {

	function __contstruct() {

	}
	
	function uploadImages() {

		$id = substr( $item_url, strrpos( $item_url, '/' )+1 );
		
		$upload_directory = $_POST['upload_directory'];
		
		print_r($_POST);
		
		$path = 'site/assets/images/' . $upload_directory . '/' . $id;
		
		echo $path;
		
		$valid_formats = array("jpg", "png", "gif");
		
		if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
				$name = $_FILES['photoimg']['name'];
				
				$size = $_FILES['photoimg']['size'];
				
					if(strlen($name))
							{
									list($txt, $ext) = explode(".", $name);
									
									if(in_array($ext,$valid_formats))
									
											{
											if($size<(1024*1024))
											{
											$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
											
											$tmp = $_FILES['photoimg']['tmp_name'];
													
													if(move_uploaded_file($tmp, $path.$actual_image_name))
													
													{
													
													$command = ORM::for_table('media')->find_one($id);
									
													$command->set(array(
																'image' => '$actual_image_name'
														));
								
										// Syncronise the object with the database
										$command->save();	
						
						
					//$command=mysql_query("UPDATE media SET image='$actual_image_name' WHERE uid='$session_id'");
					echo "<img src='upload/".$actual_image_name."'  class='preview'>";
					}
					else
					echo "failed";
					}
					else
					echo "Image file size max 1024k";
					}
					else
					echo "Invalid file format..";  
					}
					else
					echo "No file selected";
					exit;
			};
	}
} // end uploadFiles()
?>