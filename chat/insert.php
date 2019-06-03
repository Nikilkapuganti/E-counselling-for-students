<?php
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['pass1'];

include_once('config.php');
$sql =  "INSERT INTO user
VALUES (NULL,
        '$name',
        '$email',
        '$password',
        '0')";
		echo $sql;
$result = mysqli_query($conn,$sql);
		
if ($result) {
    header('location: practice.php?registeration_successfull=<span style="color:green">You have successfully registered. You can now login.</span>');
} else {
    echo "failed";
}

?>