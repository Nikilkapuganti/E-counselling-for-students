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

	$sql="insert into faculty_reg values('$a','$b','$c','$d')";
	echo $sql;
	if(mysqli_query($con,$sql)){
			echo '<script>alert("Registered Successfully......!\nLogin to Continue");
					location="index.php";
					</script>';	
			exit;      
	}
	
	else
	{
		echo '<script>alert("Faculty Id is repeated");
	location="index.php";
	</script>';	
	
	}

mysqli_close($con)
?>