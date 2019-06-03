<?php 
include('connection.php');
include('faculty_session.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="sytle.css" class="css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <title>E-counselling</title>
	
	<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}


	</style>
  </head>
  <body>            
<?php 
$sid = $_POST['studentid'];
		$sdate = $_POST['date1'];
	
		$sql = "SELECT * from faculty_report where sid = '$sid' and date='$sdate'";

			$con = mysqli_connect("localhost","root","","sample");
			
				$rs= mysqli_query($con, $sql) or die(mysql_error());
				while($res=mysqli_fetch_array($rs))
				{			
$a=$res["sname"];
$b=$res["sid"];
$c=$res["csem"];
$d=$res["mtc"];
$e=$res["pname"];
$f=$res["poccu"];
$g=$res["place"];
$h=$res["phno"];
$i=$res["atten"];
$j=$res["regularity"];
$k=$res["ntls"];
$l=$res["iep"];
$m=$res["any_sugg"];
$n=$res["wfm"];
$o=$res["wfp"];
$p=$res["disci"];
$q=$res["xa"];
$r=$res["ach"];
$s=$res["sa1"];
$t=$res["sa2"];
$u=$res["sa3"];
$v=$res["sa4"];
$w=$res["sa5"];
$x=$res["sa6"];
$y=$res["sa7"];
$z=$res["sa8"];
$aa=$res["intern1"];
$ab=$res["intern2"];
$ac=$res["intern3"];
$ad=$res["intern4"];
$ae=$res["intern5"];
$af=$res["intern6"];
$ag=$res["intern21"];
$ah=$res["intern22"];
$ai=$res["intern23"];
$aj=$res["intern24"];
$ak=$res["intern25"];
$al=$res["intern26"];
$am=$res["csa1"];
$an=$res["csa2"];
$ao=$res["csa3"];
$ap=$res["csa4"];
$aq=$res["csa5"];
$ar=$res["csa6"];
$as=$res["ssem1"];
$at=$res["ssem2"];
$au=$res["ssem3"];
$aw=$res["ssem4"];
$ax=$res["ssem5"];
$ay=$res["ssem6"];
$az=$res["ssem7"];
$ba=$res["ssem8"];
$bb=$res["bsem1"];
$bc=$res["bsem2"];
$bd=$res["bsem3"];
$be=$res["bsem4"];
$bf=$res["bsem5"];
$bg=$res["bsem6"];
$bh=$res["bsem7"];
$bi=$res["bsem8"];
$bj=$res["csem1"];
$bk=$res["csem2"];
$bl=$res["csem3"];
$bm=$res["csem4"];
$bn=$res["csem5"];							
$bo=$res["csem6"];
$bp=$res["csem7"];
$bq=$res["csem8"];
$br=$res["date"];

			}
function fetch_data()  
 {  
 $output .='';
 $sid = $_POST['studentid'];
		$sdate = $_POST['date1'];
 	
		$sql = "SELECT * from faculty_report where sid = '$sid' and date='$sdate'";

			$con = mysqli_connect("localhost","root","","sample");
			
				$rs= mysqli_query($con, $sql) or die(mysql_error());
				while($res=mysqli_fetch_array($rs))
				{			
$a=$res["sname"];
$b=$res["sid"];
$c=$res["csem"];
$d=$res["mtc"];
$e=$res["pname"];
$f=$res["poccu"];
$g=$res["place"];
$h=$res["phno"];
$i=$res["atten"];
$j=$res["regularity"];
$k=$res["ntls"];
$l=$res["iep"];
$m=$res["any_sugg"];
$n=$res["wfm"];
$o=$res["wfp"];
$p=$res["disci"];
$q=$res["xa"];
$r=$res["ach"];
$s=$res["sa1"];
$t=$res["sa2"];
$u=$res["sa3"];
$v=$res["sa4"];
$w=$res["sa5"];
$x=$res["sa6"];
$y=$res["sa7"];
$z=$res["sa8"];
$aa=$res["intern1"];
$ab=$res["intern2"];
$ac=$res["intern3"];
$ad=$res["intern4"];
$ae=$res["intern5"];
$af=$res["intern6"];
$ag=$res["intern21"];
$ah=$res["intern22"];
$ai=$res["intern23"];
$aj=$res["intern24"];
$ak=$res["intern25"];
$al=$res["intern26"];
$am=$res["csa1"];
$an=$res["csa2"];
$ao=$res["csa3"];
$ap=$res["csa4"];
$aq=$res["csa5"];
$ar=$res["csa6"];
$as=$res["ssem1"];
$at=$res["ssem2"];
$au=$res["ssem3"];
$aw=$res["ssem4"];
$ax=$res["ssem5"];
$ay=$res["ssem6"];
$az=$res["ssem7"];
$ba=$res["ssem8"];
$bb=$res["bsem1"];
$bc=$res["bsem2"];
$bd=$res["bsem3"];
$be=$res["bsem4"];
$bf=$res["bsem5"];
$bg=$res["bsem6"];
$bh=$res["bsem7"];
$bi=$res["bsem8"];
$bj=$res["csem1"];
$bk=$res["csem2"];
$bl=$res["csem3"];
$bm=$res["csem4"];
$bn=$res["csem5"];							
$bo=$res["csem6"];
$bp=$res["csem7"];
$bq=$res["csem8"];
$br=$res["date"];

			
 
 
     

			$output .= '
			<div class="container">
		   <div class="col-12">
				<div class="shadow-none p-3 mb-3 rounded" >
				<div class="row">
				<div class="col-2">
					<label>Date:</label>
				</div> 
				
				
			<div class="col-4 p-2 mb-3 rounded" style="background-color:skyblue;" >
			
               '.$res["date"].'
                    
               
                  
</div>
				</div>
							
					<div class="row">
		
			<div class="col-2">
					<label>Student Id:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$b.'
				</div>
			
			
	
			<div class="col-2">
					<label>Parent Name:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$e.'
				</div>
			</div>
					<div class="row">
		
			<div class="col-2">
					<label>Student Name:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$a.'
				</div>
			
			
	
			<div class="col-2">
					<label>Parent Occupation:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$f.'
				</div>
			</div>
		
					<div class="row">
		
			<div class="col-2">
					<label>Current Semester:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$c.'
				</div>
			
			
	
			<div class="col-2">
					<label>Place:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$g.'
				</div>
			</div>
	
		<div class="row">
			
			<div class="col-2">
					<label>Mode of Travel to College:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$d.'
				</div>
			
			<div class="col-2">
					<label>Parent Phone Number:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$h.'
				</div>
			</div>
		
		<div class="row">
			
			<div class="col-2">
					<label>Current Attendence:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$i.'
				</div>
			
			
			<div class="col-2">
					<label>Regularity:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$j.'
				</div>
			</div>
	
		<div class="row">
		
			<div class="col-2">
					<label>New Technologies Learnt:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$k.'
				</div>
			
			<div class="col-2">
					<label>Internal Exam Performance:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$l.'
				</div>
			
		</div>
		<div class="row">
			
			<div class="col-2">
					<label>Any other Suggestions:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$m.'
				</div>
			
			<div class="col-2">
					<label>Interaction with Faculty Members:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$n.'
				</div>
			</div>
		
		<div class="row">
			
			<div class="col-2">
					<label>Interaction with Friends and Peers:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$o.'
				</div>
			
		
	
			
			<div class="col-2">
					<label>Discipline:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$p.'
				</div>
			</div>
		
		<div class="row">
		
			<div class="col-2">
					<label>Extra Circular Activities:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$q.'
				</div>
			
	
			
			<div class="col-2">
					<label>Achievements:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					'.$r.'
				</div>
	
		</div>
		
	</div>
			</div>	
	</div>	
</div>

<div class="container-fluid">

    <table class="table table-bordered">
              <thead ><h5 style="text-align: center;">Attendence</h5>
                <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">Semester1</th> 
                  <th scope="col">Semester2</th>
          
                  <th scope="col">Semester3</th>
                  <th scope="col">Semester4</th> 
                  <th scope="col">Semester5</th>
                  <th scope="col">Semester6</th>
				  <th scope="col">Semester7</th>
                  <th scope="col">Semester8</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
        <td>  '.$s.'</td>
        <td>  '.$t.'</td>

        <td>  '.$u.'</td>
        <td>  '.$v.'</td>

        <td> '.$w.'</td>
        <td> '.$x.' </td>
		<td> '.$y.'</td>
        <td> '.$z.'</td>
            </table>
    
    


        <table class="table table-bordered">
          <thead ><h5 style="text-align: center;">Current Semester Internal Marks:</h5>
            <tr>
              <th scope="col">S.No</th>
              <th scope="col">subject1</th> 
              <th scope="col">subject2</th>
              <th scope="col">subject3</th>
              <th scope="col">subject4</th> 
              <th scope="col">subject5</th>
              <th scope="col">subject6</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Internals1</th>
    <td>  '.$aa.'</td>
                      <td>  '.$ab.'</td>
      
                      <td>  '.$ac.'</td>
                      <td>  '.$ad.'</td>
      
                      <td>  '.$ae.'</td>
                      <td> '.$af.'</td>
        </tr>
              <tr>
                <th scope="row">Internal2</th>
      <td> '.$ag.'</td>
                        <td> '.$ah.'</td>
        
                        <td> '.$ai.'</td>
                        <td> '.$aj.'</td>
       
                        <td> '.$ak.'</td>
                        <td> '.$al.'</td>
        </tr>
                <tr>
                  <th scope="row">Final Assessment marks</th>
        <td> '.$am.'</td>
        <td> '.$an.'</td>

        <td> '.$ao.'</td>
        <td> '.$ap.'</td>

        <td> '.$aq.'</td>
        <td> '.$ar.'</td>
            </table>
        
		<table class="table table-bordered">
              <thead ><h5 style="text-align: center;">Semester Performance</h5>
                <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">Semester 1</th> 
                  <th scope="col">Semester 2</th>
                  <th scope="col">Semester 3</th>
                  <th scope="col">Semester 4</th> 
                  <th scope="col">Semester 5</th>
                  <th scope="col">Semester 6</th>
				  <th scope="col">Semester 7</th>
                  <th scope="col">Semester 8</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">SGPA</th>
        <td>  '.$as.'</td>
                          <td> '.$at.'</td>
          
                          <td>  '.$au.'</td>
                          <td>  '.$aw.'</td>
         
                          <td>  '.$ax.'</td>
                          <td>  '.$ay.'</td>
						  <td>  '.$az.'</td>
                          <td>  '.$ba.'</td>
						  </tr>
           
                <tr>
                  <th scope="row">Backlogs</th>
        <td> '.$bb.'</td>
                          <td>  '.$bc.'</td>
        
                          <td> '.$bd.'</td>
                          <td> '.$be.'</td>
      
                          <td> '.$bf.'</td>
                          <td> '.$bg.'</td>
						  <td> '.$bh.'</td>
                          <td> '.$bi.'</td>
            </table>
			 
      <table class="table table-bordered">
              <thead ><h5 style="text-align: center;">Semester Wise CGPA</h5>
                <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">Semester 1</th> 
                  <th scope="col">Semester 2</th>
                  <th scope="col">Semester 3</th>
                  <th scope="col">Semester 4</th> 
                  <th scope="col">Semester 5</th>
                  <th scope="col">Semester 6</th>
				  <th scope="col">Semester 7</th>
                  <th scope="col">Semester 8</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
        <td>  '.$bj.'</td>
                          <td> '.$bk.'</td>
          
                          <td> '.$bl.'</td>
                          <td> '.$bm.'</td>
         
                          <td> '.$bn.'</td>
                          <td> '.$bo.'</td>
						  <td> '.$bp.'</td>
                          <td> '.$bq.'</td>
            </table>
            </div>
			</div>
      </div>
			';
				}
			return $output;
 }	

 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF ");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      
      $content .= fetch_data();  
     
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I');  
 }  

 
			?>		
    <div class="flex-wrapper">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
               <!-- <a class="nav-link" href="#">E-counselling</a> -->
			   <img src="images/7c787b68-5ede-454b-82e4-b18a90555daf.png" alt="" width="180" height="70">
				</li>            
			</ul>
		</div>    
		<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
			<ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php" >About</a>
            </li>
            
           
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
           
			</ul>
        
            <!-- <button class="btn " data-toggle="modal" data-target="#exampleModal">  </button> -->
            <div class="dropdown">
				<button class="btn">Hi <?php echo $login_session; ?></button>
				<div class="dropdown-content">
					<a href="faculty_profile.php">Profile</a>
					<a href="edit_faculty_profile.php"> Edit Profile</a>
					<a href="logout.php">Log out</a>

				</div>
			</div>
        
		</div>
		</nav>
		<div class="container">
		   <div class="col-12">
				<div class="shadow-none p-3 mb-3 rounded" >
				<div class="row">
				<div class="col-2">
					<label>Date:</label>
				</div> 
				
				
			<div class="col-4 p-2 mb-3 rounded" style="background-color:skyblue;" >
			
               <?php echo $br; ?>
                    
               
                  
</div>
				</div>
							
					<div class="row">
		
			<div class="col-2">
					<label>Student Id:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $b; ?>
				</div>
			
			
	
			<div class="col-2">
					<label>Parent Name:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $e; ?>
				</div>
			</div>
					<div class="row">
		
			<div class="col-2">
					<label>Student Name:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $a; ?>
				</div>	
			<div class="col-2">
					<label>Parent Occupation:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $f; ?>
				</div>
			</div>
		
					<div class="row">
		
			<div class="col-2">
					<label>Current Semester:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $c; ?>
				</div>
			
			
	
			<div class="col-2">
					<label>Place:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $g; ?>
				</div>
			</div>
	
		<div class="row">
			
			<div class="col-2">
					<label>Mode of Travel to College:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $d; ?>
				</div>
			
			<div class="col-2">
					<label>Parent Phone Number:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $h; ?>
				</div>
			</div>
		
		<div class="row">
			
			<div class="col-2">
					<label>Current Attendence:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $i; ?>
				</div>
			
			
			<div class="col-2">
					<label>Regularity:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $j; ?>
				</div>
			</div>
	
		<div class="row">
		
			<div class="col-2">
					<label>New Technologies Learnt:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $k; ?>
				</div>
			
			<div class="col-2">
					<label>Internal Exam Performance:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $l; ?>
				</div>
			
		</div>
		<div class="row">
			
			<div class="col-2">
					<label>Any other Suggestions:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $m; ?>
				</div>
			
			<div class="col-2">
					<label>Interaction with Faculty Members:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $n; ?>
				</div>
			</div>
		
		<div class="row">
			
			<div class="col-2">
					<label>Interaction with Friends and Peers:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $o; ?>
				</div>
			
		
	
			
			<div class="col-2">
					<label>Discipline:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $p; ?>
				</div>
			</div>
		
		<div class="row">
		
			<div class="col-2">
					<label>Extra Circular Activities:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $q; ?>
				</div>
			
	
			
			<div class="col-2">
					<label>Achievements:</label>
				</div>  
				<div class="col-4 p-1 mb-3 rounded" style="background-color:skyblue;">
					<?php echo $r; ?>
				</div>
	
		</div>
		
	</div>
			</div>	
	

<div class="container-fluid">

    <table class="table table-bordered">
              <thead ><h5 style="text-align: center;">Attendence</h5>
                <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">Semester1</th> 
                  <th scope="col">Semester2</th>
          
                  <th scope="col">Semester3</th>
                  <th scope="col">Semester4</th> 
                  <th scope="col">Semester5</th>
                  <th scope="col">Semester6</th>
				  <th scope="col">Semester7</th>
                  <th scope="col">Semester8</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
        <td>  <?php echo $s; ?></td>
        <td>  <?php echo $t; ?></td>

        <td>  <?php echo $u; ?></td>
        <td>  <?php echo $v; ?></td>

        <td> <?php echo $w; ?></td>
        <td> <?php echo $x; ?> </td>
		<td> <?php echo $y; ?></td>
        <td> <?php echo $z; ?></td>
            </table>
    
    


        <table class="table table-bordered">
          <thead ><h5 style="text-align: center;">Current Semester Internal Marks:</h5>
            <tr>
              <th scope="col">S.No</th>
              <th scope="col">subject1</th> 
              <th scope="col">subject2</th>
              <th scope="col">subject3</th>
              <th scope="col">subject4</th> 
              <th scope="col">subject5</th>
              <th scope="col">subject6</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Internals1</th>
    <td>  <?php echo $aa; ?></td>
                      <td>  <?php echo $ab; ?></td>
      
                      <td>  <?php echo $ac; ?></td>
                      <td>  <?php echo $ad; ?></td>
      
                      <td>  <?php echo $ae; ?></td>
                      <td> <?php echo $af; ?></td>
        </tr>
              <tr>
                <th scope="row">Internal2</th>
      <td> <?php echo $ag; ?></td>
                        <td> <?php echo $ah; ?></td>
        
                        <td> <?php echo $ai; ?></td>
                        <td> <?php echo $aj; ?></td>
       
                        <td> <?php echo $ak; ?></td>
                        <td> <?php echo $al; ?></td>
        </tr>
                <tr>
                  <th scope="row">Final Assessment marks</th>
        <td> <?php echo $am; ?></td>
        <td> <?php echo $an; ?></td>

        <td> <?php echo $ao; ?></td>
        <td> <?php echo $ap; ?></td>

        <td> <?php echo $aq; ?></td>
        <td> <?php echo $ar; ?></td>
            </table>
        
		<table class="table table-bordered">
              <thead ><h5 style="text-align: center;">Semester Performance</h5>
                <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">Semester 1</th> 
                  <th scope="col">Semester 2</th>
                  <th scope="col">Semester 3</th>
                  <th scope="col">Semester 4</th> 
                  <th scope="col">Semester 5</th>
                  <th scope="col">Semester 6</th>
				  <th scope="col">Semester 7</th>
                  <th scope="col">Semester 8</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">SGPA</th>
        <td>  <?php echo $as; ?></td>
                          <td> <?php echo $at; ?></td>
          
                          <td>  <?php echo $au; ?></td>
                          <td>  <?php echo $aw; ?></td>
         
                          <td>  <?php echo $ax; ?></td>
                          <td>  <?php echo $ay; ?></td>
						  <td>  <?php echo $az; ?></td>
                          <td>  <?php echo $ba; ?></td>
						  </tr>
           
                <tr>
                  <th scope="row">Backlogs</th>
        <td> <?php echo $bb; ?></td>
                          <td>  <?php echo $bc; ?></td>
        
                          <td> <?php echo $bd; ?></td>
                          <td> <?php echo $be; ?></td>
      
                          <td> <?php echo $bf; ?></td>
                          <td> <?php echo $bg; ?></td>
						  <td> <?php echo $bh; ?></td>
                          <td> <?php echo $bi; ?></td>
            </table>
			 
      <table class="table table-bordered">
              <thead ><h5 style="text-align: center;">Semester Wise CGPA</h5>
                <tr>
                  <th scope="col">S.No</th>
                  <th scope="col">Semester 1</th> 
                  <th scope="col">Semester 2</th>
                  <th scope="col">Semester 3</th>
                  <th scope="col">Semester 4</th> 
                  <th scope="col">Semester 5</th>
                  <th scope="col">Semester 6</th>
				  <th scope="col">Semester 7</th>
                  <th scope="col">Semester 8</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
        <td>  <?php echo $bj; ?></td>
                          <td> <?php echo $bk; ?></td>
          
                          <td> <?php echo $bl; ?></td>
                          <td> <?php echo $bm; ?></td>
         
                          <td> <?php echo $bn; ?></td>
                          <td> <?php echo $bo; ?></td>
						  <td> <?php echo $bp; ?></td>
                          <td> <?php echo $bq; ?></td>
            </table>
            
      
         


  </div>
  

</div>
</div>	
		
		
		
				       
<div class="footer">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">E-counselling</a>
            </li>
            
        </ul>
    </div>
    
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class=" close fab fa-twitter"style="color:white;"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fab fa-facebook-square close"style="color:white;"></i></a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="#"><i class="fab fa-linkedin close"style="color:white;"></i></a>
        </li>
             <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
        </ul>

    </div>   
</nav>                 
  </div>         
  </div>    
           
           
            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   <script>
      $(function () {
    $('[data-toggle="popover"]').popover({
      container: 'body'
    })
  })
  </script>
  </div>
    
<!-- sign up -->	
	

<!-- login -->
 <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background-color:darkslategray;">
        <h5 class="modal-title" >Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <div class="container">
	
        <div class="row">
				<div class="col-md-3"></div>
          <div class="col-6 col-md-6 h black"> 
              <h2 >Login</h2>
               
               <form name="myform" action="" method = "POST">
          
          
          
          
          
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="number" class="form-control form-control-lg" id="colFormLabelLg" placeholder="userid" name="userid">
            </div>
            
          </div>
          
          
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="password" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Password" name="password">
            </div>
            
          </div>
		  
		  <div class="form-group row">
            <div class="col-sm-10">
              <input type="radio"  id="colFormLabelLg" name="type_login" value="student">Student<br>
			  <input type="radio" id="colFormLabelLg" name="type_login" value="faculty">Faculty<br>
			  <input type="radio" id="colFormLabelLg"  name="type_login" value="admin">Admin<br>
            </div>
            
          </div>       
          
           
         
          
          <div class="form-group row">
            <div class="col-sm-10">
               <input type="submit" name = "submit" class="btn btn-dark btn-lg " value="Login" >
                    
               
            
            
            </div>
            <span><?php echo $error;?></span>
          </div>
          
          
          
        </form>
                
                </div>
          
        </div>
        </div>
				<div class="col-md-3"></div>
		</div>
	</div>
</div>
</div>





</body>
</html>