<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sample";
$a=$_POST["sname"];
$b=$_POST["sid"];
$c=$_POST["phno"];
$d=$_POST["email"];
$e=$_POST["dob"];
$f=$_POST["gender"];
$g=$_POST["addr"];
$h=$_POST["permaddr"];
$i=$_POST["f_name"];
$j=$_POST["f_phno"];
$k=$_POST["f_occu"];
$l=$_POST["f_email"];
$m=$_POST["m_name"];
$n=$_POST["m_phno"];
$o=$_POST["m_occu"];
$p=$_POST["m_email"];
$q=$_POST["mtc"];
$r=$_POST["place"];
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
		$sql="insert into student_profile values('$a','$b','$c','$d','$e','$f','$g','$h','$filepath','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r')";
		//if(mysqli_query($con,$sql))
			if(mysqli_query($con,$sql))
			{
				echo '<script>alert("Profile Created Successfully")
	location="student_login.php";
	</script>';
				exit;  
 
			}
			
			else
			{
				echo "<h1>data not inserted:</h1>". mysqli_error($con);
			}
	}
}
mysqli_close($con)
?>