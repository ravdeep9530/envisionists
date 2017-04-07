<?php
include("connection.php");
if(isset($_GET['del']))
{
    $id=$_GET['del'];
    $connect->query("DELETE  FROM your_test WHERE yt_id=$id");
}
if(!isset($_GET['hex'])){
    header("Location:addTest.php");

}else
{
    $hex=$_GET['hex'];
    $cv=$connect->query("SELECT * FROM people WHERE hex='$hex'");
    $vc=$cv->fetch_assoc();
    $cl=$vc['class'];
    $title='Test Series';
}
?><!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title><?=$title?></title>
</head>

<body>
<?php include("adminHeader.php");
include "style.php";?>

<!-- End breadcrumb -->
<section id="mu-course-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-course-content-area">

                    <div class="row">
                        <div class="col-md-6" style="padding: 2px;">
                            <!-- start course content container -->
                            <div class="mu-course-container mu-course-details" style="background-color: transparent;">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <br/>

                                        <div class="mu-latest-course-single">

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4>Available Test</h4>

                                                </div>

                                                <div class="panel-body">
                                                    <?php
                                                    $sxrcx=$connect->query("SELECT * FROM test WHERE class='".$cl."'");
                                                    while($ss=$sxrcx->fetch_assoc())
                                                    {


                                                        ?>


                                                        <div class="alert alert-success col-lg-12"><div class="row"><span class="col-lg-7"><i class="fa fa-clipboard fa-2x"></i> <b><?=$ss['course_name']?></b>:<?=$ss['name']?> <small> <b><?=$ss['class']?></b> Duration:<?=$ss['duration']?>min</small></span><span class="pull-right col-lg-5"  ><small>(<?=$ss['date']?>)</small><a  onclick="addYourTest('<?=$ss['id']?>','admin/<?=$ss['tui']?>')" class="pull-right"> <i class="fa fa-download fa-2x"></i></a></span>
                                                            </div>
                                                            <div class="row"><span class="pull-left"><?=$ss['des']?></span></div>
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

                            <!-- end start related course item -->
                        </div>
                        <div class="col-md-6">
                            <!-- start sidebar -->
                            <div class="mu-course-container mu-course-details" style="background-color: transparent;">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <br/>

                                        <div class="mu-latest-course-single">

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4>Your Test<span class="pull-right"><i class="fa fa-square" style="background-color: red;"></i></span></h4>

                                                </div>

                                                <div class="panel-body">
                                                    <?php
                                                    $sxrcx=$connect->query("SELECT your_test.obt_marks,your_test.uplink,your_test.yt_id,test.course_name,your_test.total_marks,your_test.date,test.tui,test.name FROM your_test INNER JOIN test ON test.id=your_test.test_id WHERE hex='".$hex."' ORDER BY yt_id DESC");
                                                    while($ss=$sxrcx->fetch_assoc()) {
                                                        if ($ss['obt_marks']==0) {
?>
                                                            <div class="alert alert-danger col-lg-12"><div class="row"><span class="col-lg-7"><i class="fa fa-clipboard fa-2x"></i> <b><?=$ss['course_name']?></b>:<?=$ss['name']?> <small>(<?=$ss['date']?>)</small></span><span class="pull-left"><small>Obatined Marks:<input type="text" id="ob<?=$ss['yt_id']?>" value="<?=$ss['obt_marks']?>"> Out of <?=$ss['total_marks']?></small> </span><span class="pull-right col-lg-6"  ><button class="btn btn-success btn-sm" onclick="upMarks('<?=$ss['yt_id']?>')">Update</button><span class="pull-right"><a href="?del=<?=$ss['yt_id']?>&hex=<?=$hex?>">Delete</a> </span>
                                                                    </span>
                                                                    <?php
                                                                    if($ss['uplink']!="")
                                                                    {?>
                                                                        <a href="<?=$ss['uplink']?>" >Download</a>
                                                                        <?php

                                                                    }else
                                                                    {
                                                                        ?>
                                                                        <p>Not Uploades Yet.</p>
                                                                        <?php

                                                                    }
                                                                    ?>

                                                                </div></div>

                                                            <?php
                                                        } else {


                                                            ?>


                                                            <div class="alert alert-info col-lg-12">
                                                                <div class="row"><span class="col-lg-7"><i
                                                                            class="fa fa-clipboard fa-2x"></i> <b><?= $ss['course_name'] ?></b>:<?= $ss['name'] ?>
                                                                        <small>(<?= $ss['date'] ?>)</small></span><span
                                                                        class="pull-left"><small>Obatined Marks:<input
                                                                                type="text" id="ob<?= $ss['yt_id'] ?>"
                                                                                value="<?= $ss['obt_marks'] ?>"> Out of <?= $ss['total_marks'] ?></small> </span><span
                                                                        class="pull-right col-lg-6"><button
                                                                            class="btn btn-success btn-sm"
                                                                            onclick="upMarks('<?= $ss['yt_id'] ?>')">Update</button><span class="pull-right"><a href="?del=<?=$ss['yt_id']?>&hex=<?=$hex?>">Delete</a> </span></span>
                                                                    <?php
                                                                    if($ss['uplink']!="")
                                                                    {?>
                                                                        <a href="<?=$ss['uplink']?>" >Download</a>
                                                                        <?php

                                                                    }else
                                                                    {
                                                                        ?>
                                                                        <p>Not Uploades Yet.</p>
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
        </div>
    </div>

</section>

<?php include("footer.php");?>
</body>
</html>
<script>
    function upMarks(e) {
if($('#ob'+e).val()!="")
{
    $.get('upTest.php?tid='+e+"&obt="+$('#ob'+e).val(),function (data) {

        alert("Marks Updated Successfully");
        //location.reload();

    });
}

    }
</script>