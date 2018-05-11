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
    }
    #register-box {
        border: 1px solid #333;
        padding: 15px;
        float: right;
        width: 48%;
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
                    <td style="width:50%; padding : 10px;">Name</td>
                    <td  colspan="2"><input type="text" id="name" /></td>
                </tr>
                <tr>
                    <td style="width:50%; padding : 10px;">email</td>
                    <td colspan="2"><input type="text" /></td>
                </tr>
                <tr>
                    <td  style="width:50%; padding : 10px;">Mobile</td>
                    <td><input type="text" id="mobile"/></td>
                    <td><input type="button" name="Verify" id="verify_otp" value="Verify" onclick="document.getElementById('votp').style.display = 'block';" placeholder="Enter OTP" maxlength="6">
                        <div style="display:none;" id="votp">
                        <input type="text" id="otp"/>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td colspan="3" style="text-align:center;"><input type="button" value="Submit" id="submit"/></td>
                </tr>
            </table>
        </form>
    </div>
    <div style="clear:both;"></div>
</div>
<?php include("/include/footer.php"); ?>
