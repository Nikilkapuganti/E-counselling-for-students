<?php
$filename=$_FILES['file']['name'];
$filetype=$_FILES['file']['type'];
$a=$_POST["userid"];
$b=$_POST["fname"];
$c=$_POST["lname"];
$d=$_POST["qual"];
$e=$_POST["dob"];
$f=$_POST["email"];
$g=$_POST["phno"];
$h=$_POST["address"];
$i=$_POST["gender"];
//echo $filename;
	$con=mysqli_connect("localhost","root","","sample");
	if(!$con)
	{
	echo"not connected".mysqli_connect_error($con);
	}

//if($filetype=='image/jpeg' or $filetype=='image/png' or $filetype=='image/gif')
//{
	
	move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$filename);
	$filepath="upload/".$filename;
	
	$sql="insert into faculty_profile values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$filepath')";
	if(mysqli_query($con, $sql)){	
			echo '<script>alert("Sent Successfully")
	location="faculty_profile.php";
	</script>';
			exit;      
	}	
	else
	{
		echo '<script language="javascript">';
	echo 'alert(" Fill the details correctly")
	Location: faculty_profile.php
			
			</script>';
			//header("Location: basicregistrationform.html");
	
	}
//}
mysqli_close($con)
?>