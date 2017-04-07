<?php
/**
 * Created by PhpStorm.
 * User: WorldWiki
 * Date: 26-01-2017
 * Time: 03:52 PM
 */
session_start();
include "connection.php";
$title='F&Q';
include "theader.php";
?>

<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Lobster" rel="stylesheet">

<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Robotics</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">F&Q</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mu-course-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-body">
                        <center><i class="fa fa-question-circle fa-4x"></i></center>
                        <center><h3 style="color: rgba(15, 0, 255, 0.55);  color: rgba(255, 6, 0, 0.95); font-family: 'Josefin Slab', serif;"><b> Frequently asked questions</b></h3></center>
                        <h4 style=""><u>Who are we?</u></h4>
                        <p class="text-justify" style="font-family: 'Josefin Slab', serif;">We are a team of professionals from various sectors of education who believe that knowledge is for all and it should be provided to everyone and that too for free.</p>
                        <h4 style=""><u>What services do we provide?</u></h4>
                        <p class="text-justify" style="font-family: 'Josefin Slab', serif;">We provide various services like:
                           <li style="font-family: 'Josefin Slab', serif;"> 1: Study Notes</li>
                        <li style="font-family: 'Josefin Slab', serif;"> 2: Assignments</li>
                        <li style="font-family: 'Josefin Slab', serif;"> 3: Test Series</li>
                        <li style="font-family: 'Josefin Slab', serif;">  4: Material for robotics</li>
                        <li style="font-family: 'Josefin Slab', serif;">   5: Doubt Clearing for every topic and Question using video conferencing</li></p>
                        <h4 style=""><u>Are we really free or do we have some hidden charges?</u></h4>
                        <p class="text-justify" style="font-family: 'Josefin Slab', serif;">We provide our services for free.We don't charge for anything on our website whether that be study notes, assignments or test series.Everything on Learn To Dominate is free.</p>
                        <h4 style=""><u>What is so special about our test series?</u></h4>
                        <p class="text-justify" style="font-family: 'Josefin Slab', serif;">You can find many websites which can provide you with questionnaire as test series , in which answers are in the form of MCQ's and you select appropriate answers and get marks accordingly.
                            But we here at Learn To Dominate work according to the study patterns prevailing in India.
                            In schools student don't get questions as MCQ's but in a subjective format .
                            And our test series provides questions in a subjective format which student will solve and send back to us and we will check it and show them their result and then afterwards clear their doubts.</p>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php
include "footer.php";
?>
