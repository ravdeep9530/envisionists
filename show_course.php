<?php  session_start();
?><!doctype html>
<html>
<head>
<?php 
include("connection.php");
$id=$_GET["id"];
					$query="SELECT * FROM  courses WHERE id=$id";

$result=$connect->query($query);

$row = $result->fetch_assoc();
{
	$cname=$row["name"];
	$dur=$row["duration"];
	$fee=$row["fee"];
	$des=$row["description"];
	$ct=$row["category"];
	$ui=$row['ui'];

}
$sx=$connect->query("SELECT * FROM my_message;");
$sxx=$sx->fetch_array();
?>
<meta charset="utf-8">
<title><?php echo $ct; ?></title>
</head>

<body>
<?php include("theader.php");
?>
<section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Course Download</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Course Download</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
             <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12" style="border: 0;">
                        <div class="panel panel-default">
                            <div class=" panel-heading">
                                <h4>My Messages</h4>
                            </div>
                            <div class="panel-body">
                                <textarea style="border: 0; height: 200px;" class="col-lg-12" readonly><?=$sxx['message']?></textarea>
                            </div>
                        </div>

                    </div>
                </div>
             </div>
            <div class="row">
              <div class="col-md-9" style="padding: 2px;">
                <!-- start course content container -->
                <div class="mu-course-container mu-course-details" style="background-color: transparent;">
                  <div class="row">
                    <div class="col-md-12" >
                        <br/>

                      <div class="mu-latest-course-single">

                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4>Download Section</h4>

                          </div>

                          <div class="panel-body">
                              <?php

                              $sxrcx=$connect->query("SELECT DISTINCT course_id FROM chapter WHERE class='".$ct."'");
                              while($ss=$sxrcx->fetch_assoc())
                              {


                                  ?>
                                 <div class="col-lg-12  ">
                                     <div class=" panel panel-default" style="border-radius: 0; background-color: rgba(97, 159, 166, 0.04);" >
                                     <div class=" panel-heading">
                                         <h5><?=$ss['course_id']?></h5>
                                     </div>
                                     <div class="panel-body">
                                         <?php
$fc='d';
                                         $sdgx=$connect->query("SELECT * FROM chapter WHERE class='$ct' AND course_id='".$ss['course_id']."' GROUP BY chapter_name")or die($connect->error);
                                         while($sds=$sdgx->fetch_assoc())
                                         {

                                                 echo '<h3 style="cursor:pointer;" data-toggle="collapse" data-target="#'.$sds['chapter_name'].'"><u><i class="fa fa-arrow-right"></i>'.$sds['chapter_name'].'</u></h3>';
                                                 $fc=$sds['chapter_name'];
                ?>
                                             <div class="collapse" id="<?=$sds['chapter_name']?>">
                                             <?php
                                             $sdgxk=$connect->query("SELECT * FROM chapter WHERE class='$ct' AND course_id='".$ss['course_id']."' AND chapter_name='$fc' ORDER BY id DESC")or die($connect->error);
                                             while($sdsk=$sdgxk->fetch_assoc())
                                             {
                                             ?>

                                             <div class="row" ><div class="alert alert-success col-lg-10 col-lg-offset-1"><span class="col-lg-9"><i class="fa fa-book fa-2x"></i> <?=$sdsk['description']?> <small>(<?=$sdsk['date']?>)</small></span><span class="pull-right col-lg-3 row"  ><a href="admin/<?=$sdsk['cui']?>" class="pull-right"> <i class="fa fa-download fa-2x"></i></a></span></div>
                                             </div> <?php
                                         }
                                         ?>
                                             </div>
                                                 <?php
                                         }
                                         ?>
                                     </div>
                                 </div>
                                 </div>
                                  <?php
                              }
                              ?>

                          </div>
                      </div>
                      </div> 
                    </div>                                   
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start related course item -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-related-item">
                  <h3><b>You May Interested</b></h3>
                  <div class="mu-related-item-area">
                    <div id="mu-related-item-slide">
                    <?php 
include("connection.php");

					$query="SELECT * FROM  `add`";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
	$cname=$row["name"];

	$des=$row["description"];
	$ui=$row['ui'];
	echo '
              <div class="col-md-6">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                            <a href="#"><img alt="img" src="admin/'.$ui.'"></a>
                            <figcaption class="mu-latest-course-imgcaption" >
                              <a href="show_course.php?id='.$row['add_id'].'">'.$cname.'</a>
                            
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content" style="height:150px;">
                            
                            <p>'.substr($des,0,70).'</p>
                            <div class="mu-latest-course-single-contbottom">
                              <a href="'.$row['url'].'" class="mu-course-details">Details</a>
                              
                            </div>
                          </div>
                        </div>
                      </div>';
}
?>
                      
                      <!--
                      <div class="col-md-6">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                            <a href="#"><img alt="img" src="assets/img/courses/3.jpg"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                              <a href="#">Drawing</a>
                              <span><i class="fa fa-clock-o"></i>90Days</span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                            <div class="mu-latest-course-single-contbottom">
                              <a href="#" class="mu-course-details">Details</a>
                              <span href="#" class="mu-course-price">$165.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">
                            <a href="#"><img alt="img" src="assets/img/courses/1.jpg"></a>
                            <figcaption class="mu-latest-course-imgcaption">
                              <a href="#">Drawing</a>
                              <span><i class="fa fa-clock-o"></i>90Days</span>
                            </figcaption>
                          </figure>
                          <div class="mu-latest-course-single-content">
                            <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                            <div class="mu-latest-course-single-contbottom">
                              <a href="#" class="mu-course-details">Details</a>
                              <span href="#" class="mu-course-price">$165.00</span>
                            </div>
                          </div>
                        </div>
                      </div>-->
                    </div>
                  </div>
                </div>
                  </div>
                </div>
                <!-- end start related course item -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
             <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                 <?php if(!isset($_SESSION['hex'])){
                 ?>
                  <div class="mu-single-sidebar">

                     <div >
	<button class="btn btn-lg btn-success col-lg-12 btn-link" style="font-size:12px; padding: 20px;"><a href="login.php" class="btn btn-success btn-block"> <u>Subscribe Us</u></a></button>


                </div>




                     
                     
                  <!--  </ul>-->
                  </div>
                 <?php } ?>


                 <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Our Links</h3>
                    <div class="mu-sidebar-popular-courses">
                    <?php 


					$query="SELECT * FROM  `add` LIMIT 6";

$result=$connect->query($query);

while($row = $result->fetch_assoc())
{
	$cname=$row["name"];

	$des=$row["description"];
	$ui=$row['ui'];
	$url=$row['url'];
    if($url=="")
        $url='#';
	echo '
             <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="admin/'.$ui.'" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="'.$url.'">'.$cname.'</a></h4>                      
                          <span class="popular-course-price"> <p>'.substr($des,0,70).'</p></span>
                        </div>
                      </div><hr/>';
}
?>
                      
                     <!-- <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/2.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Web Design</a></h4>                      
                          <span class="popular-course-price">$250.00</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/3.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">Health & Sports</a></h4>                      
                          <span class="popular-course-price">$90.00</span>
                        </div>
                      </div>-->
                    </div>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <!--<div class="mu-single-sidebar">
                    <h3>Archives</h3>
                    <ul class="mu-sidebar-catg mu-sidebar-archives">
                      <li><a href="#">May <span>(25)</span></a></li>
                      <li><a href="">June <span>(35)</span></a></li>
                      <li><a href="">July <span>(20)</span></a></li>
                      <li><a href="">August <span>(125)</span></a></li>
                      <li><a href="">September <span>(45)</span></a></li>
                      <li><a href="">October <span>(85)</span></a></li>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                 <!-- <div class="mu-single-sidebar">
                    <h3>Tags Cloud</h3>
                    <div class="tag-cloud">
                      <a href="#">Health</a>
                      <a href="#">Science</a>
                      <a href="#">Sports</a>
                      <a href="#">Mathematics</a>
                      <a href="#">Web Design</a>
                      <a href="#">Admission</a>
                      <a href="#">History</a>
                      <a href="#">Environment</a>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <?php include("footer.php");?>
</body>
</html>