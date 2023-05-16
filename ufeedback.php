<?php 
include "uhead.php"; 
include "dbconnect.php"; 
?>
    
    <div id="templatemo_content">
    	
        </div> <!-- end of content left -->
        




    
<?php
session_start();
  $uname=$_SESSION['email'];
?>

<center>
       <form action="" method="POST">
        <!-- <div class="card card-default"> -->
            <!-- <div class="card-header card-header-border-bottom"> -->
                <h2>Send Feedback</h2>
            <!-- </div> -->

         <form id="contact" action="" method="POST">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
<!--                   <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div> -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" name="msg" class="filled-button">Send Message</button>
                    </fieldset>
<?php include "99footer.php" ?>
                  </div>
                </div>
              </form>



    <?php
include('dbconnect.php');

if(isset($_POST['msg']))
{
       $name=$_POST['name'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      session_start();
      $lid=$_SESSION['lkey'];

      $q="INSERT INTO CONTACT(senderid,name, email, subject, message) VALUES('$lid','$name','$uname','$subject', '$message')";
      $m=mysql_query($q,$conn);
      if($m)
      {
        echo"<script>alert('Message successfully sent');
          location.href='sfeedback.php';
      </script>";
      }
      

}


?>





        
 <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
