<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fish Store</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<style>
.dropbtn {
/*  background-color: #04AA6D;*/
/*  color: white;*/
/*  padding: 16px;*/
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="admin_home.php" class="current">Home</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            <li><a href="#" class="current">  .</a></li>
            
            <li><a href="../logout.php" class="current">LogOut</a></li>

           
            
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        	<p>
                <span>25%</span> discounts for
        purchase over $80
        	</p>
			<a href="#" style="margin-left: 50px;">Read more...</a>
        </div>
        
        
        <div id="templatemo_new_books">
        	<ul>
                <li>Suspen disse</li>
                <li>Maece nas metus</li>
                <li>In sed risus ac feli</li>
            </ul>
            <a href="#" style="margin-left: 50px;">Read more...</a>
        </div>
    </div> <!-- end of header -->
     <div id="templatemo_content">
      
        <div id="templatemo_content_left">
          <div class="templatemo_content_left_section">
              <h1>Shops</h1>
                <ul>
                    <li><a href="21a_newreg_fishers.php">New Shops</a></li>
                    <li><a href="22a_approved_fishers.php">Approved Shops</a></li>
                    <li><a href="23a_rej_fishers.php">Rejected Shops</a></li>
                    
              </ul>
            </div>
      <div class="templatemo_content_left_section">
              <h1>Info</h1>
                <ul>
                    <li><a href="11_addnewfishrate.php">Add Fish</a></li>
                    <li><a href="a_product.php">My Products</a></li>
                    <li><a href="a_profile.php">My Profile</a></li>
                    <li><a href="a_complaint.php">Complaints</a></li>
                    
              </ul>
            </div>
            
           
        </div>
<?php include('../dbconnect.php'); ?>
    