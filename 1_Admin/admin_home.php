<?php 
include "1a_header.php";
include "../dbconnect.php"; 
 ?>
    
   <?php
   $a="select count(user) from login where user='shop' and status='1'";
   $m=mysql_query($a,$conn);
   $z1 = mysql_fetch_array($m);

   $b="select count(user) from login where user='shop' and status='2'";
   $n=mysql_query($b,$conn);
   $z2 = mysql_fetch_array($n);

   $c="select count(user) from login where user='user' and status='1'";
   $o=mysql_query($c,$conn);
   $z3 = mysql_fetch_array($o);

   $d="select count(product) from product";
   $p=mysql_query($d,$conn);
   $z4 = mysql_fetch_array($p);

   ?>
        <div id="templatemo_content_right">
        	<div class="templatemo_product_box">
            	<h1>Active Shops  <span></span></h1>
   	            <img src="images/default_profile.jpg" alt="image" />
                <div class="product_info">
                	<p>Number of Active Shops :</p>
                  <h3><?php echo $z1[0]; ?></h3>
                    <!-- <div class="buy_now_button"><a href="#">Buy Now</a></div>
                    <div class="detail_button"><a href="#">Detail</a></div> -->
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            
            <div class="cleaner_with_width">&nbsp;</div>
            <div class="templatemo_product_box">
            	<h1>Rejected Shops<span></span></h1>
   	            <img src="images/default_profile.jpg" alt="image" />
                <div class="product_info">
                	<p>Number of Rejected Shops :</p>
                  <h3><?php echo $z2[0]; ?> </h3>
                    <!-- <div class="buy_now_button"><a href="#">Buy Now</a></div>
                    <div class="detail_button"><a href="#">Detail</a></div> -->
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            <!-- <div class="templatemo_product_box">
            	<h1>Seawater  <span></span></h1>
       	    <img src="images/fish1.jpg" alt="image" />
                <div class="product_info">
                	<p>Aliquam a dui, ac magna quis est eleifend dictum.</p>
                    <h3>Rs 50</h3>
                    <div class="buy_now_button"><a href="#">Buy Now</a></div>
                    <div class="detail_button"><a href="#">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div> -->
            
            <div class="cleaner_with_height">&nbsp;</div>
            <div class="templatemo_product_box">
            	<h1>Active Users  <span></span></h1>
   	            <img src="images/default_profile.jpg" alt="image" />
                <div class="product_info">
                	<p>Number of Active Users :</p>
                  <h3><?php echo $z3[0]; ?></h3>
                    <!-- <div class="buy_now_button"><a href="#">Buy Now</a></div>
                    <div class="detail_button"><a href="#">Detail</a></div> -->
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            <!-- <div class="templatemo_product_box">
            	<h1>Freshwater <span></span></h1>
   	      <img src="images/fish1.jpg" alt="image" />
                <div class="product_info">
                	<p>Ut fringilla enim sed turpis. Sed justo dolor, convallis at.</p>
                    <h3>Rs 450</h3>
                    <div class="buy_now_button"><a href="#">Buy Now</a></div>
                    <div class="detail_button"><a href="#">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div> -->
            
            <div class="cleaner_with_width">&nbsp;</div>
            <div class="templatemo_product_box">
            	<h1>Total Fishes  <span></span></h1>
   	            <img src="images/default_profile.jpg" alt="image" />
                <div class="product_info">
                	<p>Number of Fishes :</p>
                  <h3><?php echo $z4[0]; ?></h3>
                    <!-- <div class="buy_now_button"><a href="#">Buy Now</a></div>
                    <div class="detail_button"><a href="#">Detail</a></div> -->
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            <!-- <div class="templatemo_product_box">
            	<h1>Crabs  <span></span></h1>
            	<img src="images/fish1.jpg" alt="image" />
                <div class="product_info">
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <h3>Rs 200</h3>
                    <div class="buy_now_button"><a href="#">Buy Now</a></div>
                    <div class="detail_button"><a href="#">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div> -->
            
 <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>

    </div> <!-- end of content --></div>
<?php include "99a_footer.php" ?>
    
