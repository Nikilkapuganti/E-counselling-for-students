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
	  $var = $_POST['text'];	 
		$sdate = $_POST['sdate'];	
		$sql = "SELECT * from student_counselling where student_id = '$var' and date = '$sdate'";

			$con = mysqli_connect("localhost","root","","sample");
			
				$rs= mysqli_query($con, $sql) or die(mysql_error());
				while($res=mysqli_fetch_array($rs))
				{					
					
$name=$res["name"];
$sid=$res["student_id"];
$c=$res["csem"];
$mtc=$res["mtc"];
$pname=$res["pname"];
$occu=$res["occu"];
$place=$res["place"];
$atten=$res["attendence"];
$ntls=$res["ntls"];
$prob=$res["problems"];
$act=$res["activities"];
$ach=$res["ach"];
$s=$res["as1"];
$t=$res["as2"];
$u=$res["as3"];
$v=$res["as4"];
$w=$res["as5"];
$x=$res["as6"];
$y=$res["as7"];
$z=$res["as8"];
$intern1=$res["intern1"];
$intern2=$res["intern2"];
$intern3=$res["intern3"];
$intern4=$res["intern4"];
$intern5=$res["intern5"];
$intern6=$res["intern6"];
$intern21=$res["intern21"];
$intern22=$res["intern22"];
$intern23=$res["intern23"];
$intern24=$res["intern24"];
$intern25=$res["intern25"];
$intern26=$res["intern26"];
$csa1=$res["csa1"];
$csa2=$res["csa2"];
$csa3=$res["csa3"];
$csa4=$res["csa4"];
$csa5=$res["csa5"];
$csa6=$res["csa6"];
$ssem1=$res["ssem1"];
$ssem2=$res["ssem2"];
$ssem3=$res["ssem3"];
$ssem4=$res["ssem4"];
$ssem5=$res["ssem5"];
$ssem6=$res["ssem6"];
$ssem7=$res["ssem7"];
$ssem8=$res["ssem8"];
$bsem1=$res["bsem1"];
$bsem2=$res["bsem2"];
$bsem3=$res["bsem3"];
$bsem4=$res["bsem4"];
$bsem5=$res["bsem5"];
$bsem6=$res["bsem6"];
$bsem7=$res["bsem7"];
$bsem8=$res["bsem8"];
$csem1=$res["csem1"];
$csem2=$res["csem2"];
$csem3=$res["csem3"];
$csem4=$res["csem4"];
$csem5=$res["csem5"];							
$csem6=$res["csem6"];
$csem7=$res["csem7"];
$csem8=$res["csem8"];
$br=$res["date"];

								
			}
			$sqlc = "SELECT * from student_profile where student_id = '$var'";

			$con = mysqli_connect("localhost","root","","sample");
			
				$rs1= mysqli_query($con, $sqlc) or die(mysql_error());
				while($resu=mysqli_fetch_array($rs1))
				{	
			
					$phno=$resu["fphno"];	
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
	<div class="container-fluid">
	<div class="row"><div class="col-6" style="margin-top:30px;"></div></div>
        <div class="row">
                <div class="col-6">

                        <div class="shadow-none p-3 mb-5 bg-light rounded">

<h4>Student Information:</h4>

                                <form action="faculty_counselling_form_code.php" method="POST">
                                        <div class="form-group">
                                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sname" placeholder="Student Name" value="<?php echo $name; ?>">
                                        </div>
                                      
                                      <div class="form-group">
                                          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sid" placeholder="Regd no" value="<?php echo $sid; ?>">
                                        </div>
                                      
                                      <div class="form-group">
                                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="csem"  placeholder="Current Semester" value="<?php echo $c; ?>">
                                        </div>
                                      
                                      <div class="form-group">
                                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mtc" placeholder="Mode of Travel to College" value="<?php echo $mtc; ?>">
                                        </div>
                                      
                                      
                                      


                            
                        </div> 



                </div>
              
                               <div class="col-6">

                        <div class="shadow-none p-3 mb-5 bg-light rounded">

							<h4>Parent/Guardian Information:</h4>

                                
                                        <div class="form-group">
                                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pname" placeholder="Parent/Guardian Name" value="<?php echo $pname; ?>">
                                        </div>
                                      
                                      <div class="form-group">
                                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="occu" placeholder="Occupation" value="<?php echo $occu; ?>">
                                        </div>
                                      
                                      <div class="form-group">
                                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="place" placeholder="Place" value="<?php echo $place; ?>">
                                        </div>
                                      
                                      <div class="form-group">
                                          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phno" placeholder="Phone Number" value="<?php echo $phno; ?>">
                                        </div>
                                      
                                      
                                     


                            
                        </div> 



                
                                 




                </div>
              </div>
            
</div>


<div class="container-fluid">
  <div class="row">


      <div class="col-6">


          <div class="shadow-none p-3 mb-5 bg-light rounded"><h3>Academic Performance</h3>
            <hr>
			<div class="row">
	<div class="col-2">
             Regularity:</div>
			 <div class="col-5">
			 <input type="float" class="form-control" id="exampleInputEmail1" name="pa" placeholder="Present Attendence" value="<?php echo $atten; ?>"><br>
              </div>
			  </div>
              <input type="radio" name="regularity" value="Regular"> Regular [above 75]&nbsp
               <input type="radio" name="regularity" value="Irregular"> Irregular [below 75]
                           
                

                                <div class="form-group">
                                  <input type="text" class="form-control" id="exampleInputEmail1" name="tls" placeholder="New technologies learning by student" value="<?php echo $ntls; ?>">
                                </div>
                              
                              <div class="form-group">
                                  <input class="form-control" type="text" id="exampleInputEmail1" name="iep" placeholder="Internal Exam performance" value="">                   
								  </div>
                              
 
                              <div class="form-group">
                                  <textarea class="form-control" id="exampleInputEmail1" name="any_other" placeholder="Any Other Suggestions"></textarea>
                                </div>
                        
                           
                              </table>
                           







              </div>
              
              
              
              





  </div>




  <div class="col-6">    
    


        <div class="shadow-none p-3 mb-5 bg-light rounded"> <h3>Social Performance</h3>
          <hr>
               With faculty Members<br>
              
              <input type="radio" name="wfm" value="good"> Good
               <input type="radio" name="wfm" value="fair"  > Fair
               <input type="radio" name="wfm" value="needs_attention"  > Needs attention
            <br>
                      
                   With friends and Peers<br>
              <input type="radio" name="wfp" value="good"> Good
               <input type="radio" name="wfp" value="fair"  > Fair
               <input type="radio" name="wfp" value="needs_attention"  > Needs attention
            <br>
                      
			       Discipline
                      <br>
                           
               <input type="radio" name="disci" value="good"> Good
                <input type="radio" name="disci" value="fair"  > Fair
                <input type="radio" name="disci" value="needs_attention"  > Needs attention
           

                     
              <br>



                                <div class="form-group">
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="xa" placeholder="Extra Circular Activities" value="<?php echo $act; ?>">
                                </div>
                            <div class="form-group">
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ach" placeholder="Achievements" value="<?php echo $ach; ?>">
                                </div>
                          







              </div>
              
              
</div>

</div>










<div class="container-fluid change">

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
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as1" placeholder="" value="<?php echo $s; ?>"></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as2" placeholder="" value="<?php echo $t; ?>"></td>

        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as3" placeholder="" value="<?php echo $u; ?>"></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as4" placeholder="<?php echo $v; ?>"></td>

        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as5"  placeholder=""value="<?php echo $w; ?>"></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as6" placeholder=""value="<?php echo $x; ?>"> </td>
		<td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as7" placeholder="" value="<?php echo $y; ?>"></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as8" placeholder="" value="<?php echo $z; ?>"></td>
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
    <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int1" placeholder="" value="<?php echo $intern1; ?>"></td>
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int2" placeholder="" value="<?php echo $intern2; ?>"></td>
      
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int3" placeholder="" value="<?php echo $intern3; ?>"></td>
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int4" placeholder="" value="<?php echo $intern4; ?>"></td>
      
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int5" placeholder="" value="<?php echo $intern5; ?>"></td>
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int6" placeholder="" value="<?php echo $intern6; ?>"></td>
        </tr>
              <tr>
                <th scope="row">Internal2</th>
      <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int21" placeholder="" value="<?php echo $intern21; ?>"></td>
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int22" placeholder="" value="<?php echo $intern22; ?>"></td>
        
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int23" placeholder="" value="<?php echo $intern23; ?>"></td>
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int24" placeholder="" value="<?php echo $intern24; ?>"></td>
       
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int25" placeholder="" value="<?php echo $intern25; ?>"></td>
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int26" placeholder="" value="<?php echo $intern26; ?>"></td>
        </tr>
                <tr>
                  <th scope="row">Final Assessment marks</th>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="csa1" placeholder="" value="<?php echo $csa1; ?>"></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csa2" placeholder="" value="<?php echo $csa2; ?>"></td>

        <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csa3" placeholder="" value="<?php echo $csa3; ?>"></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csa4"  placeholder="" value="<?php echo $csa4; ?>"></td>

        <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csa5"  placeholder="" value="<?php echo $csa5; ?>"></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csa6"  placeholder="" value="<?php echo $csa6; ?>"></td>
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
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="ssem1" placeholder="" value="<?php echo $ssem1; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="ssem2" placeholder="" value="<?php echo $ssem2; ?>"></td>
          
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem3" placeholder="" value="<?php echo $ssem3; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem4" placeholder="" value="<?php echo $ssem4; ?>"></td>
         
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem5" placeholder="" value="<?php echo $ssem5; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem6"  placeholder="" value="<?php echo $ssem6; ?>"></td>
						  <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem7" placeholder="" value="<?php echo $ssem7; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem8" placeholder=""value="<?php echo $ssem8; ?>"></td>
						  </tr>
           
                <tr>
                  <th scope="row">Backlogs</th>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1"    name="bsem1"  placeholder="" value="<?php echo $bsem1; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="bsem2"   placeholder="" value="<?php echo $bsem2; ?>"></td>
        
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="bsem3"  placeholder="" value="<?php echo $bsem3; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="bsem4"  placeholder="" value="<?php echo $bsem4; ?>"></td>
      
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="bsem5"  placeholder="" value="<?php echo $bsem5; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="bsem6"  placeholder="" value="<?php echo $bsem6; ?>"></td>
						  <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="bsem7"   placeholder="" value="<?php echo $bsem7; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="bsem8"  placeholder="" value="<?php echo $bsem8; ?>"></td>
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
        <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csem1"  placeholder="" value="<?php echo $csem1; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem2"  placeholder="" value="<?php echo $csem2; ?>"></td>
          
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem3"  placeholder="" value="<?php echo $csem3; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csem4"   placeholder="" value="<?php echo $csem4; ?>"></td>
         
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem5"  placeholder="" value="<?php echo $csem5; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem6"  placeholder="" value="<?php echo $csem6; ?>"></td>
						  <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem7"  placeholder="" value="<?php echo $csem7; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem8"  placeholder="" value="<?php echo $csem8; ?>"></td>
            </table>
            
      <input type="hidden" value="<?php echo $session_id; ?>" name="faculty_id" />
         


  </div>
  <div class="form-group row">
			<div class="col-8" style="margin-left:100px;">
               <input type="date" class="form-control" id="exampleInputPassword1" name="date" placeholder="Enter date" required>
                    
               
            
            
            </div>
            <div class="col-2">
               <input type="submit" name = "submit" class="btn btn-dark btn-lg " value="Submit" >
                    
               
            
            
            </div>
</div>
</form>
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