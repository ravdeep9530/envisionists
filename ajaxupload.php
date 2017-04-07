<?php

$valid_extensions = array('pdf', 'doc', 'docx'); // valid extensions
$path = 'admin/uploads/'; // upload directory
include "connection.php";
if(isset($_FILES['image']))
{
	$img = $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name'];
    $yt=$_POST['yt_id'];
		
	// get uploaded file's extension
	$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
	
	// can upload same image using rand function
	$final_image = rand(1000,1000000).$img;
	
	// check's valid format
	if(in_array($ext, $valid_extensions)) 
	{					
		$path = $path.strtolower($final_image);	
			
		if(move_uploaded_file($tmp,$path)) 
		{
			//echo "$path";
            $connect->query("UPDATE `your_test` SET `uplink`='$path' WHERE yt_id=$yt");
            echo 'File Uploaded Successfully.';
		}
	} 
	else 
	{
		echo 'Invalid File. Please upload .pdf,.doc,docx';
	}
}


?>