<?php include('../db_connect.php'); ?>

<?php
//--------------------------------ADMIN Add New Fish and Rate -------------------------------
if(isset($_POST['adm_addnewfishrate']))
{
    echo "In";
    $fish_name=$_POST['fish_name'];
    $fish_rate=$_POST['fish_rate'];

    $query="INSERT INTO `standard_rates`(fish_name,quantity,rate) VALUES('$fish_name',1,$fish_rate)";
    echo $query;
    mysql_query($query);
}

//--------------------------------ADMIN Approve Fishermen -------------------------------
if(isset($_GET['adm_app_fisher']))
{
    $user_id = $_GET['adm_app_fisher'];
    $table_name = "fishermen_register";
    $query = mysql_query("UPDATE $table_name SET status='1' WHERE f_id = $user_id");
    echo "<script>location.href='21a_newreg_fishers.php'</script>";
}

//--------------------------------ADMIN Reject Fishermen -------------------------------
if(isset($_GET['adm_rej_fisher']))
{
    $user_id = $_GET['adm_rej_fisher'];
    $table_name = "fishermen_register";
    $query = mysql_query("UPDATE $table_name SET status='2' WHERE f_id = $user_id");
    echo "<script>location.href='21a_newreg_fishers.php'</script>";
    
}

?>