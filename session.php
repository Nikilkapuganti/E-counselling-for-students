 <?php
include('connection.php');
 session_start();
 $user_check = $_SESSION['login_user'];

	$sql = "select username from signup where userid = '$user_check'";
	$ses_sql = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session = $row['username'];
	$session_id = $user_check;
//break; 
if(!isset($login_session)){
//echo '<script language="javascript">';
	//echo 'alert("Invalid user Id or password")';
	//echo '</script>';
	mysqli_close($con);
	//header('Location: index.php');
} 
?>