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


$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
echo"not connected".mysqli_connect_error($con);
}
else
{
	
		$sql="update student_profile set student_name='$a',phno='$c',email='$d',dob='$e',presaddr='$g',permaddr='$h',fname='$i',fphno='$j',foccu='$k',femail='$l',mname='$m',mphno='$n',moccu='$o',memail='$p',mtc='$q',place='$r' where student_id='$b'";
		//if(mysqli_query($con,$sql))
			if(mysqli_query($con,$sql))
			{
				echo '<script>alert("Updated Successfully")
	location="student_login.php";
	</script>';
				exit;  
 
			}
			
			else
			{
				echo "<h1>data not inserted:</h1>". mysqli_error($con);
			}
	
}
mysqli_close($con)
?>