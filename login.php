<?php
session_start();
//echo "hi";
$error='';

$p=$_POST["type_login"];
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) 
{
    die("Connection failed: " . mysqli_connect_error());
}
if($p=="student"){
	//echo "<h1>HI</h1>";
	$sql = "SELECT userid,password FROM student_reg where userid='$n' and password='$s'";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		while($row = mysqli_fetch_assoc($result))
		{
			header("Location: student1.html");
			exit;      
			echo "<h1>success</h1>";
		}
	}
	else
	{
		echo "<h1 >invalid username or password</h1>";
	
	}
}
else if($p=="faculty"){
	$sql = "SELECT userid,password FROM faculty_reg where userid='$n' and password='$s'";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		while($row = mysqli_fetch_assoc($result))
		{
			header("Location: facultylogin.html");
			exit;      
			echo "<h1>success</h1>";
		}
	}
	else
	{
		echo "<h1 >invalid username or password</h1>";
	
	}
}
else if($p=="admin"){
	$sql = "SELECT userid,password FROM signup where userid='$n' and password='$s'";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		while($row = mysqli_fetch_assoc($result))
		{
			header("Location: admin1.html");
			exit;      
			echo "<h1>success</h1>";
		}
	}
	else
	{
		echo "<h1 >invalid username or password</h1>";
	
	}
}


mysqli_close($con);
?>