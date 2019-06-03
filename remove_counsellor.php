<?php
//session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="sample";

$a=$_POST['text'];

$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
echo"not connected".mysqli_connect_error($con);
}
else
{
$sql="delete from counsellors_table where faculty_id = '$a'";
$sqlc = "delete from student_assign where faculty_id = '$a'";
//if(mysqli_query($con,$sql))
if(mysqli_query($con,$sql) && mysqli_query($con,$sqlc))
{
  echo '<script>alert("Removed as Counsellor");
	location="view_faculty.php";
	</script>';
}
else
{
    echo "<h1>data not inserted:</h1>". mysqli_error($con);
}
}
mysqli_close($con)
?>