<?php

$a=$_POST["userid"];
$b=$_POST["fname"];
$c=$_POST["lname"];
$d=$_POST["qual"];
$e=$_POST["dob"];
$f=$_POST["email"];
$g=$_POST["phno"];
$h=$_POST["address"];

	$con=mysqli_connect("localhost","root","","sample");
	if(!$con)
	{
	echo"not connected".mysqli_connect_error($con);
	}	
	$sql="update faculty_profile set fname='$b',lname='$c',qual='$d',dob='$e',email='$f',phno='$g',address='$h' where userid='$a'";

	if(mysqli_query($con, $sql)){	
			echo '<script>alert("Data Updated successfully")
	location="faculty_profile.php";
	</script>';
			exit;      
	}	
	else
	{
		echo '<script language="javascript">';
			echo 'alert(" Fill the details correctly")';
			echo '</script>';
			//header("Location: basicregistrationform.html");
	
	}

mysqli_close($con)
?>