<?php
	// Account details
	

	$apiKey = urlencode('df3Cwjg76Es-amkLCNVAPsNNlnJB7YMZ61c9m4Cs7o');
	$mobileno=$_POST['mno'];

		$msg=$_POST['msg'];
	
	// Message details
	$numbers = $mobileno;
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($msg);
 

 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	if($response){
	echo '<script>alert("Sent Successfully")
	location="faculty_login.php";
	</script>';
	}
	else{
		
		echo '<script>alert("Not Sent Try again")
	location="faculty_login.php";
	</script>';
				exit;  
	}
	}
?>