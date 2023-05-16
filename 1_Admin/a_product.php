<?php 
include "1a_header.php";
include "../dbconnect.php";
 ?>
    
    
      
<?php
       
              $uname='admin@gmail.com'; 
                  $q="SELECT * fROM product where username='$uname'";
                  $m=mysql_query($q,$conn);
                  while($r=mysql_fetch_assoc($m))
                    {
?>


        <div id="templatemo_content_right">
            <div class="templatemo_product_box">
                <h1><?php echo $r['product']; ?>  <span></span></h1>
          <img src="<?php echo $r['photo']; ?>" alt="image" style="width:100px; height:100px;">
                <div class="product_info">
                    <p><?php echo $r['Shop']; ?></p>
                  <h3>Rs <?php echo $r['price']; echo '/'; echo $r['quantity']; ?></h3>
                    <div class="buy_now_button"><a href="a_edit.php?id=<?php echo $r['id']; ?>">Edit</a></div>
                    <div class="buy_now_button"><a href="a_delete.php?id=<?php echo $r['id']; ?>">Delete</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            
            
            

            <?php
        }
            ?>
 <!-- end of content right -->
    
        <div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
</div>
    
<?php include "99a_footer.php" ?>
