<?php

$name=$_POST['name'];


$cat=$_POST['cat'];






//echo $hex;

include("../connection.php");
$q="INSERT INTO courses (category,name,duration,fee,ui,date,description) VALUES ('$cat','$name','','','','".date("Y-M-d")."','');
";
//echo $q;
		
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter dataaa: ' . mysql_error());
            }else{
//header("Location:add_item.php");
			}
			
			
?>