<?php
include("adminHeader.php");
if(isset($_SESSION['hex'])&&$_SESSION['hex']==""){
    header("Location:index.php");
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="assets/css/main.css" rel="stylesheet">

    <title>Login/SignUp</title>
</head>
<?php



?>
<body><br/>
<section id="form"><!--form-->

    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form action="register.php" id="signupForm" method="post">
                        <select required name="type" class="form-control">
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select><br/>

                        <input type="text" name="name" id="name" placeholder="Name"/>
                        <input type="email" name="email" id="email1" onBlur="check_email(this)" placeholder="Email Address"/>
                        <span id="email_status"></span>
                        <input type="password" name="pass1" id="pass1" placeholder="Password"/>
                        <input type="number" name="mob" id="clas" placeholder="Mobile Number"/>
                        <button type="button" onClick="vall()" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form--><br/><br/>
<?php include("footer.php"); ?>


<script>
    function vall() {


        if (document.getElementById('name').value == "") {
            document.getElementById('name').focus();
            document.getElementById('name').style.backgroundColor = "#f0bbbb";
        } else if (document.getElementById('clas').value == "") {
            document.getElementById('clas').focus();
            document.getElementById('clas').style.backgroundColor = "#f0bbbb";
        }
        else
            if (document.getElementById('email1').value == "") {
                document.getElementById('email1').focus();
                document.getElementById('email1').style.backgroundColor = "#f0bbbb";
            } else if (document.getElementById('pass1').value == "") {

                document.getElementById('pass1').focus();
                document.getElementById('pass1').style.backgroundColor = "#f0bbbb";
            }
            else {
                $('#signupForm').submit();
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
