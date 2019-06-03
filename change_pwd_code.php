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

$a=$_POST["text"];
$b=$_POST["oldpwd"];
$c=$_POST["newpwd"];

	$sql="select password from student_reg where userid='$a'";
	$result=mysqli_query($con,$sql)or die(mysql_error());
	while($res=mysqli_fetch_array($result))
{
	
	if($res['password'] == $b){
		$sqlc = "update student_reg set password='$c',cpassword='$c' where userid='$a'";
		if(mysqli_query($con,$sqlc)){
			echo '<script>alert("Changed Successfully.....!");
					location="student_login.php";
					</script>';	
			exit; 
		}
		else{
			echo '<script>alert("Not Changed.....!\n Try Again....!");
					location="student_login.php";
					</script>';	
		}		
	}
	
	else
	{
		echo '<script>alert("Sorry..!\n Type Your correct Old Password");
		location : "student_login.php";
	
	</script>';	
	
	}
}

mysqli_close($con)
?>