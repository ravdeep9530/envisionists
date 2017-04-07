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

    <title>Add Course</title>

<?php include("style.php");?>
</head>
<body>


<?php include("adminHeader.php");?>
          
       </body>
 <body>
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
                <div class="col-md-4 col-xs-offset-4 ">
                <div class="login-panel panel panel-default" style="padding:2%;">
                    <div class="panel-heading"><u>Add Course</u></div>
                    <div class="panel-body" >
                    <form action="submit_item.php" method="post" enctype="multipart/form-data" class="row m0 contact-form " id="createForm">
                       <p>Select Class<br/>
                        <select name="cat" id="cat" class="form-control">
                        <option value="">--Select One--</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                        <option value="8th">8th</option>
                        <option value="9th">9th</option>
                        <option value="10th">10th</option>
                        </select></p>
                        <p>Enter Course Name:
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </p>
                        

 

<!--<p>Time:<br/>
                        <input type="time" name="time" id="time" value="12:00:00 AM" /></p>
                        </p>-->
<P>
                          <input type="hidden"  class="form-control" id="fee" name="fee" placeholder="Fee">
                        </p>
                        <br/>
                        <!-- <p>Title:<br/>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        </p>-->


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
	<div class="panel-heading">Upload Image</div>
	<br/>
	<form id="form" action="up/ajaxupload.php" method="post" enctype="multipart/form-data">
		<input id="uploadImage" type="file" accept="image/*" class="form-control " name="image" /><br/>
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
        	url: "ajaxupload.php",
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
                    