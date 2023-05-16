<?php include "1header.php" ?>
<? include 'db_connect.php' ?>

<div class='container'>
		<div class='row'>
			<div class='col-md-12'>
				<h2></h2>
			</div>

			<div class='col-md-6' >
					
				<form method='post' action='mastercontroller.php'>

					<h1>Sign Up Page</h1>
					
		<fieldset>


			<table>
            <tr>
                <td>
                    <label for="fname"> Name :</label>
                </td>
                <td>
                    <input type="text" class="form-control" name="name" id="fname" required="required" maxlength="80">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email"> Email :</label>
                </td>
                <td>
                    <input type="email" class="form-control" name="email" id="email" required="required" maxlength="80">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="number">Phone Number :</label>
                </td>
                <td>
                    <input type="text" class="form-control" name="phone_number" id="phone_number" required="required" maxlength="80">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password :</label>
                </td>
                <td>
                    <input type="password" class="form-control" name="password" id="password" required="required" maxlength="80">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pwd">Confirm Password :</label>
                </td>
                <td>
                    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required="required" maxlength="80">
                </td>
            </tr>
            <tr>
                <td>
                	                    
                </td>
                <td>
                    <button type="submit" name="btnsignup" >Submit</button>
                </td>
            </tr>
            <tr>
                <td>
                	New User ?                   
                </td>
                <td>
                    <input type=submit name=newregister id="register" value="Register Now" /> 
                </td>
            </tr>     
        </table></fieldset>		
					
				</form>
			</div>
			
			
		</div>
	</div>



<?php include "99footer.php" ?>