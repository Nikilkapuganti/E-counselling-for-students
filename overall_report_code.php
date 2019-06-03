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
$b=$_POST["mps"];
$c=$_POST["rs"];
$d=$_POST["date1"];

	$sql="insert into overall_report values('$a','$b','$c','$d')";
	$result=mysqli_query($con,$sql)or die(mysql_error());
	
	if($result){
		
			echo '<script>alert("Submitted Successfully.....!");
					location="faculty_login.php";
					</script>';	
			exit; 
		}
		else{
			echo '<script>alert("Not inserted.....!\n Try Again....!");
					location="overall_report.php";
					</script>';	
		}		


mysqli_close($con)
?>