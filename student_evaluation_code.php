<?php
include('connection.php');

$a=$_POST["counsellorName"];
$b=$_POST["KnewStudentFor"];
$c=$_POST["counsellorPhoneNumber"];
$d=$_POST["counsellorEmailAddress"];
$e=$_POST["StudentName"];
$f=$_POST["year"];
$g=$_POST["branch"];
$h=$_POST["section"];
$i=$_POST["AcademicProgress"];
$j=$_POST["ClassParticipation"];
$k=$_POST["Creativity"];
$l=$_POST["Dependability"];
$m=$_POST["Initiative"];
$n = $_POST["Teamwork"];
$o=$_POST["OrganizationalSkills"];
$p=$_POST["ProblemSolving"];
$q=$_POST["WhatDistinguishes"];
$r=$_POST["Describe"];
$s=$_POST["Comments"];

$sql="insert into formc(`cname`, `cknown`, `cphn`, `cemail`, `sname`, `syear`, `sbranch`, `ssec`, `sp1`, `sp2`, `sp3`, `sp4`, `sp5`, `sp6`, `sp7`, `sp8`, `cm1`, `cm2`, `cm3`) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s')";

//if(mysqli_query($con,$sql))
if(mysqli_query($con,$sql))
{
  header("Location: student_evaluation.php");
}
else
{
    echo "<h1>data not inserted:</h1>". mysqli_error($con);
}

mysqli_close($con)
?>