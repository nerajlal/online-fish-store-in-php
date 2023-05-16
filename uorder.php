<?php 
include "uhead.php"; 
include "dbconnect.php"; 
?>
    
    <div id="templatemo_content">
        
        </div> <!-- end of content left -->
        
<center> 
<form method="POST" action="">
    <div class="search-container">
    
  </div>
   <table border="2">
    <tr>
      <td>Product</td>
      <td>Quantity</td>
      <td>Price</td>
      <td>Status</td>
      <td>Action</td>
    </tr>
<?php
session_start();
              $uname=$_SESSION['email']; 
  $sql="select * from purchase where user='$uname' and status!='4'";
                  $m=mysql_query($sql,$conn);
                           
                  while($r=mysql_fetch_array($m))
                    {
                  $shop=$r['shop'];
                  $product=$r['product'];
                  $quantity=$r['quantity'];
                  $price=$r['price'];
                  $status=$r['status'];
                  ?>
                  <br>

                    <tr>
                      <td><?php echo $product ?></td>
                      <td><?php echo $quantity ?></td>
                      <td><?php echo $price ?></td>
                      <td><?php 
                            if($status==0)
                              echo 'Not Delivered';
                            else if($status==1)
                              echo 'Delivered';
                            else if($status==3)
                              echo 'Out For Delivery';

                       ?></td>
                     <td><input type="submit" name="submit" value="Cancel Order">
                     </tr>
                


                  <?php
                } 

?>
  </table>
<?php include "99footer.php" ?>
  
<?php

if(isset($_POST['submit'])){
 
  $q="update purchase set status='4' where user='$uname' and shop='$shop' and product='$product'";
  // echo $q;
  if(mysql_query($q,$conn))
  {
          echo "<script>alert('Item Cancelled!');
              location.href='uorder.php';
          </script>";
        }
  }
?>