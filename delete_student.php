<?php
//session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="sample";

$a=$_POST['text'];
$b = $_POST['text1'];
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
echo"not connected".mysqli_connect_error($con);
}
else
{
$sql = "delete from student_assign where student_id = '$a'";
//if(mysqli_query($con,$sql))
if(mysqli_query($con,$sql))
{
  echo '<script>alert("Removed Successfully")
	location="student_allotment.php";
	</script>';
}
else
{
    echo "<h1>data not inserted:</h1>". mysqli_error($con);
}
}
mysqli_close($con)
?>