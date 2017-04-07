<?php

include "connection.php";
if(isset($_GET['del']))
{
    $id=$_GET['del'];
    $connect->query("DELETE  FROM test WHERE id=$id");
}
if(isset($_POST['addTest']))
{
    $cat = $_POST['cat'];
    $ui = $_POST['uip'];
    $des = $_POST['description'];
    $dur = $_POST['dur'];
    $tname = $_POST['tname'];
    $course = $_POST['course'];
    $tmarks = $_POST['tmarks'];
    $connect->query("INSERT INTO `test`(`name`, `tui`, `date`, `total_marks`, `obt_marks`, `precentage`, `class`, `course_name`, `duration`,des,`type`) VALUES ('$tname','$ui',NOW(),$tmarks,-1,0,'$cat','$course',$dur,'$des','rag')") or die($connect->error);
    if($connect->insert_id!="")
    $f=1;
    else
        echo 'Something Went Wrong';
}
?>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Test</title>

    <?php include("style.php");?>
</head>
<body>

<?php include("adminHeader.php");

include "connection.php";?>

</body>
<body>
<?php
if(isset($f)&&$f==1) {
    ?>
    <div class="alert alert-success">Saved Successfully.</div>
    <?php
}?>
<script src="js/jquery-2.1.4.min.js"></script>

<!--Google Map-->

<script src="../portal/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../portal/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../portal/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../portal/dist/js/sb-admin-2.js"></script>

<br/>
<div class="container">
    <div class="row center-block"  >
        <div class="col-md-4 col-xs-offset-1">
            <div class="login-panel panel panel-default" style="padding:2%;">
                <div class="panel-heading"><u>Add Test</u></div>
                <div class="panel-body" >
                    <form action="" method="post" enctype="multipart/form-data" class="row m0 contact-form " id="createForm">
                        <p>Select Class<br/>
                            <select name="cat" id="cat" required onchange="window.location.href='?c_id='+this.value" class="form-control">
                                <option value="">--Select One--</option>
                                <option value="6th">6th</option>
                                <option value="7th">7th</option>
                                <option value="8th">8th</option>
                                <option value="9th">9th</option>
                                <option value="10th">10th</option>
                            </select></p>
                        <p>Select Course<br/>
                            <select name="course" id="course" required class="form-control">
                                <option value="" >--Select One--</option>
                                <?php
                                if(isset($_GET['c_id'])) {
                                    $sx = $connect->query("SELECT DISTINCT name FROM courses WHERE category='".$_GET['c_id']."';") or die($connect->error);
                                while ($sxx = $sx->fetch_assoc()) {

                                    ?>
                                    <option><?= $sxx['name'] ?></option>
                                <?php
                                }
                                ?>
                                    <script>$('#cat').val('<?=$_GET['c_id']?>');</script>
                                    <?php

                                }

                                ?>
                            </select></p>
                        <p>Enter Test Name:
                            <input type="text" class="form-control" name="tname" required  placeholder="Name"/>
                        </p>
                        <p>Total Marks:
                            <input type="number" class="form-control" required id="" name="tmarks" placeholder="Marks"/>
                        </p>


                        <p>Duration of Test<br/>
                            <select name="dur" id="dur" class="form-control" required>
                                <option value="">--Select One--</option>
                                <?php
                                for($i=5;$i<=200;$i+=5)
                                    echo '<option value="'.$i.'">'.$i.' minutes</option>';
                                ?>
                            </select></p>




                        <p>Select document:<br/>
                            <input type="button" id="uu"  class="form-control"  onClick="show_form()" value="Upload Document" />
                            <input type="text" id="ui"  name="uip" hidden="hidden" required  />
                        </p>
                        <p>Description:
                            <textarea name="description" id="des" required name="des" placeholder="Description" class="form-control"></textarea>
                        </p><br/>
                        <p>
                            <input type="submit" name="addTest" value="submit" class="form-control btn-block btn-success">
                        </p>
                    </form></div>
            </div>
        </div>
        <div class="col-md-6 col-xs-offset-1" style="height: 600px; overflow: scroll;">
            <div class="login-panel panel panel-default" style="padding:2%;">
                <div class="panel-heading"><u>View Test</u></div>
                <div class="panel-body" >
                    <div class="col-lg-12"><p>Select Class<br/>
                            <select name="cat" id="catt" onchange="window.location.href='?cc_id='+this.value" class="form-control">
                                <option value="">--Select One--</option>
                                <option value="6th">6th</option>
                                <option value="7th">7th</option>
                                <option value="8th">8th</option>
                                <option value="9th">9th</option>
                                <option value="10th">10th</option>
                            </select></p><br/></div>

                    <?php
                    if(isset($_GET['cc_id'])) {

$clas=$_GET['cc_id'];
                        $sxrcx = $connect->query("SELECT * FROM people WHERE type='student' AND class='$clas'");
                        while ($ss = $sxrcx->fetch_assoc()) {


                            ?>


                            <div class="alert alert-success col-lg-12"><span class="col-lg-9"><i
                                        class="fa fa-user fa-2x"></i> <b><?= $ss['name'] ?></b>:<?= $ss['mob'] ?>
                                    <small> <b><a target="_blank" href="mailto:<?= $ss['email'] ?>">Sent Email</a></b> Class:<?= $ss['class'] ?></small></span><span
                                    class="pull-right col-lg-3"><a class="btn btn-sm btn-success"
                                                                   href="showTest.php?hex=<?= $ss['hex'] ?>">View Test</a></span>
                            </div>


                            <?php
                        }
                        ?>
                        <script>$('#catt').val('<?=$_GET['cc_id']?>');</script>
                    <?php
                    }
                    ?>
                    </div>
                </div>
            <div>
    </div></div>
<div class="back" onClick="show_off()" id="bb" style="display:none; z-index:2000; top:0; left:0; background-color:rgba(51,51,51,0.5); position:fixed; width:100%; height:100%;"></div>

<div id="img" style="display:none; z-index:2100; height:auto; position: absolute; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); background-color:transparent; "><div class="container" style="background-color:transparent;">
        <div class="col-md-4 col-xs-offset-4">
            <div class="login-panel panel panel-default" style="padding:2%;">
                <div class="panel-heading">Upload document</div>
                <br/>
                <form id="form" action="ajaxUploadChapter.php" method="post" enctype="multipart/form-data">
                    <input id="uploadImage" type="file"  class="form-control " name="image" /><br/>
                    <input id="button" type="submit" class=" form-control btn-block btn-success" value="Upload">
                    </br>
                </form></div></div>
        <div id="err"></div>


    </div>></div>
<script>

    function validate()
    {
        var f=0;
        if(document.getElementById('name').value=="")
        {
            document.getElementById('name').focus();
            document.getElementById('name').style.backgroundColor="#f0bbbb";
        }else if(document.getElementById('cat').value=="")
        {
            document.getElementById('cat').focus();
            document.getElementById('cat').style.backgroundColor="#f0bbbb";
        }else if(document.getElementById('dur').value=="")
        {

            document.getElementById('dur').focus();
            document.getElementById('dur').style.backgroundColor="#f0bbbb";
        }else if(document.getElementById('des').value=="")
        {
            document.getElementById('des').focus();
            document.getElementById('des').style.backgroundColor="#f0bbbb";
        }
        else if(document.getElementById('uu').value=="Upload Image")
        {
            document.getElementById('uu').focus();
            document.getElementById('uu').style.backgroundColor="#f0bbbb";
        }else{
            $('#createForm').submit();
        }
    }</script>
<script>
    function show_form()
    {
        $('#img').fadeIn(500);

        //$.get("up/index.php", function(data){
        //alert(data);
        //document.getElementById('img').innerHTML=data;
        //});

        back();
    }


    function back()
    {
        $('#bb').fadeIn(300);

        // Display the returned data in browser
        //alert(data);
    }
    function show_off()
    {
        $('#img').fadeOut(200);
        back_off();
    }

    function back_off()
    {
        $('#bb').fadeOut(200);
    }
    $(document).ready(function (e) {
        $("#form").on('submit',(function(e) {
            e.preventDefault();

            $.ajax({
                url: "ajaxUploadChapter.php",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                beforeSend : function()
                {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                },
                success: function(data)
                {
                    if(data=='invalid')
                    {
                        // invalid file format.
                        $("#err").html("Invalid File !").fadeIn();
                    }
                    else
                    {
                        // view uploaded file.
                        $('#ui').val(data);
                        $('#uu').val("Uploaded");
                        show_off();
                    }
                },
                error: function(e)
                {
                    $("#err").html(e).fadeIn();
                }
            });
        }));
    });


</script>
        </div>
    <div class="row">
        <div class="col-md-12" >
            <br/>

            <div class="mu-latest-course-single">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Requested Test</h4>

                    </div>

                    <div class="panel-body">
                        <?php
                        $sxrcx=$connect->query("SELECT * FROM test WHERE  `type`='rag' ORDER BY id DESC");
                        while($ss=$sxrcx->fetch_assoc())
                        {



                            ?>


                            <div class="alert alert-success col-lg-12"><div class="row"><span class="col-lg-7"><i class="fa fa-clipboard fa-2x"></i> <b><?=$ss['course_name']?></b>:<?=$ss['name']?> <small> <b><?=$ss['class']?></b> Duration:<?=$ss['duration']?>min</small></span><span class="pull-right col-lg-5"  ><small>(<?=$ss['date']?>)</small><a  onclick="addYourTest('<?=$ss['id']?>','admin/<?=$ss['tui']?>')" class="pull-right"> <i class="fa fa-download fa-2x"></i></a></span>
                                </div>
                                <div class="row"><span class="pull-left"><small><?=$ss['des']?></small></span><a href="?del=<?=$ss['id']?>" class="pull-right"> Delete</a></div>
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

</body>
