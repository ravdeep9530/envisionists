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
  
  
    <br/><br/><br/><br/><center>
</center>
                   
                   <?php
					include("connection.php");
					$query="SELECT * FROM  contact_us";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
                  echo'<center> <div style="background-color:#F5F5F5; color:#A0431B; z-index:-1; text-align:left;   box-shadow:2px 1px 4px #666666; padding:3%; width:80%;">

            <div class="row" style=" z-index:1;">
                <div class="col-md-10" style=" z-index:1;">
				<h5>Name:'.$row['name'].'</h5><br/>
				<h5>E-mail:<a href="mailto:'.$row['email'].'">'.$row['email'].'</a></h5><br/>
				<h5>Subject:'.$row['subject'].'</h5><br/>
				<h5>Message:'.$row['message'].'</h5>
                </div></center></div></div><br/><br/>';
}
				?>
                    </body>
                   