<!doctype html>
<html>
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

    <title>Delete Course</title>


</head>
<body>


<?php include("adminHeader.php");?>
          </body><body>
     
<section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area ">
            <!-- Start Title -->
    
            <div class="mu-title">
             
              </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                    <?php 
include("connection.php");

					$query="SELECT * FROM  courses";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
	$cname=$row["name"];
	$dur=$row["duration"];
	$fee=$row["fee"];
	$des=$row["description"];
	$cat=$row["category"];
	$ui=$row['ui'];
	echo '
              <div class="col-lg-4 col-md-4 col-xs-12" style="margin-bottom:20px;">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="'.$ui.'" alt="img" ></a>
                    <figcaption class="mu-latest-course-imgcaption">
                     '.$cat.'
                      <span><i class="fa fa-clock-o"></i>'.$dur.' month</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content" style="height:200px;">
                    <h4><a href="#">'.$cname.'</a></h4>
                    <p>'.substr($des,0,70).'</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details"  href="delete_course.php?id='.$row['id'].'"><i class="fa fa-trash-o"></i> Delete</a>
                      <span class="mu-course-price" href="#"><i class="fa fa-inr"></i> '.$fee.'</span>
                    </div>
                  </div>
                </div>
              </div>';
}
?>
            </div></div></div></div></div></div></section>
        
</body>
</html>