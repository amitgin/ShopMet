<?php include ("/include/connection.php"); ?>
<?php include("/include/header.php"); ?>
<?php include("/include/navigation.php"); ?>
<style>
    #register-container {
        padding: 15px;
    }
    #register-box {
        border: 1px solid #333;
        padding: 15px;
        width: 48%;
        border-radius: 10px;
        height: 50%;
        text-align: center;
    }
</style>
<script src="js/ajax.js"></script>
<div id="register-container" align="center">
    <div id="register-box">
        <form class="form" action="" id="signupform" method='POST' enctype="multipart/form-data">
           <input type="hidden" name="signUpAction" value="signUpDone" />
            <table>
                <tr>
                    <td style="width:50%; padding : 10px;">Name:</td>
                    <td  colspan="2"><input type="text" name="name" id="name" /></td>
                </tr>
                <tr>
                    <td style="width:50%; padding : 10px;">Email:</td>
                    <td colspan="2"><input type="text" name="email" id="email" /></td>
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
                    <td colspan="3" style="text-align:center;">
                        <input type="submit" value="submit" name="submit" id="submit"/>
                    </td>
                </tr>
            </table>
        </form>
<?php
if(isset($_POST['signUpAction'])) {
    $nm = $_POST['name'];
    $mn = $_POST['mobile'];
    $eml = $_POST['email'];
    if($nm == '' or $mn == '' or $eml == '') {
        echo("<script>alert('Fill All the * fields')</script>");
        exit();
    }else{
        $query= "INSERT INTO USER VALUES ('$nm','$eml','$mn')";
        $result = mysqli_query($conn, $query);
        if($result){
            $smsg = "User Created Successfully.";
            echo("<script>alert('User Created Successfull')</script>");
        }else{
            $fmsg ="User Registration Failed";
            echo("<script>alert('User Created UNSuccessfull')</script>");
        }
    }
}
?>
    </div>
</div>
<?php include("/include/footer.php"); ?>
