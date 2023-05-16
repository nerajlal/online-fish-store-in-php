<?php 
include "shead.php"; 
include "dbconnect.php"; 
?>
    
    
        

<?php
$id=$_GET['id'];
                  $q="SELECT * fROM product where id=$id";
                  $m=mysql_query($q,$conn);
                  while($r=mysql_fetch_assoc($m))
                    {
?>

<center>
    <b><u><h1 style="color: white">EDIT PRODUCT</h1></u></b><br><br>
<form method="POST" enctype="multipart/form-data">
    <table>
        <td>City</td><td><input type="text" name="city" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" placeholder="<?php echo $r['city']; ?>" required></td>
        </tr>
        <tr>
            <td>Shop Name</td><td><input type="text" name="sname" class="form-control" style="margin-bottom: 8px;margin-left: 8px" placeholder="<?php echo $r['Shop']; ?>" required></td>
        </tr>
        <tr>
            <td>Fish Name</td><td><input type="text" name="name" class="form-control" style="margin-bottom: 8px;margin-left: 8px" placeholder="<?php echo $r['product']; ?>" required></td>
        </tr>
        <tr>
            <td>Quantity</td><td><input type="text" name="quantity" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" placeholder="<?php echo $r['quantity']; ?>" required></td>
        </tr>
        <tr>
            <td>Price</td><td><input type="number" name="price" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" placeholder="<?php echo $r['price']; ?>" required></td>
        </tr>
        <tr>
             <td>
        <input type="submit" name="submit" value="SUBMIT"></td></tr>


</tr></table></form></center>

<?php
}
?>


                     <?php


session_start();
    $email=$_SESSION['email']; 
    




if(isset($_POST['submit'])){
    
    $city=$_POST['city'];
    $sname=$_POST['sname'];
    $name=$_POST['name'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
 

    $q="update product set city='$city',shop='$sname',product='$name',quantity='$quantity',price='$price' where username='$email'";
    if(mysql_query($q,$conn))
    {
        echo "<script>alert('Product Updated!');
                             location.href='smyproduct.php';
                    </script>";

    }
    else{
         echo "<script>alert('Can't Update Product!');
                            location.href='smyproduct.php';
                    </script>";
    }



}

                     ?>






        
 <!-- end of content right -->
<?php include "99footer.php" ?>
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
