<!DOCTYPE HTML>
<html>
<head>
<title>Training a Education </title>
<?php  session_start();?>
<!-- //end-smoth-scrolling -->
<script src="js/bootstrap.min.js"></script><link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/chocolat.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.chocolat.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/mx.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Kreon:400,700,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/ajax.js"></script>
  <script src="js/drop.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},4000);
				});
			});
	</script>
<script>
var f=0;

</script>
<style>
 
.dropdown-menu > li.kopie > a {
    padding-left:5px;
}
 
.dropdown-submenu {
    position:relative;
	padding:10px;
	color:#999;
	border:none;
}
.dropdown-submenu>.dropdown-menu {
   top:0;left:100%;
   margin-top:-6px;margin-left:-1px;
   -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
 }
  
.dropdown-submenu > a:after {
  border-color: transparent transparent transparent #333;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  content: " ";
  display: block;
 
  padding:1%;
  float: right;  
  height: 0;     
  margin-right: -10px;
  margin-top: 5px;
  width: 0;
}
 
.dropdown-submenu:hover>a:after {
    border-left-color:#555;
 }

.dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
  color:#C03;
}  
  
@media (max-width: 767px) {

  .navbar-nav  {
     display: inline;
  }
  .navbar-default .navbar-brand {
    display: inline;
  }
  .navbar-default .navbar-toggle .icon-bar {
    background-color: #fff;
  }
  .navbar-default .navbar-nav .dropdown-menu > li > a {
    color: red;
    background-color: #ccc;
    border-radius: 4px;
    margin-top: 2px;   
  }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a {
     color: #333;
   }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
     background-color: #ccc;
   }

   .navbar-nav .open .dropdown-menu {
     border-bottom: 1px solid white; 
     border-radius: 0;
   }
  .dropdown-menu {
      padding-left: 10px;
  }
  .dropdown-menu .dropdown-menu {
      padding-left: 20px;
   }
   .dropdown-menu .dropdown-menu .dropdown-menu {
      padding-left: 30px;
   }
   li.dropdown.open {
    border: 0px solid red;
   }

}
 
@media (min-width: 768px) {
  ul.nav li:hover > ul.dropdown-menu {
    display: block;
  }
  #navbar {
    text-align: center;
  }
}  

</style>

</head>
<body>
<!--header start here-->
<div class="banner"  >
	<div class="container-fluid" >
		<div class="header">
			<div class="col-md-7 logo">
				<a href="index.php"><h1><img src="images/logo_small.jpeg" class="img-rounded" /></h1></a>
			</div>
			<div class="col-md-5 details">
				<div class="addre">
					<span class="location"> </span>
					  <div class="detail-para">
						<p>One reject</p>				
					  </div>
					<div class="clearfix"> </div>
				</div>
				<div class="addre ad-para">
					<span class="tel-ph "> </span>
					 <div class="detail-para">					
						<p><a href="mailto:info@technicus.com">info@technicus.com</a></p>
					  </div>
					  <div class="clearfix"> </div>
				</div>
				<div class="addre addres-mes">
					<span class="mess"> </span>
					 <div class="detail-para">
						<p>+91 9653406905</p>					
					  </div>
					<div class="clearfix"> </div>
				</div>
			  <div class="clearfix"> </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
		<div class="top-nav">
			<div class="navbar-header">
	   			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
                </button>
              </div>
	   			<div id="navbar" class="navbar-collapse collapse">
	              <ul class="nav navbar-nav">
	                  <li class=""><a  href="index.php">Home</a>
                      
				    <li class=""><a href="about.php">About</a></li>
                    
                         
                          
                       
							
                   <li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs <i class="caret"></i></a>
                          <ul class="dropdown-menu">
     
      
                       <?php
					include("connection.php");
					$query="SELECT DISTINCT category FROM  courses";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
	$cat=$row['category'];
	echo '  <li class="dropdown dropdown-submenu"><a href="#" style="border:none; color:black; padding:0;" class="dropdown-toggle" data-toggle="dropdown">'.$cat.'</a><ul class="dropdown-menu">';
	 
$q="SELECT * FROM  courses WHERE category='$cat'";

$r=$connect->query($q);

while($row = $r->fetch_assoc())
{
	echo '<li style="border-radius:0;"><a href="show_course.php?id='.$row["id"].'" style="border:none;  color:black; ">'.$row["name"].'</a></li>';
}
echo '</ul></li>';
}?>
 
    </ul></li>
                    
					 
					  <li class=""><a href="contact.php">Contact</a></li>	
                      <?php
					 
						if(isset($_SESSION['hex']))
						{$hex=$_SESSION['hex'];
						$query="SELECT * FROM  people WHERE hex='$hex'";

$result=$connect->query($query);
$i=0;
while($row = $result->fetch_assoc())
{
	$name=$row['name'];
	}
						echo '<li class="dropdown"><li><a class="dropdown-toggle" data-toggle="dropdown" href="user_profile.php?hex='.$hex.'" class="active"><i class="fa fa-user"></i> '.$name.' <i class="caret"></i></a>
						 <ul class="dropdown-menu">
						 <li><a href="user_profile.php?hex='.$hex.'" style="border:none; color:black; padding:2px;"><i class="fa fa-user"></i> User Profile</a></li>
						 <li><a href="logout.php" style="border:none; color:black; padding:2px;"><i class="fa fa-lock"></i> Logout</a></li>
						 </ul>
						</li>';}else
						{
							echo ' <li><a href="login.php" class="active"><i class="fa fa-lock"></i> Login</a></li>     ';
						}
						
					   ?>
                                
	              </ul>
                 
</div>
	            </div>
                
			</div>
		 <div class="banner-bottom">
		 	<div class="bann-para">
		 	<h2>What are Us?</h2>
		 	<p>Pending</p>
		   </div>
		   <a href="#">Read More</a>
		 </div>
	</div>
    
</div></body>