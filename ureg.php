<?php 
include "header.php"; 
include "dbconnect.php"; 
?>
    
<div id="templatemo_content">
<div>
    <h2>Register here</h2>
</div>
<form method="POST">
    <table>
        <tr>
            <td>Name</td><td><input type="text" name="fname" class="form-control" style="margin-bottom: 8px;margin-left: 8px"></td>
        </tr>
        <tr>
            <td>Address</td><td><input type="text" name="address" class="form-control"  style="margin-bottom: 8px;margin-left: 8px"></td>
        </tr>
        <!-- <tr>
            <td>User Type</td><td>
                <select name="user" id="user" class="form-control"  style="margin-bottom: 8px;margin-left: 8px">
                <option value="user">USER</option>
                
                 <option value="shop">INSTITUTION</option> 
            </select>
            </td>
        </tr> -->

        <tr>
            <td>Phone</td><td><input type="text" name="phno" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" pattern="[0-9]{10}" title="10 digit phone number"></td>
        </tr>
        <tr>
            <td>Email</td><td><input type="email" name="email" class="form-control"  style="margin-bottom: 8px;margin-left: 8px"></td>
        </tr>
        <tr>
            <td>Password &nbsp;</td><td>&nbsp;&nbsp;<input type="text" name="password" class="form-control" style="margin-bottom: 8px;margin-left: 8px>" 
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required
                    ></td>
        </tr>
        <tr>
            <td></td><td><input type="submit" name="submit" value="submit" class="btn btn-success" style="padding: 10px 25px"></td>
        </tr>

    </table>
    
</form>

<?php include "99footer.php" ?>
<?php

if(isset($_POST['submit'])){
    $name=$_POST['fname'];
  $address=$_POST['address'];
    //$user=$_POST['user'];
    $phno=$_POST['phno'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $q="INSERT into login(email,password,status,user) values('$email','$password',1,'user')";
    // echo $q;
    if(mysql_query($q,$conn))
    {
        
                    echo "<script>alert('Your account has been created!');
                            location.href='login.php';
                    </script>";
                }
    }


?>

