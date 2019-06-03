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

function fetch_data()  
 {  
 
 $sid = $_POST['text1'];
		$sdate = $_POST['text'];
 	
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
				<div class="shadow-none p-3 mb-5 rounded" >
				<div class="row">
				<div class="col-2">
					<label>Date:</label>
				</div> 
				
				
			<div class="col-4 p-2 mb-5 rounded" style="background-color:skyblue;" >
			
               '.$res["date"].'
                    
               
                  
</div>
				</div>
							
					<div class="row">
		
			<div class="col-2">
					<label>Student Id:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$b.'
				</div>
			
			
	
			<div class="col-2">
					<label>Parent Name:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$e.'
				</div>
			</div>
					<div class="row">
		
			<div class="col-2">
					<label>Student Name:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$a.'
				</div>
			
			
	
			<div class="col-2">
					<label>Parent Occupation:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$f.'
				</div>
			</div>
		
					<div class="row">
		
			<div class="col-2">
					<label>Current Semester:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$c.'
				</div>
			
			
	
			<div class="col-2">
					<label>Place:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$g.'
				</div>
			</div>
	
		<div class="row">
			
			<div class="col-2">
					<label>Mode of Travel to College:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$d.'
				</div>
			
			<div class="col-2">
					<label>Parent Phone Number:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$h.'
				</div>
			</div>
		
		<div class="row">
			
			<div class="col-2">
					<label>Current Attendence:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$i.'
				</div>
			
			
			<div class="col-2">
					<label>Regularity:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$j.'
				</div>
			</div>
	
		<div class="row">
		
			<div class="col-2">
					<label>New Technologies Learnt:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$k.'
				</div>
			
			<div class="col-2">
					<label>Internal Exam Performance:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$l.'
				</div>
			
		</div>
		<div class="row">
			
			<div class="col-2">
					<label>Any other Suggestions:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$m.'
				</div>
			
			<div class="col-2">
					<label>Interaction with Faculty Members:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$n.'
				</div>
			</div>
		
		<div class="row">
			
			<div class="col-2">
					<label>Interaction with Friends and Peers:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$o.'
				</div>
			
		
	
			
			<div class="col-2">
					<label>Discipline:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$p.'
				</div>
			</div>
		
		<div class="row">
		
			<div class="col-2">
					<label>Extra Circular Activities:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
					'.$q.'
				</div>
			
	
			
			<div class="col-2">
					<label>Achievements:</label>
				</div>  
				<div class="col-4 p-1 mb-5 rounded" style="background-color:skyblue;">
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
                          <td> '.$res['csem8'].'</td>
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

		


</body>
</html>