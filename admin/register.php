<?php
$fname=$_POST['name'];
$email=$_POST['email'];
$typ=$_POST['type'];
$mob=$_POST['mob'];
echo $fname;

//$u=explode('',$uname);
$pas=$_POST['pass1'];
$pas=md5($pas);
//echo $pas;
$s="IndiaisniceRavdeepSingh";
$hex="";
for($i=0;$i<strlen($email);$i++)
{
	
$hex.=substr($email,$i,1).rand(0,100). substr($s,$i/23,1);
}
//echo $hex;

include("connection.php");
$q="INSERT INTO people (`name`,email,pass,hex,`date`,status,`type`,class,mob) VALUES ('$fname','$email','$pas','$hex','".date("d-m-Y")."',0,'$typ','teacher','$mob');";
		//echo $q;
		  $retval=$connect->query($q) or die($connect->error);
            if(! $retval ) {
               die('Could not enter data: ' .$connect->error);
            }else{
header("Location:add_acc.php");
			}
?>