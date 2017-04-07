<?php
$hex=$_GET['hex'];
$id=$_GET['id']; 
$p_id=$_GET['payment_id'];
$p_r=$_GET['payment_request_id'];
include("connection.php");
$q="INSERT INTO paid_course (c_id,hex,date,payment_id,payment_request) VALUES ('$id','$hex','".date("d-m-Y")."','$p_id','$p_r');";
		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }else{
header("Location:../index.php?hex=$hex");
			}
//

?>