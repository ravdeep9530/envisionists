<?php
include("connection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['message'];
$q="INSERT INTO contact_us (name,email,subject,message) VALUES ('$name','$email','$sub','$msg');";
		$retval = $connect->query($q);
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }else{
header("Location:contact.php?create=good");
			}
?>