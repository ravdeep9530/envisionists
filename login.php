<?php
session_start();
if(isset($_SESSION['hex'])&&$_SESSION['hex']!=""){
header("Location:index.php");
}
include"connection.php";
?>

<?php
$title='Login/Sign Up';
include("theader.php");



?>

<link href="assets/css/main.css" rel="stylesheet">


<section id="mu-course-content panel" style="margin: 0; padding: 0; position: static;">
	<div class="container ">
		<div class="row">
<section id="mu-course-content" style="background-color:transparent;">

				<div class="col-lg-4 col-lg-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>

						<?php
						if(isset($_GET['id']))
			{
				$link="?id=".$_GET["id"];
			}else{
				$link="";
			}
						if(isset($_GET["msg"])!=NULL){
                       echo ' <span style="color:RED;">Email/Password is incorrect!!</span>';
						}
						?>
						<form action="validate.php<?php echo $link; ?>"  method="post" id="loginForm" >
							<input type="email" name="email" id="email" placeholder="Email" />
							<input type="password" name="pass" id="pass" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="button" onClick="val_login()"  class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>

						<form action="register.php" id="signupForm" method="post">
							<p><select name="clas" id="clas" class="form-control">
								<option value="">--Select One--</option>
									<option value="6th">6th</option>
									<option value="7th">7th</option>
								<option value="8th">8th</option>
								<option value="9th">9th</option>
								<option value="10th">10th</option>
							</select></p>
							<input type="text" name="name" id="name" placeholder="Name"/>
							<input type="email" name="email" id="email1" onBlur="check_email(this)" placeholder="Email Address"/>
                            <span id="email_status"></span>
							<input type="password" name="pass1" id="pass1" placeholder="Password"/>
							<input type="number" name="mob" id="mob" placeholder="Mobile Number"/>

							<button type="button" onClick="val()" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>


	</section>
		</div>
		</div>
	</section><!--/form--><br/><br/>


<?php include("footer.php"); ?>
<script>
function val()
				{
					if(document.getElementById('name').value=="")
						{
							document.getElementById('name').focus();
							document.getElementById('name').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('clas').value=="")
					{
						document.getElementById('clas').focus();
						document.getElementById('clas').style.backgroundColor="#f0bbbb";
					}else if(document.getElementById('mob').value=="")
					{
						document.getElementById('mob').focus();
						document.getElementById('mob').style.backgroundColor="#f0bbbb";
					}else if(document.getElementById('email1').value=="")
						{
							document.getElementById('email1').focus();
							document.getElementById('email1').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('pass1').value=="")
						{
							
							document.getElementById('pass1').focus();
							document.getElementById('pass1').style.backgroundColor="#f0bbbb";
						}
					else{
							$('#signupForm').submit();
						}
					}
					function val_login()
				{
					 if(document.getElementById('email').value=="")
						{
							document.getElementById('email').focus();
							document.getElementById('email').style.backgroundColor="#f0bbbb";
						}else if(document.getElementById('pass').value=="")
						{
							
							document.getElementById('pass').focus();
							document.getElementById('pass').style.backgroundColor="#f0bbbb";
						}
					else{
							$('#loginForm').submit();
						}
					}
 function check_email(tt)
		{
		var f=0;	
       
	   if(f==0)
	   {
		     $.get("check_email.php?u="+tt.value, function(data){
            // Display the returned data in browser
			//alert(data);
			if(data=="exists"){
				document.getElementById('email_status').innerHTML="<font color='red'>Email Already Exists!!</font>";
				tt.focus();
			}else{

				document.getElementById('email_status').innerHTML="<font color='green'>Available</font>";
			}
           // $("#result").html(data);
        });
	   }
		}</script>
        </body>
</html>