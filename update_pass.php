<?php
include("connection.php");
$opass=$_GET['op'];
$pass=$_GET['np'];
$hex=$_GET['hex'];
$f=0;
$query="SELECT * FROM  people WHERE hex='$hex' AND password='$opass'";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
	$f=1;
}
if($f==1){
$q="UPDATE people SET password='$pass' WHERE password='$opass' AND hex='$hex'";

		$retval = $connect->query($q);            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
			   echo "not";
            }else{
echo "done";
			}
}else{
	echo "not";
}
?>