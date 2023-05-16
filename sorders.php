 <?php 
include "shead.php"; 
include "dbconnect.php"; 
?>
    
    <div id="templatemo_content">
      
            
            
        </div> 



<form method="POST" action="">

 <table border='2'>
                    <tr>
                        <td>Name</td>
                        <td>Product</td>
                        <td>Quantity</td>
                        <td>Price</td>
                        <td>Address</td>
                        <td>Phone</td>
                        <td>Status</td>
                        <td>Deliver</td>
                        <td>Deliver</td>
                    </tr>
<?php
session_start();
 $uname=$_SESSION['email']; 
                  $q="SELECT * fROM purchase where shop='$uname' and status='0'||status='2'||status='3'";
                  $m=mysql_query($q,$conn);
                  while($r=mysql_fetch_assoc($m))
                    {
                      $name=$r['name'];
                      $user=$r['user'];
                      $shop=$r['shop'];
                      $address=$r['address'];
                      $phone=$r['phone'];
                      $product=$r['product'];
                      $quantity=$r['quantity'];
                      $price=$r['price'];
                      $status=$r['status'];
?>
                    <tr>
                      
                        <td><?php echo $name; ?></td>
                        <td><?php echo $product; ?></td>
                        <td><?php echo $quantity; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php
                        if($status==0)
                          echo 'Ordered';
                        else if($status==2)
                          echo 'Order Cancelled';
                        ?>
                      </td>
                      <td><input type="submit" name="submited" value="Out For Delivery"></td>
                      <td><input type="submit" name="submit" value="Delivered"></td></tr>
                  
<?php
}
?>
</table></form>
<?php

if(isset($_POST['submit'])){
 
  $q="update purchase set status='1' where shop='$shop' and user='$user' and product='$product'";
  // echo $q;
  if(mysql_query($q,$conn))
  {
    
          echo "<script>alert('Updated!');
              location.href='sorders.php';
          </script>";
        }
  }


?>

<?php

if(isset($_POST['submited'])){
  $q="update purchase set status='3' where shop='$shop' and user='$user' and product='$product'";
  // echo $q;
  if(mysql_query($q,$conn))
  {
          echo "<script>alert('Updated!');
              location.href='sorders.php';
          </script>";
        }
  }


?>
<?php include "99footer.php" ?>
