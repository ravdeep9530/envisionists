<?php 
include("connection.php");
$fname=$_GET["fname"];
$email=$_GET["email"];

$hex=$_GET["hex"];
$q="UPDATE people SET name ='$fname', email='$email' WHERE hex='$hex'";

		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
			   echo "not";
            }else{
echo "done";
			}

?>