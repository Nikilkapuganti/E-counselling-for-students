<?php
include('connection.php');
session_start();
//echo "hi";
$error='';

if(isset($_POST['submit'])){
	//echo "hi";
	if(empty($_POST['userid']) || empty($_POST['password'])){
		echo '<script>alert("Invalid Username Or Password");
	location="index.php";
	</script>';		
	}
	else{
		$userid = $_POST['userid'];
		$password = $_POST['password'];

		$userid = stripslashes($userid);
		$password = stripslashes($password);
		
			//echo "<h1>HI</h1>";
			$sql = "SELECT userid,password FROM faculty_reg where password = '$password' AND userid = '$userid'";
			$result = mysqli_query($con, $sql);

			if (mysqli_num_rows($result) > 0) 
			{
				$_SESSION['login_user'] = $userid;
				header("Location: faculty_login.php");
				exit;   			
			}
			else
			{
				echo '<script>alert("Invalid Username Or Password");
	location="index.php";
	</script>';
	
			}
		
		
	}
	mysqli_close($con);
}
?>