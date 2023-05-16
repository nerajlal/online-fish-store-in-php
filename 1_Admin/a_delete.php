<?php
include "../dbconnect.php"; 
$id=$_GET['id'];
 $q="delete from product  where id='$id'";
    if(mysql_query($q,$conn))
    {
        echo "<script>alert('Product Deleted!');
                             location.href='a_product.php';
                    </script>";

    }
    else{
         echo "<script>alert('Can't Deleted Product!');
                            location.href='a_product.php';
                    </script>";
    }



?>