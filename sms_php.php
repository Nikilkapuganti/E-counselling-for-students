<?php
	if(isset($_POST['ok']))
	{
		$mobileno=$_POST['mno'];
	
		$msg=$_POST['msg'];
	
	// Authorisation details.
	$username = "neethus7722@gmail.com";
	$hash = "jayHlR3W/rg-7GnZowEfxuaB07m3NqIPUtPNE1sFis";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$mobileno"; // A single number or a comma-seperated list of numbers
	$message = "$msg";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	}

?>