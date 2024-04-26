
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Page</title>
</head>
<body>
    <table width="30%" border="0" align="center">
        <tr>
            <td>
                <form method="post" action="../controller/signupCheck.php" enctype="">
                    <fieldset>
                        <legend><b>SIGNUP</b></legend>
                        
                            Username:   <input type="text" name="username" value="" required /> <br><br>
                       
                            &nbsp;Password:   <input type="password" name="password" value=""required /> <br><br>
                            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Email:      <input type="email" name="email" value="" required/> <br><br>
                            User Type:   
                                    <br>
                                    <!-- <input type="radio" id="admin" name="usertype" value="admin" required>
                                    <label for="admin">Admin</label><br> -->
                                    <input type="radio" id="host" name="usertype" value="host" required>
                                    <label for="host">Host</label><br>
                                    <input type="radio" id="customer" name="usertype" value="customer" required>
                                    <label for="customer">Customer</label><br><br>

                                                            
                        <input type="checkbox" name="check[]" value="" required/>I agree to the <a href="termsAndConditions.php">terms and conditions</a> <br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="reset" value="Reset" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="submit" value="Submit" /><br>
                    
                        <p>Already have an account! <a href="login.php">Sign In</a> Or, back to <a href="home.php">Home</a></p>
                        

                    </fieldset>

                </form>
            </td>
        </tr>
    </table>
</body>
</html>
