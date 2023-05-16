<?php 
include "uhead.php"; 
include "dbconnect.php"; 
?>
    
    <div id="templatemo_content">
    	
        </div>



<?php
session_start();
    $uname=$_SESSION['email']; 
$id=$_GET['id'];
//$quantity=$_POST['quantity'];

$q="SELECT * fROM product where id=$id";
//echo $q;
                  $m=mysql_query($q,$conn);
while($r=mysql_fetch_array($m))
                    {
                      $shop=$r['username'];
                      $city=$r['city'];
                      $product=$r['product'];
                      $price=$r['price'];
                      $quantitya=$r['quantity'];
              }
              ?>
              <?php
if(isset($_POST['submit'])){

  $quantity=$_POST['quantity'];
  $name=$_POST['name'];
  //$price=$_POST['price'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $price1=$price*$quantity;
  
  $q="INSERT into purchase(name,user,shop,address,phone,product,quantity,price) values('$name','$uname','$shop','$address','$phone','$product','$quantity','$price1')";
  // echo $q;
  if(mysql_query($q,$conn))
  {
    
          echo "<script>alert('Product Ordered!');
              location.href='usearch.php';
          </script>";
        }
  }


?>


                  <form action="" method="POST">
                    <center>
                    <table>
                    <tr><td>Quantity:</td><td><input type="number" name="quantity" placeholder="Quantity in kg" required></td></tr>
                    <tr><td>Name:</td><td><input type="text" name="name" placeholder="Your Name" pattern="[a-zA-Z]{3,30}" title="10 digit phone number" required></td></tr>
                    <tr><td>Address:</td><td><input type="text" name="address" placeholder="Address to deliver" required></td></tr>
                    <tr><td>Phone:</td><td><input type="text" name="phone" placeholder="Contact Number" pattern="[0-9]{10}" title="10 digit phone number" required></td></tr>
                    <tr><td>Price:</td><td><input type="text" name="price" placeholder="<?php echo $price."/".$quantitya;  ?>" readonly></td></tr>
                     <tr><td><input type='submit' name="submit" value="BUY"></td></tr>
                 </table>
                 </center>
                  </form>
<?php include "99footer.php" ?>




        