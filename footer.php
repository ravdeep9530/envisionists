 <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
           <!-- <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="index.php">Features</a></li>
                  <li><a href="show_course.php">Course</a></li></ul>
              </div>
            </div>-->
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="login.php">Get Started</a></li>
                  
                  
                  <li><a href="index.php">Latest Course</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                                   
                </ul>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>398 Gill road Miller Ganj</p>
                  <p>Ludhiana, Punjab</p>
                  <p>Website: www.envisionists.in</p>
                  <p>Email: support@envisionists.in</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end footer top -->
   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title" id="myModalLabel">Subscribe To Our Services</h4>


         </div>
         <div class="modal-body">

           <!--End mc_embed_signup-->
<?php
if(isset($_POST['subscribe']))
{
  $email=mysqli_real_escape_string($connect,$_POST['emaill']);
  $fname=mysqli_real_escape_string($connect,$_POST['fname']);
  $clas=mysqli_real_escape_string($connect,$_POST['clas']);
  $mob=mysqli_real_escape_string($connect,$_POST['mob']);
  $connect->query("INSERT INTO subscribe (email,name,mob,clas,date) VALUES('$email','$fname','$clas','$mob',NOW())") or die($connect->error);
}
 ?>
           <!-- Begin MailChimp Signup Form -->
           <form class="form-horizontal" action="" method="post">
             <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
               <div class="col-sm-10">
                 <input type="email" value="" name="emaill" required class="required email form-control" id="mce-EMAIL"/>
               </div>

             </div>
             <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
               <div class="col-sm-10">
                 <input type="text" value="" name="fname" required class="required email form-control" id="mce-EMAIL"/>
               </div>

             </div>
             <div class="form-group"></div>
             <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Class</label>
               <div class="col-sm-10">
                 <input type="text" value="" name="clas" required class="required email form-control" id="mce-EMAIL"/>
               </div>

             </div>
             <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Mobile No.</label>
               <div class="col-sm-10">
                 <input type="text" value="" name="mob" required class="required email form-control" id="mce-EMAIL"/>
               </div>

             </div>
             <div id="mce-responses" class="clear">
               <div class="response" id="mce-error-response" style="display:none"></div>
               <div class="response" id="mce-success-response" style="display:none"></div>
             </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
             <div style="position: absolute; left: -5000px;">

               <input type="email" name="email" value=""/></div>
             <div class="form-group remove-bottom">
               <div class="col-sm-offset-2 col-sm-10">
                 <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default"/>
               </div>
             </div>
           </form>

           <!--End mc_embed_signup-->
         </div>

       </div>
     </div>
   </div>
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by <b>WorldWiki</b>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 