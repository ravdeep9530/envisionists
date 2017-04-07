<?php
$fname=$_POST['name'];
$email=$_POST['email'];
$clas=$_POST['clas'];
$mob=$_POST['mob'];


//$u=explode('',$uname);
$pas=$_POST['pass1'];
$pas=md5($pas);
//echo $pass;
$s="IndiaisniceRavdeepSingh";
$hex="";
for($i=0;$i<strlen($email);$i++)
{
	
$hex.=substr($email,$i,1).rand(0,100). substr($s,$i/23,1);
}
//echo $hex;

include("connection.php");
$q="INSERT INTO people (name,email,pass,hex,date,status,type,class,mob) VALUES ('$fname','$email','$pas','$hex','".date("d-m-Y")."',0,'student','$clas','$mob');";
		$retval = $connect->query($q);
            if(! $retval ) {
               die('Could not enter data: ' . $connect->error);
            }else{
header("Location:account_confirmation.php?hex=$hex");
			}
?>