<?php 
include "shead.php"; 
include "dbconnect.php"; 
?>
    
    <div id="templatemo_content">
    	
            
        </div> <!-- end of content left -->
        

<?php
       session_start();
              //$uname=$_GET['id'];
              $uname=$_SESSION['email']; 
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
                    <div class="buy_now_button"><a href="sedit.php?id=<?php echo $r['id']; ?>">Edit</a></div>
                    <div class="buy_now_button"><a href="sdelete.php?id=<?php echo $r['id']; ?>">Delete</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            
            
            

            <?php
        }
            ?>
 <!-- end of content right -->
<?php include "99footer.php" ?>
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
