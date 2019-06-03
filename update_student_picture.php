<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sample";
$a=$_POST["text"];
$filename=$_FILES['file']['name'];
$filetype=$_FILES['file']['type'];

$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
echo"not connected".mysqli_connect_error($con);
}
else
{
	if($filetype=='image/jpeg' or $filetype=='image/png' or $filetype=='image/gif')
	{
		move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$filename);
		$filepath="upload/".$filename;
		$sql="update student_profile set image='$filepath' where student_id='$a'";
		//if(mysqli_query($con,$sql))
			if(mysqli_query($con,$sql))
			{
				echo '<script>alert("Profile Picture Changed Successfully")
	location="student_login.php";
	</script>';
				exit;  
 
			}
			
			else
			{
				echo '<script>alert("Profile Picture is Not Changed\nTry Again")
	location="student_login.php";
	</script>';
			}
	}
}
mysqli_close($con)
?>