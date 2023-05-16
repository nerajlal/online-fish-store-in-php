<?php include "1a_header.php" ?>
    
   
        
        
    <div>
    <h2>Approved Shops </h2>
    <fieldset>
    <table cellpadding="0" cellspacing="0" border="1" class="display table table-bordered">
                <thead>      
        
        <!-- <div class="row">
            <div class="col-xl-10">
                
                New Customers
                  <div class="card card-table-border-none">
                    <div class="card-header justify-content-between ">
                      <h2>New Requests</h2>
                      
                    </div>
                    
                    <div class="card-body pt-0" data-simplebar style="height: 468px;">
                      <table class="table ">
                        <tbody>
                        <tr><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>-->
              <th>Id</th> 
              <th>Name</th><th>e-mail</th><th>Phone no</th><th>Address</th><th>Reject</th></tr>
                        <?php

              include '../dbconnect.php';
              $p=1;
              //$uname=$_SESSION['username']; 
               $result = mysql_query("SELECT * FROM customer,login where 
        customer.loginid=login.lid and login.status='1' and login.user='shop' ");
               echo $result;

              while($row = mysql_fetch_array($result))
              {
?>
                          <tr>

            <!--   <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
               <td> </td> -->
            
              
              <td><?php echo $row['loginid'];?></td>               
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['phno'];?></td>
              
              <td><?php echo $row['address'];?></td>
              <!-- <td><a href="a_uapprove.php?id=<?php echo $row['email'];?>"> <form><input type='button' value="APPROVE" style="background: green;color: white"></input></form></a></td><td> -->
                <td>
              <a href="a_ureject.php?id=<?php echo $row['email'];?>"> <form><input type='button' value=" REJECT"  style="background: red;color: white"></input></form></a></td>
                            <td>
                            <!-- <a href="details.php?id=  <?php echo $row['email'];?>   ">Read More</a> -->
                            </td>
                          </tr>
                         <?php
              }
   
?> 
                        </tbody>
                      </table>
</fieldset>
</thead>
</table></fieldset></div></div>
<?php include "99a_footer.php" ?>

</div>
