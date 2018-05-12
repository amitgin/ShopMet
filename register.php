<?php include ("/include/connection.php"); ?>
<?php include("/include/header.php"); ?>
<?php include("/include/navigation.php"); ?>
<style>
    #register-container {
        padding: 15px;
    }
    #login-box {
        border: 1px solid #333;
        padding: 15px;
        float: left;
        width: 48%;
        border-radius: 10px;
        height: 50%;
    }
    #register-box {
        border: 1px solid #333;
        padding: 15px;
        float: right;
        width: 48%;
        border-radius: 10px;
        height: 50%;
    }
</style>
<script src="js/ajax.js"></script>
<div id="register-container">
    <div id="login-box">
           <form>
            <table style="width:50%;">
                <tr>
                    <td style="width:50%; padding : 10px;">Login</td>
                    <td><input type="text" /></td>
                </tr>
                <tr>
                    <td  style="width:50%; padding : 10px;">Password</td>
                    <td><input type="text" /></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;"><input type="button" value="Submit" /></td>
                </tr>
            </table>
        </form>
</div>
    <div id="register-box">
        <form>
            <table>
                <tr>
                    <td style="width:50%; padding : 10px;">Name:</td>
                    <td  colspan="2"><input type="text" name="name" id="name" /></td>
                </tr>
                <tr>
                    <td style="width:50%; padding : 10px;">Email:</td>
                    <td colspan="2"><input type="text" name="email" /></td>
                </tr>
                <tr>
                    <td  style="width:50%; padding : 10px;">Mobile:</td>
                    <td><input type="text" name="mobile" id="mobile"/></td>

                    <td><input type="button" name="Verify" id="verify_otp" value="Verify" onclick="document.getElementById('votp').style.display = 'block';" placeholder="Enter OTP" maxlength="6">
                    <td>

                        <div style="display:none;" id="votp">
                        <input type="text" id="otp"/>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td colspan="3" style="text-align:center;"><input type="submit" value="submit" name="submit" id="submit"/></td>
                </tr>
            </table>
        </form>
        <?php

if($_POST['submit'])
{
       $nm = $_POST['name'];
       $mn = $_POST['mobile'];
       $eml = $_POST['email'];


if($nm!="" && $mn!="" && $eml!="")
   {
	$query= "INSERT INTO REGISTER VALUES('$nm','$mn','$eml')";
    $data = mysqli_query($conn, $query);

	if($data){echo "Data saved into database successfully";}
   }
   else{
	        echo "All fields are required";
        }

}

?>
    </div>
    <div style="clear:both;"></div>
</div>
<?php include("/include/footer.php"); ?>
