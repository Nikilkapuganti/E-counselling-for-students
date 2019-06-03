<?php
	require('Textlocal.class.php');
 
 $mobileno=$_POST['mno'];

		$msg=$_POST['msg'];
		
	$Textlocal = new Textlocal(false, false, 'jayHlR3W/rg-7GnZowEfxuaB07m3NqIPUtPNE1sFis');
 
	$numbers = array($mobileno);
	$sender = 'TXTLCL';
	$message = rawurlencode($msg);
 
	$response = $Textlocal->sendSms($numbers, $message, $sender);
	
	echo '<script>alert("Sent Successfully");
	location="faculty_login.php";
	</script>';
?>