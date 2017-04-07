<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
	
   
	<script type="text/javascript" src="../up/js/jquery-1.11.3-jquery.min.js"></script>
	<script type="text/javascript" src="../up/js/script.js"></script>
    <?php include("../style.php");?>
</head>
<body style="background-color:transparent;">
<div class="container" style="background-color:transparent;">
<div class="col-md-10">
                <div class="login-panel panel panel-default" style="padding:2%;">
	<div class="panel-heading">Upload Image</div>
	<br/>
	<form id="form" action="up/ajaxupload.php" method="post" enctype="multipart/form-data">
		<input id="uploadImage" type="file" accept="image/*" class="form-control " name="image" /><br/>
		<input id="button" type="submit" class=" form-control btn-block btn-success" value="Upload">
        </br>
	</form></div></div>
    <div id="err"></div>
	
	
</div>
</body>
</html>