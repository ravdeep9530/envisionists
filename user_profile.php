<?php  session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $title='User Profile';?>
<?php include("theader.php");?>
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>User Profile</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">User Profile</li>
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

                    <div class="col-lg-5 ">
                        <div class="panel panel-default">
                            <div class="panel-heading" >
                                Update Profile
                            </div>
                            <div class="panel-body">

                                    <div class="col-lg-12">

                                        <?php
                                        include("connection.php");
                                        $query="SELECT * FROM  people WHERE hex='$hex'";

                                        $result=$connect->query($query);

                                        while($row = $result->fetch_assoc())
                                        {?>
                                        <h3 style="font-size: 24px; ">Edit Profile</h3>
                                        <input id="status_p" style="display:none;" class="btn btn-outline btn-success" type="button" value="Update Successfully" >
                                        <form action="update_profile_details.jsp?" method="POST">
                                            <b>Registered First name:</b></br>

                                            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['name'];?>" /></br>
                                            <!-- <b>Registered Username:</b></br>
                    <input type="text" class="form-control" name="lname" value="<?php echo $row['username'];?>" /></br>-->
                                            <b>Registered email:</b></br>
                                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>" /></br>
                                            <?php break;}?>
                                            <input class="btn btn-outline btn-success" onClick="val_info_form()"  type="button" value="Update Profile" >
                                        </form>
                                    </div> </div> </div> </div>
                    <div class="col-lg-5">
                        <div class="panel panel-default">
                            <div class="panel-heading" >
                                Change Password
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 style="font-size: 24px;">Change password</h3>
                                        <input id="status" style="display:none;" class="btn btn-outline btn-success" type="button" value="Password not Matched" >
                                        <form action="update_profile_password.jsp?" method="POST" onsubmit="return val_form()">
                                            <b>Enter old password:</b></br>
                                            <input type="password" name="passOld" class="form-control" id="op"  /></br>
                                            <b>Enter new password:</b></br>
                                            <input type="password" name="pass" class="form-control" id="np" /></br>
                                            <b>Confirm password:</b></br>
                                            <input type="password" name="cpass" class="form-control"  id="ncp" /></br>

                                            <input id="change" class="btn btn-outline btn-success" type="button" onclick="return val_form() " value="Update Password" >
                                        </form>


                                    </div> </div></div> </div>
                        <!-- #wraper-->
                    </div> </div>
                        </div>

            </div></section>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>

            <script>
            $(document).ready(function(){
    $("#change").click(function(){
		
    });
});
            function val_form()
            {
                var f=0;
                if(document.getElementById('op').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('op').style.borderColor="red";
                    document.getElementById('op').focus();
                    return false;
                    f=1;
                }
                if(document.getElementById('np').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('np').style.borderColor="red";
                    document.getElementById('np').focus();
                    return false;
                    f=1;
                }
                if(document.getElementById('ncp').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('ncp').style.borderColor="red";
                    document.getElementById('ncp').focus();
                    return false;
                    f=1;
                }
                if(document.getElementById('np').value!=document.getElementById('ncp').value)
                {
                    alert("Password not matched!!");
                    document.getElementById('np').style.borderColor="red";
                    document.getElementById('np').focus();
                    document.getElementById('ncp').style.borderColor="red";
                    document.getElementById('ncp').value="";
                    return false;
                    f=1;
                }
               
               if(f==0)
               {var op=document.getElementById('op').value;
		var cp=document.getElementById('np').value;
        $.get("update_pass.php?op="+op+"&np="+cp+"&hex=<?php echo $hex;?>", function(data){
            // Display the returned data in browser
			//alert(data);
			if(data=="not"){
				$('#status').val("Old Password Not Matched!!");
			$('#status').fadeIn(300).delay(1000).fadeOut(400);}else{
				$('#status').val("Password Changed Successfully");
				$('#status').fadeIn(300).delay(1000).fadeOut(400);
			document.getElementById('op').value="";
		document.getElementById('np').value="";
		document.getElementById('ncp').value="";}
           // $("#result").html(data);
        });//sendInfo();
            }
                return  true;
            }
			
			 function val_info_form()
            {
                var f=0;
                if(document.getElementById('fname').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('fname').style.borderColor="red";
                    document.getElementById('fname').focus();
                    return false;
                    f=1;
                }
                if(document.getElementById('email').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('email').style.borderColor="red";
                    document.getElementById('email').focus();
                    return false;
                    f=1;
                }
                
                
               
               if(f==0)
               {var op=document.getElementById('fname').value;
		var cp=document.getElementById('email').value;
		
        $.get("update_profile.php?fname="+op+"&email="+cp+"&hex=<?php echo $hex;?>", function(data){
            // Display the returned data in browser
			//alert(data);
			if(data=="not"){}else{
				
				$('#status_p').fadeIn(300).delay(1000).fadeOut(400);
			}
           // $("#result").html(data);
        });//sendInfo();
            }
                return  true;
            }
        </script>
        <?php include("footer.php");?>

</html>