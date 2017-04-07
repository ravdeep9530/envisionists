<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login
</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Training Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Kreon:400,700,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
</head>

<body>
 <nav class="navbar navbar-default" style=" z-index:11;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> <a  href="index.php#"><img src="assets/img/logo.png" alt=""></a></a>
    </div><br/>
    </div></nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"  >
                <div class="login-panel panel panel-default" style="padding:2%;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                       <form action="validate_login.php" method="post"  class="row m0 contact-form" id="createForm">
                            <fieldset>
                                <div class="form-group">
                                     <input type="text" class="form-control" id="name" name="name" autofocus placeholder="Username">  </div>
                                <div class="form-group">
                                     <input type="password" name="pass" placeholder="Password" id="pass" class="form-control"   />
                                </div>
                             
                                
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               
                                  <input type="button" value="submit" class="btn btn-lg btn-success btn-block"  onClick="submit_form()" >
 
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


            
                    <script>
                    
                    function submit_form()
                    {
						
						if(document.getElementById('name').value=="")
						{
							document.getElementById('name').focus();
							document.getElementById('name').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('pass').value=="")
						{
							document.getElementById('pass').focus();
							document.getElementById('pass').style.backgroundColor="#f0bbbb";
						}else{
							$('#createForm').submit();
						}
                    }</script>
    <!-- jQuery -->
    <script src="../portal/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../portal/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../portal/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../portal/dist/js/sb-admin-2.js"></script>
</body>
</html>
<?php include "footer.php";?>