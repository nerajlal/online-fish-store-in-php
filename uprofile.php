<?php 
include "uhead.php"; 
include "dbconnect.php"; 
?>
    
    <div id="templatemo_content">
        
        </div> <!-- end of content left -->
        
<center>
<form action="" method="POST">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Update Profile</h2>
            </div>

           <?php

             
              //$p=1;
              session_start();
              //$uname=$_GET['id'];
              $lid=$_SESSION['lkey']; 
              $result = mysql_query("SELECT * FROM login where lid=$lid");

              while($row = mysql_fetch_array($result))
              {
              ?>
     
             

     
            <div class="col-sm-12">
                <label class="text-dark font-weight-medium" for="">User Name</label>
                

                    <input type="email" class="form-control" id="hname" name="email" value="<?php echo $row['email'];?>" 
                    >
                
            </div>
            
            <div class="col-sm-12">
                <label class="text-dark font-weight-medium" for="">Password</label>&nbsp;&nbsp;

                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password'];?>"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required
                    >
            </div>
            <br>
        
            <div class="col-sm-12">
                <label class="text-dark font-weight-medium" for=""></label>
                <div class="input-group mb-2">
            <button class="my-1 btn btn-sm btn-success" name="submit"  type="submit">Update</button>
        </div>
    </div>
    
            <?php
              }
?>
<?php include "99footer.php" ?>
        </div>
    </div></form>
</center>








        
 <!-- end of content right -->
    
        <div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    






<?php
                              //include 'includes/dbconnect.php';
                             if(isset($_POST['submit']))
                             {
                                 
                                
                                  


                                 $sql="update login set email='$_POST[email]',password='$_POST[password]' where lid=$lid";

                                 //echo"$sql";
                                 $result=mysql_query($sql,$conn);
                                if($result)
                                {
                                    echo "<script>alert('Password updated!');location.href='sprofile.php';</script>";
                                }
                                else
                                {
                                    echo "<script>alert('Not updated!');location.href='sprofile.php';</script>";
                                }
                             }  
                                
                         
                            
                        ?>

    
</div>


    

        

        
