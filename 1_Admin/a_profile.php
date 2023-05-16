<?php include "1a_header.php" ?>
    
  
        
      <br><br><br>
   
<fieldset><center>
<form action="" method="POST">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Update Profile</h2><br>
            </div>

           <?php

             
              //$p=1;
              $lid='2';
              $result = mysql_query("SELECT * FROM login where lid=$lid");

              while($row = mysql_fetch_array($result))
              {
              ?>
     
             

     
            <div class="col-sm-12">
                <label class="text-dark font-weight-medium" for="">User Name</label>

                    <input type="email" class="form-control" id="hname" name="email" value="<?php echo $row['email'];?>" 
                    >
            </div>
            <br>
            <div class="col-sm-12">
                <label class="text-dark font-weight-medium" for="">Password</label>&nbsp;&nbsp;

                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password'];?>" 
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
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
        </div>

        
    </div>
</form>
</center>
</fieldset>







<?php include "99a_footer.php" ?>

</div>
