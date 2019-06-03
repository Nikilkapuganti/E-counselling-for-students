<?php
include('connection.php');
session_start();
//echo "hi";
$error='';

if(isset($_POST['submit'])){
	//echo "hi";
	if(empty($_POST['userid']) || empty($_POST['password'])){
		$error = "User Id or password is Invalid";		
	}
	else{
		$p=$_POST["type_login"];
		$userid = $_POST['userid'];
		$password = $_POST['password'];

		$userid = stripslashes($userid);
		$password = stripslashes($password);
		
		if($p=="student"){
			//echo "<h1>HI</h1>";
			$sql = "SELECT userid,password FROM student_reg where password = '$password' AND userid = '$userid'";
			$result = mysqli_query($con, $sql);

			if (mysqli_num_rows($result) > 0) 
			{
				$_SESSION['login_user'] = $userid;
				$_SESSION['login_type'] = $p;
				header("Location: student_login.php");
				exit;   			
			}
			else
			{
				$error = "user Id or password is invalid";
	
			}
		}
		else if($p=="faculty"){
			$sql = "SELECT userid,password FROM faculty_reg where password = '$password' AND userid = '$userid'";
			$result = mysqli_query($con, $sql);

			if (mysqli_num_rows($result) > 0) 
			{
				$_SESSION['login_user'] = $userid;
				$_SESSION['login_type'] = $p;
					header("Location: faculty_login.php");
					exit;      			
			}
			else
			{
				$error = "user Id or password is invalid";
	
			}
		}
		else if($p=="admin"){
			$sql = "SELECT userid,password FROM signup where password = '$password' AND userid = '$userid'";
			$result = mysqli_query($con, $sql);
			if (mysqli_num_rows($result) > 0) 
			{
				$_SESSION['login_user'] = $userid;
				$_SESSION['login_type'] = $p;
				header("Location: admin_login.php");
					exit; 			
			}
			else{
				$error = "user Id or password is invalid";	
			}
		}		
	}
	mysqli_close($con);
}
?>