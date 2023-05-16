<?php 
include "shead.php"; 
include "dbconnect.php"; 
?>
    
    <div id="templatemo_content">
    	


<center>
    <b><u><h1 style="color: white">ADD FISH</h1></u></b><br><br>
<form method="POST" enctype="multipart/form-data">
    <table>
        <td>City</td><td><input type="text" name="city" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
        </tr>
        <tr>
            <td>Shop Name</td><td><input type="text" name="sname" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td>
        </tr>
        <tr>
            <td>Fish Name</td><td><input type="text" name="name" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td>
        </tr>
        <tr>
            <td>Quantity</td><td><input type="text" name="quantity" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
        </tr>
        <tr>
            <td>Price</td><td><input type="number" name="price" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
        </tr>
        <tr>
             <tr><td><input type="file" name="photo" required> </td><td>
        <input type="submit" name="submit" value="SUBMIT"></td></tr>


</tr></table></form></center>




                     <?php


session_start();
    $email=$_SESSION['email']; 
    //echo "$email";




if(isset($_POST['submit'])){
     $target_dir = "product/";
    $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        //echo "The file ". htmlspecialchars(basename( $_FILES["photo"]["name"])). " has been uploaded.";
   } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $city=$_POST['city'];
    $sname=$_POST['sname'];
    $name=$_POST['name'];
  $quantity=$_POST['quantity'];
    $price=$_POST['price'];
 

    $q="INSERT into product(username,city,shop,product,quantity,price,photo) values('$email','$city','$sname','$name','$quantity','$price','$target_file')";
    if(mysql_query($q,$conn))
    {
        echo "<script>alert('Product Added!');
                           
                    </script>";

    }
    else{
         echo "<script>alert('Can't Add Product!');
                            location.href='saddproduct.php';
                    </script>";
    }



}

                     ?>






        
 <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
<?php include "99footer.php" ?>