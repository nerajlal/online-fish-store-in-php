<?php 
include "uhead.php"; 
include "dbconnect.php"; 
?>
    
    <div id="templatemo_content">
    	
            </div>
            
            
        </div> <!-- end of content left -->
        




    


<center>
      <form action="" method="POST">
        <div id="templatemo_content_right">
          
          <!-- <div class="card card-default"> -->
              

           <?php

             
              $p=1;
                
             session_start();
        $uname=$_SESSION['email'];
              $result = "SELECT * FROM reply where senderid='$uname'";
              $m=mysql_query($result,$conn);
              while($row = mysql_fetch_assoc($m))
              {
              ?>
             
               <div class="col-sm-12">
                    <!-- <label class="text-dark font-weight-medium" for="">Author</label> -->
                    <!-- <div class="input-group mb-2"> -->

                         <input type="text" class="form-control" id="hname" name="hname" value="<?php echo $row['author'];?>" 
                         disabled="disabled">
                    <!-- </div> -->
               </div>
                    
               <div class="col-sm-12">
                    <!-- <label class="text-dark font-weight-medium" for="">Subject</label> -->
                    <!-- <div class="input-group mb-2"> -->

                         <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['subject'];?>" 
                         disabled="disabled">
                    </div>
               <!-- </div> -->
               
               <div class="col-sm-12">
                    <!-- <label class="text-dark font-weight-medium" for="">Message</label> -->
                    <!-- <div class="input-group mb-2"> -->

                         <input type="text" class="form-control" id="sub" name="sub" value="<?php echo $row['message'];?>" 
                         disabled="disabled">
                    <!-- </div> -->
               </div>

               
               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for=""></label>
                    <div class="input-group mb-2">
          <!-- <a href=".php"
               <button class="my-1 btn btn-sm btn-success" name="submit"  type="submit">REPLY</button> -->
          </a>
          </div>
     </div>
     
     

              

               
               <?php
                 }
?>
          </div>
<?php include "99footer.php" ?>

     </div></form>
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
