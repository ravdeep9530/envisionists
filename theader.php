
<?php
include("connection.php");
if(isset($_POST['addP']))
{
    $hex=$_SESSION['hex'];
    $p_data=$_POST['p_data'];
    $connect->query("INSERT INTO `post`(`data`, `date`, `post_hex`) VALUES ('$p_data',NOW(),'$hex')");

}
if(isset($_POST['addC']))
{
    $hex=$_SESSION['hex'];
    $p_id=$_POST['p_id'];
    $c_data=$_POST['c_data'];
    $connect->query("INSERT INTO `comments`(`p_id`, `hex_c`, `cont`, `date`) VALUES ($p_id,'$hex','$c_data',NOW())");

}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?=$title?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>admin@envisionists.in</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>(+91) 7814152452</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="https://www.facebook.com/EnvisionistsInc/"><span class="fa fa-facebook"></span></a></li>
                    <!--  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                      <li><a href="#"><span class="fa fa-linkedin"></span></a></li>-->
                      <li><a href="https://www.youtube.com/channel/UCI4wg2dhtmRgzpykoiFB33g"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
   <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php"><img src="admin/assets/img/logo.png" alt="LOGO" style="margin-top:-10px;" class="img-responsive"/></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.php">Home</a></li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Downloads <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
               
                       <?php

					$query="SELECT  category,id FROM  courses GROUP BY category ORDER BY id DESC ";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
	$cat=$row['category'];
	echo '  <li class=" "><a href="show_course.php?id='.$row['id'].'" class="" >'.$cat.'</a></li>';
	 


}?>             
              </ul>
            </li>
              <li><a href="showTest.php">Test Series</a></li>
              <?php if(isset($_SESSION['type'])&&$_SESSION['type']=='teacher')
              {
                  ?>
                  <li><a href="teacerView.php">Teacher Discussion</a></li>
                  <?php
              } ?>
              <li><a href="robo.php">Robotics</a></li>
              <li><a href="personality.php">Personality</a></li>
              <li><a href="fq.php">F&Q</a></li>
              <li><a href="contact.php">Contact Us</a></li>
              
            
            </li>            
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
            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
 <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>