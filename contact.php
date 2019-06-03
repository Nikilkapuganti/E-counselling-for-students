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
$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["message"];

	$sql="insert into contact values('$a','$b','$c')";

	if(mysqli_query($con,$sql)){
			echo '<script>alert("Sent Successfully.....!");
					location="index.php";
					</script>';	
			exit;      
	}
	
	else
	{
		echo '<script>alert("Sorry..!\nplease send another time");
	location="index.php";
	</script>';	
	
	}

mysqli_close($con)
?>