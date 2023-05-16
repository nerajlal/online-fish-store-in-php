<?php include "1a_header.php" ?>
    
    <div id="templatemo_content">

    <div>
    <h2>Current Standard Rates </h2>
    <fieldset>
    <?php

$query = "select * from standard_rates";
$result = mysql_query($query);
if (!$result)
{
 $message = 'ERROR:' . mysql_error();
 return $message;
}
else
{
 $i = 0;
 echo '<table border=1 align=center style="width:95%"><tr>';
 while ($i < mysql_num_fields($result))
 {
  $meta = mysql_fetch_field($result, $i);
  echo "<th><center>".ucfirst($meta->name)."</center></th>";
  $i = $i + 1;
 }
 //echo '<th><center>Status</center></th>';
 echo '<th><center>Edit</center></th>';
  
 $i = 0;
 
 while ($row = mysql_fetch_row($result))
 {
  echo '<tr>';
     $count = count($row);
     $y = 0;
     $idval='1';
     while ($y < $count)
       {
        $c_row = current($row);
        if($y==0)
           $unique_id=$c_row;
        
        if($y==1)
         {
            
              //echo "<td align=center><img src='$c_row' height='100' width='100'></td>";
              echo "<td align=center>" . $c_row . "</td>";
            
         }
         else 
        {
          echo "<td align=center>" . $c_row . "</td>";
                
         }

        //  if($y==1)
        //  {
            
        //       //echo "<td align=center><img src='$c_row' height='100' width='100'></td>";
        //       echo "<td align=center>" . $c_row . "kg"."</td>";
            
        //  }

//         if($y==2)
//         {
          
//            $q2 = mysql_query("select user_status from userreg where user_id = '".$unique_id."'");
//            $r2 = mysql_fetch_array($q2);

// switch ($r2['user_status']) {
//   case "0":
//     echo "<td align=center><font style='color:red'><b>Not Verified</b></font></td>";
//     break;
//   case "1":
//     echo "<td align=center><font style='color:green'><b>Verified</b></font></td>";
//     break;
//   case "8":
//     echo "<td align=center><font style='color:orange'><b>Rejected</b></font></td>";
//     break;
//   case "9":
//     echo "<td align=center><font style='color:red'><b>Deleted</b></font></td>";
//     break;
//   default:
//     echo "<td align=center><font style='color:yellow'><b>Invalid</b></font></td>";
// }
// }
         next($row);
      $y = $y + 1;
       }
   echo "<td align=center><a href='o_viewuser_details.php?id=$unique_id'>Edit</a></td>";
   //echo "<td align=center><a href='validateuser.php?id=$unique_id'>Reject</a></td>";
   //echo "<td align=center><a href='adm_ap_vo.php?id=$unique_id&op=DLoff'>Delete</a></td>";
   //$stat1=mysql_query("UPDATE REGISTER SET USER_STATUS='1' WHERE USER_ID='5'");
   //echo "<td><img width=100 height=100 src=userdocs/".$idval."_1.jpg></a></td>";
    //echo '<td><a href=rating.php><img src="images/star.jpg"></a></td>';
  echo '</tr>';
  $i = $i + 1;
 }
 echo '</table></body></html>';
 mysql_free_result($result);
}

//}


?>
</fieldset>
</div></div>
<?php include "99a_footer.php" ?>