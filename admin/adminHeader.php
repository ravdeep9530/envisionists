<?php
session_start();
if(isset($_GET['sat'])&&$_GET['sat']=='logout')
{
unset($_SESSION['verify']);
}

if(isset($_SESSION['verify'])&&$_SESSION['verify']=='Sohi')
{

}else{
    header("location:../admin");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>Envisionists</title>
<title>Requested Test</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<?php include "../style.php";
?>
<body>
           <nav class="navbar navbar-default" style="font-size: small;">
           <BR/>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> </a>
    </div><br/>
    <ul class="nav navbar-nav table-responsive">
      <li class="active"><a href="add_item.php">Add Course</a></li>
       <li  class="active" ><a href="delete_item.php">Delete Course</a></li>
       <li  class="active" ><a href="view_contact.php">View Contacts</a></li>
        <li class="active"><a href="myMessage.php">My Message</a></li>
        <li class="active"><a href="addChapter.php">Add Chapter</a></li>
        <li  class="active" ><a href="robotics.php">Robotics</a></li>
        <li  class="active" ><a href="addAd.php">Manage AD</a></li>
        <li  class="active" ><a href="personal.php">personality</a></li>
        <li  class="active" ><a href="add_test.php">Manage Test</a></li>
        <li  class="active" ><a href="suscriber.php">Suscriber</a></li>
        <li  class="active" ><a href="add_acc.php">A/C</a></li>
        <li  class="active" ><a href="requestedTest.php">Requested Test</a></li>
        <li  class="active" ><a href="list.php">Student List</a></li>
        <li  class="active" ><a href="tlist.php">Teacher List</a></li>
          <li  class="active" ><a href="?sat=logout">Logout</a></li>
          
     
     
    </ul>
  </div>
 </div></div></div></div></div></section>
</nav>
</body>
</html>