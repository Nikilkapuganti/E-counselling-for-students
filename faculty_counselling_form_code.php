<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sample";
$a=$_POST["sname"];
$b=$_POST["sid"];
$c=$_POST["csem"];
$d=$_POST["mtc"];
$e=$_POST["pname"];
$e1=$_POST["occu"];
$d1=$_POST["place"];
$d2=$_POST["phno"];
$a1=$_POST["pa"];
$b1=$_POST["regularity"];
$c1=$_POST["tls"];
$f1=$_POST["iep"];
$g1=$_POST["any_other"];
$h1=$_POST["wfm"];
$i1=$_POST["wfp"];
$j1=$_POST["disci"];
$k1=$_POST["xa"];
$l1=$_POST["ach"];
$m1=$_POST["as1"];
$n1=$_POST["as2"];
$o1=$_POST["as3"];
$p1=$_POST["as4"];
$q1=$_POST["as5"];
$r1=$_POST["as6"];
$s1=$_POST["as7"];
$t1=$_POST["as8"];
$f=$_POST["int1"];
$g=$_POST["int2"];
$h=$_POST["int3"];
$i=$_POST["int4"];
$j=$_POST["int5"];
$k=$_POST["int6"];
$l=$_POST["int21"];
$m=$_POST["int22"];
$n=$_POST["int23"];
$o=$_POST["int24"];
$p=$_POST["int25"];
$q=$_POST["int26"];
$u1=$_POST["csa1"];
$v1=$_POST["csa2"];
$w1=$_POST["csa3"];
$x1=$_POST["csa4"];
$y1=$_POST["csa5"];
$z1=$_POST["csa6"];
$r=$_POST["ssem1"];
$s=$_POST["ssem2"];
$t=$_POST["ssem3"];
$u=$_POST["ssem4"];
$v=$_POST["ssem5"];
$w=$_POST["ssem6"];
$x=$_POST["ssem7"];
$y=$_POST["ssem8"];
$z=$_POST["bsem1"];
$aa=$_POST["bsem2"];
$ab=$_POST["bsem3"];
$ac=$_POST["bsem4"];
$ad=$_POST["bsem5"];
$ae=$_POST["bsem6"];
$af=$_POST["bsem7"];
$ag=$_POST["bsem8"];
$ah=$_POST["csem1"];
$ai=$_POST["csem2"];
$aj=$_POST["csem3"];
$ak=$_POST["csem4"];
$al=$_POST["csem5"];
$am=$_POST["csem6"];
$an=$_POST["csem7"];
$ao=$_POST["csem8"];
$ap=$_POST["date"];
$faculty_id = $_POST["faculty_id"];

$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
echo"not connected".mysqli_connect_error($con);
}
else
{
	
		$sql="insert into faculty_report values('$a','$b','$c','$d','$e','$e1','$d1','$d2','$a1','$b1','$c1','$f1','$g1','$h1','$i1','$j1','$k1','$l1','$m1','$n1','$o1','$p1','$q1','$r1','$s1','$t1','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$u1','$v1','$w1','$x1','$y1','$z1','$r','$s','$t','$u','$v','$w','$x','$y','$z','$aa','$ab','$ac','$ad','$ae','$af','$ag','$ah','$ai','$aj','$ak','$al','$am','$an','$ao','$ap','$faculty_id')";
		//if(mysqli_query($con,$sql))
			if(mysqli_query($con,$sql))
			{
				echo '<script>alert(" '.$a.' report is generated Successfully")
	location="faculty_login.php";
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