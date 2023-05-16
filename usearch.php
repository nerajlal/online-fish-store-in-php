<?php
include('uhead.php');
 include('dbconnect.php');
?>
<html>
<head>
  <style>
/* CSS styles */
.search-container {
  position: relative;
  display: inline-block;
}

input[type="text"] {
  padding: 10px 20px;
  border-radius: 30px;
  border: 2px solid #ccc;
  font-family: 'FontAwesome';
}

input[type="text"]::placeholder {
  font-family: 'FontAwesome';
}

button[type="submit"] {
  position: absolute;
  right: 0;
  top: 0;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 30px;
  cursor: pointer;
}
button[type="submit"]::before {
  content: "\f002";
  font-family: 'FontAwesome';
}
  </style>
</head>
<div id="sticky_header"></div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Wrapper ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 <div class="site_wrapper bg_white"> 
  <section id="home" class="section_scroll welcome_area" data-scroll-index="0"> 
        <div class="bg_overlay bg_image page_cover" style="background-image:url('image/smartcity.jpg')"></div>
            <div id="particles-js"></div>
            <div class="home_wrapper_info"> 
              <div class="container"> <div class="row justify-content-center"> 
                <div class="col-lg-12">
                 <div class="home_text_block text-center">
                  <h3><span></span></h3>
<form method="GET" action="">
    <div class="search-container">
    <input type="text" name="place" id="search" placeholder=" Place">
    <input type="text" name="search" id="search" placeholder=" Fish...">
    <button type="submit">
      <span class="visually-hidden"></span>
    </button>
  </div>
<?php
if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $place = $_GET['place'];
  $sql="select * from product where product='$search' and city='$place'";
  //echo "$sql";
                  $m=mysql_query($sql,$conn);
                           
       ?>           
                  <br>
<div id="templatemo_content">
      
        </div> <!-- end of content left -->
        <?php
       session_start();
              //$uname=$_GET['id'];
              $uname=$_SESSION['email']; 
                 while($r=mysql_fetch_array($m))
                    {
                  $id=$r['id'];
                  $city=$r['city'];
                  $shop=$r['Shop'];
                  $product=$r['product'];
                  $quantity=$r['quantity'];
                  $price=$r['price'];
                  $photo=$r['photo'];
                  ?>

        <div id="templatemo_content_right">
            <div class="templatemo_product_box">
                <h1><?php echo $r['product']; ?>  <span></span></h1>
          <img src="<?php echo $r['photo']; ?>" alt="image" style="width:100px; height:100px;">
                <div class="product_info">
                    <p><?php echo $r['Shop']; ?></p>
                  <h3>Rs <?php echo $r['price']; echo '/'; echo $r['quantity']; ?></h3>
                    <!-- <div class="buy_now_button"><a href="sedit.php?id=<?php echo $r['id']; ?>">Edit</a></div> -->
                    <div class="buy_now_button"><a href="ubuy.php?id=<?php echo $r['id']; ?>">BUY</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            <?php
        }
            
                   



                  
                } 

?>


<?php include "99footer.php" ?>
