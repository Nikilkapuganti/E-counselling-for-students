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
$sql="insert into counsellors_table values('$a')";
//if(mysqli_query($con,$sql))
if(mysqli_query($con,$sql))
{
  echo '<script>alert("Added as Counsellor successfully");
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