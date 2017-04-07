<?php 
include("connection.php");

$u=$_GET['u'];
$f=0;
$query="SELECT * FROM  people WHERE email='$u'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
	$f=1;
	break;
}
if($f==0)
{
	echo "avail";
}else{
	echo "exists";
}
?>