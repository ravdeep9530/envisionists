<?php
session_start();

include("connection.php");
$title='Test Series';

if(isset($_SESSION['hex'])&&$_SESSION['hex']!=""){

    $hex=$_SESSION['hex'];

    $cv=$connect->query("SELECT * FROM people WHERE hex='$hex'");
    $vc=$cv->fetch_assoc();
    $cl=$vc['class'];


}
?><!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="utf-8">
    <title><?=$title?></title>
</head>

<body>
<?php include("theader.php");
include "style.php";?>
<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Lobster" rel="stylesheet">
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Test Series</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Test Series</li>
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

            <?php if(isset($_SESSION['hex'])&&$_SESSION['hex']!=""){?>
            <div class="col-lg-12" >

                <iframe src="graph.php?hex=<?=$hex?>" style="height: 400px; border: 0; overflow: scroll; overflow-style:move;" class="col-lg-12" /></iframe>
            </div>
            <div class="col-md-12">
                <div class="mu-course-content-area">


                        <div class="col-md-10 col-md-offset-1">
                            <!-- start sidebar -->
                            <div class="mu-course-container mu-course-details" style="background-color: transparent;">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <br/>

                                        <div class="mu-latest-course-single">

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4>Your Test<span class="pull-right"><i class="fa fa-square" style="color: red;"></i> Requested Test <i class="fa fa-square" style="color: #00b2ee;"></i> Attempted Test</span></h4>

                                                </div>

                                                <div class="panel-body">
                                                    <?php

                                                    $sxrcx=$connect->query("SELECT your_test.yt_id,your_test.uplink,your_test.obt_marks,test.type,test.course_name,your_test.total_marks,your_test.date,test.tui,test.name FROM your_test INNER JOIN test ON test.id=your_test.test_id WHERE hex='".$hex."' ORDER BY test.id DESC");
                                                    while($ss=$sxrcx->fetch_assoc()) {
                                                        if ($ss['type'] == 'rag') {
                                                            ?>


                                                            <div class="alert alert-info col-lg-12">
                                                                <div class="row"><span class="col-lg-7"><i
                                                                            class="fa fa-clipboard fa-2x"></i> <b><?= $ss['course_name'] ?></b>:<?= $ss['name'] ?>
                                                                        <small>(<?= $ss['date'] ?>)</small></span><span
                                                                        class="pull-left"><small>Obatined Marks:<?= $ss['obt_marks'] ?>
                                                                            Out of <?= $ss['total_marks'] ?></small> </span>
                                                                    <?php
                                                                    if(trim($ss['uplink'])=="")
                                                                    {
                                                                    ?>
                                                                        <span
                                                                            class="pull-right col-lg-6"><a

                                                                                class="pull-right"> <i  data-toggle="collapse" data-target="#<?= $ss['yt_id'] ?>"
                                                                                                        class="fa fa-upload fa-2x"></i></a></span>
                                                                    <div class="row col-lg-12 collapse" id="<?= $ss['yt_id'] ?>">
                                                                        <form id="data<?= $ss['yt_id'] ?>" onsubmit="event.preventDefault(); return send('data<?= $ss['yt_id'] ?>',this)" method="post" enctype="multipart/form-data">
                                                                            <span><input type="file" name="image" class="form-control" required>
                                                                                <input type="text" hidden name="yt_id" value="<?= $ss['yt_id'] ?>"/>
                                                                            <input type="submit" class="btn btn-sm btn-default pull-right" value="Upload"/></span>
                                                                        </form></div>
                                                                        <?php }else{
                                                                            ?>
                                                                        <span
                                                                            class="pull-right col-lg-6"><a href="<?=$ss['uplink']?>"

                                                                                class="pull-right"> <i
                                                                                                        class="fa fa-download fa-2x"></i></a></span>
                                                                        <?php
                                                                    } ?>
                                                                </div>
                                                            </div>


                                                            <?php
                                                        }else{
                                                            ?>
                                                            <div class="alert alert-danger col-lg-12">
                                                                <div class="row"><span class="col-lg-7"><i
                                                                            class="fa fa-clipboard fa-2x"></i> <b><?= $ss['course_name'] ?></b>:<?= $ss['name'] ?>
                                                                        <small>(<?= $ss['date'] ?>)</small></span><span
                                                                        class="pull-left"><small>Obatined Marks:<?= $ss['obt_marks'] ?>
                                                                            Out of <?= $ss['total_marks'] ?></small> </span>
                                                                    <?php
                                                            if(trim($ss['uplink'])=="") {
                                                                ?>
                                                                <span
                                                                    class="pull-right col-lg-6"><a

                                                                        class="pull-right"> <i data-toggle="collapse"
                                                                                               data-target="#<?= $ss['yt_id'] ?>"
                                                                                               class="fa fa-upload fa-2x"></i></a></span>
                                                                <div class="row col-lg-12 collapse"
                                                                     id="<?= $ss['yt_id'] ?>">
                                                                    <form id="data<?= $ss['yt_id'] ?>" method="post" onsubmit="event.preventDefault(); return send('data<?= $ss['yt_id'] ?>',this)"
                                                                          enctype="multipart/form-data">
                                                                            <span><input type="file" name="image"
                                                                                         class="form-control" required>
                                                                                <input type="text" hidden name="yt_id"
                                                                                       value="<?= $ss['yt_id'] ?>"/>
                                                                            <input type="submit"
                                                                                   class="btn btn-sm btn-default pull-right"
                                                                                   value="Upload"/></span>
                                                                    </form>
                                                                </div>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <span
                                                                    class="pull-right col-lg-6"><a href="<?=$ss['uplink']?>"

                                                                                                   class="pull-right"> <i
                                                                            class="fa fa-download fa-2x"></i></a></span>

                                                                <?php
                                                            }
                                                                ?>
                                                                </div>
                                                            </div>

                                                    <?php
                                                        }
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / end sidebar -->
                        </div>
                    </div>
                </div>
            </div>
            <?php }else{
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-body">
                                <h3 style="color: rgba(15, 0, 255, 0.55);   color: rgba(255, 6, 0, 0.95); font-family: 'Josefin Slab', serif;"><b>Join our test series to revise the concepts that you have learnt.Not only that, subscribe to get time to time assistance from our team.</b></h3>
                                <h4><u>Why Our Test Series?</u></h4>
                                <p class="text-justify"><li style="font-family: 'Josefin Slab', serif;">Because we do not provide test series in the form of mcq's but in the form of assignments which the student will solve and send us and will get it back checked in just three working days.</li></p>
                                <p class="text-justify"><li style="font-family: 'Josefin Slab', serif;">Because we have a team of professionals (from M.Sc's to Engineers) who are working for your test series.</li></p>
                                <p class="text-justify"><li style="font-family: 'Josefin Slab', serif;">Parents will be informed as soon as the test of their ward is checked and checked  copies will be sent to them along with their child on both their email id's and mobile on whatsapp.</li></p>
                                <p class="text-justify"><li style="font-family: 'Josefin Slab', serif;">We send test papers as per your requirement.</li></p>
                                <p class="text-justify"><li style="font-family: 'Josefin Slab', serif;">We solve doubts by giving you a call ourselves and if need be we give a video call too so that everything can be taught effectively.</li></p>
                                <p class="text-justify"><li style="font-family: 'Josefin Slab', serif;">Last but not the least  we charge you with nothing.Our services are absolutely free.</li></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-lg btn-success col-lg-4 col-lg-offset-4" onclick="location.href='login.php'">Subscribe Now</button>
                        </div>
                    </div>
                </div>
            <?php
            } ?>
        </div>
    </div>
</section>

<?php include("footer.php");?>
</body>
</html>
<script>
    function addYourTest(e,l) {

$.get('addYourTest.php?tid='+e,function (data) {
   if(data=='done')
   {
       window.open(l, 'download_window', 'toolbar=0,location=no,directories=0,status=0,scrollbars=0,resizeable=0,width=1,height=1,top=0,left=0');
       window.focus();
   }
});
    }


        function send(id,e) {
            alert('It take few minutes as per your file size.');
            //e.preventDefault();

            $.ajax({
                url: "ajaxupload.php",
                type: "POST",
                data:  new FormData($('#'+id)[0]),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function()
                {
                    //$("#preview").fadeOut();

                },
                success: function(data)
                {

                    alert(data);
                    location.reload();
                },
                error: function(e)
                {

                }
            });
            return false;
        }

</script>