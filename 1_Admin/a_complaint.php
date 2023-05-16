<?php include "1a_header.php" ?>
    
    <div id="templatemo_content_right">
          <div>
            <br><br>
   <fieldset>

      <div class="container-fluid" style =" margin-left: 25%;">

   <br><br> 
        <h2> COMPLAINTS  </h2><br>
        <div class="row mb">
          <!-- page start-->
          


     <?php
                  $q="SELECT * fROM contact where status=0";
                  //echo $q;
                  $m=mysql_query($q,$conn);
                  // if($m){
                  //  echo "good";
                  // }
                  
                  while($r=mysql_fetch_assoc($m))
                    {

?>

        
              <div class="col-md-6">
                <div class="product-item">
                  <?php $name=$r['name']?>
                  <?php $sub=$r['subject']?>
                  <?php $msg=$r['message']?>
                  <!-- <a href="car-details.php?id=<?php echo $key?>"> -->
                    


               <table>
                <tr><td>
Name : </td><td> <input type="text" class="form-control" id="hname" name="hname" value="<?php echo $r['name'];?>" 
                         disabled="disabled"></td></tr>
                    
 <tr><td>              
E mail :</td><td>
                         <input type="text" class="form-control" id="email" name="email" value="<?php echo $r['email'];?>" 
                         disabled="disabled"></td></tr>
  <tr><td>                 
Subject :</td><td>
                         <input type="text" class="form-control" id="sub" name="sub" value="<?php echo $r['subject'];?>" 
                         disabled="disabled"></td></tr>
 <tr><td>                  
Message :</td><td>
                         <input type="text" class="form-control" id="msg" name="msg" value="<?php echo $r['message'];?>" 
                         disabled="disabled"></td></tr>
   <tr><td>                  
               
                <a href="a_reply.php?id=<?php echo $r['id'] ?>">
               <button class="my-1 btn btn-sm btn-success" name="submit" type="submit">REPLY</button>
          </a>
        </td></tr>
              </div>
            </div>
</div>
           <?php

             }
             ?>

              
          </div>
        </div>
      </table>
      </div>
</fieldset>
</div></div></div>
<?php include "99a_footer.php" ?>
   

