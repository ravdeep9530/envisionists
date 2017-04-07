 <?php
					include("connection.php");
					
				
$uname=$_POST['email'];
$pas=$_POST['pass'];
 $pas=md5($pas);

					$query="SELECT * FROM  people WHERE email='$uname' AND pass='$pas';";

$result=$connect->query($query);
$st=0;
$hex;
$status;
while($row = $result->fetch_assoc())
{
	$st=1;
	$hex=$row["hex"];
	$status=$row["status"];
	$type=$row["type"];

       break;
	             
}
if(isset($_GET['id']))
			{
				$link="Location:payment_confirm.php?hex=".$hex."&id=".$_GET["id"];
				$rlink="location:login.php?msg=failed&id=".$_GET["id"];
			}else{
				$link="Location:index.php?hex=".$hex."";
				$rlink="location:login.php?msg=failed";
			}

if($st==1)
{

{
session_start();
$_SESSION['hex']=$hex;
$_SESSION['type']=$type;
if($type=='student')
header($link);
    else
        header('location:teacerView.php');
}
	}else{
header($rlink);
}

				?>