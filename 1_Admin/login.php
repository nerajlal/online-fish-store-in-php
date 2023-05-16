<?php include "1header.php" ?>
    
<div id="templatemo_content">
    	<!-- Start of content left -->
        <!-- end of content left -->
        <!-- Start of content -->
        <!-- end of content -->
<div>
    <h2>Login And Register here</h2>
    <form method=post action=mastercontroller.php name=”loginform” id=”loginform”>
    <fieldset>
        <table>
            <tr>
                <td>
                    <label for=”username”>Username:</label>
                </td>
                <td>
                    <input type=text name=username id=”username” />
                </td>
            </tr>
            <tr>
                <td>
                    <label for=”password”>Password:</label>
                </td>
                <td>
                    <input type=password name=password id=”password” />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="login" id="login" value=Login />
                </td>
                <td>
                    New User ? <input type="submit" name="newregister" id="register" value="Register Now" />
                </td>
            </tr>

        
        
             
        
        </table>
    </fieldset>
    </form>
</div>
</div>
<?php include "99footer.php" ?>