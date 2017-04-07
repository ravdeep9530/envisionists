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

    <title>Add Chapter</title>

    <?php include("style.php");
    include "connection.php";?>
    <?php
    if(isset($_POST['course'])) {

        $cname = $_POST['course'];

        $cat = $_POST['cat'];
        $ui = $_POST['uip'];
        $c_name = $_POST['chname'];
        echo $c_name;
        $des = $_POST['description'];
echo '<scritp>alert("fddf");</scritp>';

        echo $des;

        $f=0;
        $q = "INSERT INTO chapter (class,course_id,cui,date,description,chapter_name) VALUES ('$cat','$cname','$ui','" . date("Y-M-d") . "','$des','$c_name');";

        //echo $q;

        $retval = $connect->query($q) or die($connect->error);
        if (!$retval) {
            die('Could not enter dataaa: ' . $connect->error);
        } else {
            $f=1;

        }

    }
    if(isset($_GET['cn_id'])) {
        $cid=$_GET['cn_id'];
$connect->query("DELETE FROM `chapter_name` WHERE name_id=$cid");
    }
    if(isset($_POST['cnameadd'])) {
        $cname = $_POST['cname'];

        $cat = $_POST['catt'];
        $connect->query("INSERT INTO `chapter_name`(`name`, `class`) VALUES ('$cname','$cat')");
    }

    ?>
</head>
<body>


<?php

include("adminHeader.php");?>

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
        <div class="col-md-4  ">
            <div class="login-panel panel panel-default" style="padding:2%;">
                <div class="panel-heading"><u>Add Chapter</u></div>
                <div class="panel-body" >
                    <form action="" method="post"  class="row m0 contact-form ">
                        <p>Select Class<br/>
                            <select name="catt" id="catt" required  class="form-control">
                                <option value="">--Select One--</option>
                                <option value="6th">6th</option>
                                <option value="7th">7th</option>
                                <option value="8th">8th</option>
                                <option value="9th">9th</option>
                                <option value="10th">10th</option>
                            </select></p>
                    <br/>    <p>  <input type="text" required id="cname" class="form-control" name="cname" placeholder="Chapter Name"/></p>
                       <br/> <p>
                            <input type="submit" value="submit" name="cnameadd" class="form-control btn-block btn-success">
                        </p>
                        </form>
                    <br/>
                    <div class="col-lg-12">
                        <table class="table  table-bordered">

                            <tr><th>Class</th><th>Chapter Name</th><th>Delete</th></tr>
                        <?php
                        $r=$connect->query("SELECT * FROM chapter_name");
                        while($rr=$r->fetch_assoc())
                        {
                            ?>
                            <tr><td><?=$rr['class']?></td><td><?=$rr['name']?>  </td><td><a href="?cn_id=<?=$rr['name_id']?>">Delete</a> </td></tr>
                        <?php
                        }
                        ?>
                            </table>
                    </div>
                    </div>
                </div>
            </div>

        <div class="col-md-4  ">
            <div class="login-panel panel panel-default" style="padding:2%;">
                <div class="panel-heading"><u>Add Chapter Part</u></div>
                <div class="panel-body" >
                    <form action="" method="post" enctype="multipart/form-data" class="row m0 contact-form " id="createForm">
                        <p>Select Class<br/>
                            <select name="cat" id="cat" onchange="window.location.href='?c_id='+this.value" class="form-control">
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
                        <p>Select Course<br/>
                            <select name="chname" id="chname" required class="form-control">
                                <option value="" >--Select One--</option>
                                <?php
                                if(isset($_GET['c_id'])) {
                                    $sx = $connect->query("SELECT DISTINCT name FROM chapter_name WHERE class='".$_GET['c_id']."';") or die($connect->error);
                                while ($sxx = $sx->fetch_assoc()) {

                                    ?>
                                    <option><?= $sxx['name'] ?></option>
                                <?php
                                }
                                ?>

                                    <?php

                                }

                                ?>
                            </select></p>


                        <!--<p>Time:<br/>
                                                <input type="time" name="time" id="time" value="12:00:00 AM" /></p>
                                                </p>-->


                        <!-- <p>Title:<br/>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        </p>-->
                        <p>Description:
                            <textarea name="description" id="des" name="des" placeholder="Description" class="form-control"></textarea>
                        </p>
                        <p>Select Document:<br/>
                            <input type="button" id="uu"  class="form-control"  onClick="show_form()" value="Upload Document" />
                            <input type="text" id="ui"  name="uip" hidden="hidden" value="Upload Image" />
                        </p>
                       <br/>
                        <p>
                            <input type="button" onClick="validate()" value="submit" class="form-control btn-block btn-success">
                        </p>
                    </form></div>
            </div>
        </div>
    </div></div>
<div class="back" onClick="show_off()" id="bb" style="display:none; z-index:2000; top:0; left:0; background-color:rgba(51,51,51,0.5); position:fixed; width:100%; height:100%;"></div>

<div id="img" style="display:none; z-index:2100; height:auto; position: absolute; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); background-color:transparent; "><div class="container" style="background-color:transparent;">
        <div class="col-md-4 col-xs-offset-4">
            <div class="login-panel panel panel-default" style="padding:2%;">
                <div class="panel-heading">Upload Document</div>
                <br/>
                <form id="form" action="up/ajaxupload.php" method="post" enctype="multipart/form-data">
                    <input id="uploadImage" type="file"  class="form-control " name="image" /><br/>
                    <input id="button" type="submit" class=" form-control btn-block btn-success" value="Upload">
                    </br>
                </form></div></div>
        <div id="err"></div>


    </div></div>

<script>

    function validate()
    {
        var f=0;
         if(document.getElementById('cat').value=="")
        {//alert(document.getElementById('cat').value);
            document.getElementById('cat').focus();
            document.getElementById('cat').style.backgroundColor="#f0bbbb";
        }else if(document.getElementById('course').value=="")
        {

            document.getElementById('course').focus();
            document.getElementById('course').style.backgroundColor="#f0bbbb";
        }else if(document.getElementById('chname').value=="")
         {

             document.getElementById('chname').focus();
             document.getElementById('chname').style.backgroundColor="#f0bbbb";
         }else if(document.getElementById('des').value=="")
        {
            document.getElementById('des').focus();

            document.getElementById('des').style.backgroundColor="#f0bbbb";
        }
        else if(document.getElementById('ui').value=="Upload Image")
        {
            alert('Firstly Select Document!!');
            document.getElementById('ui').focus();
            document.getElementById('ui').style.backgroundColor="#f0bbbb";
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
</body>
