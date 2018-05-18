<?php include ("/include/connection.php"); ?>
<?php include("/include/header.php"); ?>
<?php include("/include/navigation.php"); ?>
<style>
    #register-container {
        padding: 15px;
    }
    #login-box {
        border: 1px solid orange;
        padding: 15px;
        width: 48%;
        border-radius: 10px;
        height: 33%;
    }
</style>
<script src="js/ajax.js"></script>
<div id="register-container" align="center">
    <div id="login-box">
           <form method="post" action="">
           <input type="hidden" name="loginaction" value="loggedIn" />
            <table style="width:50%;">
                <tr>
                    <td style="width:50%; padding : 10px;">Login</td>
                    <td><input type="text" name="userid" id="userid"/></td>
                </tr>
                <tr>
                    <td  style="width:50%; padding : 10px;">Password</td>
                    <td><input type="password" name="password" id="password" /></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" value="Log In" />
                    </td>
                </tr>
            </table>
<?php
if(isset($_POST['loginaction'])){
    if($_POST['userid'] == '' or $_POST['password']==''){
        echo "User id or Password or Both are blank.";
    }else{
        $userid = $_POST['userid'];
        $password = $_POST['password'];
        $query = "SELECT * FROM `users` WHERE userid='$userid' and password='$password'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);
        if($count == 1){
            $_SESSION['userid'] = $userid;
        }else{
            $fmsg = "Invalid Login Credentials.";
        }
    }
    if (isset($_SESSION['userid'])){
        $userid = $_SESSION['userid'];
        $uname = mysqli_query($conn, "SELECT `name` FROM `users` WHERE `userid`='$userid'");

        echo "Hai " . $userid . "";
        echo "<br>This is member area";
        echo "<br><a href='logout.php'>Logout</a>";
    }
}
?>
        </form>
    </div>
</div>
<?php include("/include/footer.php"); ?>
