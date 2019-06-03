<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sample";
$a=$_POST['facultyid'];
$b=$_POST['fsid'];
$c=$_POST['lsid'];
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
echo"not connected".mysqli_connect_error($con);
}
else
{
	for($i=$b;$i<=$c;$i++){
		$sql="insert into student_assign values('$a','$i')";
		$result=mysqli_query($con,$sql);
		if(!$result){
			echo '<script>alert("Already this student is assigned \n Please assign another student");
	location="student_allotment.php";
	</script>';
	exit;
		}
	}

if($result)
{
	echo '<script>alert("Added successfully");
	location="student_allotment.php";
	</script>';
    //echo "<script>redirect('student_allotment.php'); </script>";
  //header("Location: student_allotment.php");
}
else
{
    echo '<script>alert("Already this student is assigned \n Please assign another student");
	location="student_allotment.php";
	</script>';
}
}
mysqli_close($con)
?>