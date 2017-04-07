<?php
include("connection.php");
$hex=$_GET["hex"];
$query="UPDATE people SET status='1' WHERE hex='$hex'";

$result=$connect->query($query);
if($result>0)
{

		
header("Location:login.php");
}

?>