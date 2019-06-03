<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sample";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
echo"not connected".mysqli_connect_error($con);
}


$a=$_POST["username"];
$b=$_POST["userid"];
$c=$_POST["password"];
$d=$_POST["cpassword"];
$p=$_POST["type_login"];


if($p=="student"){
	//echo "<h1>HI</h1>";
	$sql="insert into student_reg values('$a','$b','$c','$d')";
	if(mysqli_query($con, $sql)){	
			header("Location: index.php");
			exit;      
	}
	
	else
	{
		echo "<h1 >fill the details correctly</h1>";
	
	}
}
else if($p=="faculty"){
	$sql="insert into faculty_reg values('$a','$b','$c','$d')";
	if(mysqli_query($con, $sql)){	
			header("Location: index.php");
			exit;      
	}
	
	else
	{
		echo "<h1 >fill the details correctly</h1>";
	
	}
}

//else
//{
	

//}
mysqli_close($con)
?>