<?php

          $name =$_POST['name'];
		  $number = $_POST['mobile'];
          $num = "91".$number;

	$otp = mt_rand(10000,99999);
    $_SESSION[otp] = $otp;

		$message ="Hello+".$name."+This+Is+Your+Otp:+".$_SESSION[otp];


$curl=curl_init('http://websmsapp.in/api/mt/SendSMS?APIKEY=mrroj9q8uUSDTMlZrdm25g&senderid=SHPMET&channel=Trans&DCS=0&flashsms=0&number='.$num.'&text='.$message.'&route=2');

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 $data = curl_exec($curl);
 curl_close($curl);

?>
