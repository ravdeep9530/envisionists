<?php 
include("connection.php");
$user=$_POST['name'];
$pass=$_POST['pass'];
$query="SELECT * FROM  user_login WHERE username='$user' AND password='$pass'";

$result=$connect->query($query);
$f=0;
while($row = $result->fetch_assoc())
{
	$f=1;
	session_start();
	$_SESSION['verify']='Sohi';
header("Location:add_item.php");
}
if($f==0)
{
	echo 'username/password is incorrect!!';
}
?>
<br>
<button onClick="location.href='../admin'">Go Back</button>