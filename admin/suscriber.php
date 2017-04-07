<style>
    body{

    }
</style>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Approach, new way of thinking</title>

    <!--Fonts-->


</head>
<?php include("style.php");?>
</head>
<body>


<?php include("adminHeader.php");?>
</body>
<body>

<script src="portal/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="portal/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="portal/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="portal/dist/js/sb-admin-2.js"></script>


<br/><br/>
<div class="table-responsive col-lg-8 col-lg-offset-1">
<table class="table table-bordered">
    <tr><th>Name</th><th>Email</th><th>Mobile No.</th><th>Class</th><th>Joining Date</th></tr>
<?php
include("connection.php");
$query="SELECT * FROM  subscribe";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
    echo'<center>

          
				<tr><td>'.$row['name'].'</td>
				<td><a href="mailto:'.$row['email'].'">'.$row['email'].'</a></td>
				<td>'.$row['mob'].'</td>
				<td>'.$row['clas'].'</td>
				<td>'.$row['date'].'</td>
                </tr>';
}
?>
</table>
</div>
</body>
