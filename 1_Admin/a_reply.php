<?php include "1a_header.php" ?>
    
    <div id="templatemo_content_right">
          <div>
            <br><br>
   <fieldset>
    <center><br><br><br><br>
      <!-- <div class="container-fluid" style =" margin-left: 25%;"> -->

  
        <h2> REPLY  </h2>

              <form id="contact" action="" method="POST" leftmargin='25%'>
               
                  
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                 <br>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                  <br>
                      <button type="submit" id="form-submit" name="msg" class="filled-button">Send Message</button>
                
              </form>
              
            
        </div>
      </div>
    </div>
</fieldset>
</form>
</center></fieldset>
<?php include "99a_footer.php" ?>

</div></div>


     <?php

$id=$_GET['id'];
$q="SELECT * fROM contact where id='$id' ";
                  $m=mysql_query($q,$conn);
while($r=mysql_fetch_array($m))
                    {
                      $email=$r['email'];

if(isset($_POST['msg']))
{
       
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      $u="UPDATE contact SET status='1' where id='$id'";
      $q="INSERT INTO reply(senderid,subject, message) VALUES('$email','$subject', '$message')";
      $m=mysql_query($q,$conn);
      $c=mysql_query($u,$conn);
      if($m)
      {
        echo"<script>alert('Message successfully sent');
          location.href='admin_home.php';
      </script>";
      }
      

}

}
?>
