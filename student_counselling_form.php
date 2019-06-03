<?php 
include('connection.php');
include('student_session.php');
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
            <!-- <button class="btn " data-to        
ggle="modal" data-target="#exampleModal">  </button> -->
            <div class="dropdown">
				<button class="btn">Hi <?php echo $login_session; ?></button>
				<div class="dropdown-content">
				<a href="change_password.php"> Change Password</a>
					<a href="edit_student_profile.php"> Edit Profile</a>
					<a href="logout.php">Log out</a>

				</div>
			</div>
        
		</div>
	</nav>
		
		<?php 
							
							$sql="SELECT * from student_profile where student_id = '$session_id'";
							$con = mysqli_connect("localhost","root","","sample");
			
							$rs= mysqli_query($con, $sql) or die(mysql_error());
							#if (mysqli_num_rows($rs) > 0) 
							#{
								while($res=mysqli_fetch_array($rs))
								{					
									
									$userid = $res['student_id'];
					$name = $res['student_name'];
					$fname = $res['fname'];
					$foccu = $res['foccu'];
					$mtc = $res['mtc'];
					$place = $res['place'];
					
								}
									?>
		
		
	 <div class="shadow-none p-3 mb-5 bg-light rounded">
	 
        <div class="container">
		<h3 style="margin-left:300px; color:darkblue;"> Student Counselling Form </h3>
		<form action="student_counselling_form_code.php" method="POST">
                <div class="row">
						<div class="col-6">                        
                                <div class="form-group">                                 
									<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Student Fullname" value="<?php echo $name; ?>" >                                  
                                </div>
						</div>
						<div class="col-6">
								<div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="pname" placeholder="Parent/Guardian Name" value="<?php echo $fname; ?>" >
                                </div>
						</div>
				</div>
				<div class="row">
				<div class="col-6">                        
						<div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="rollno" placeholder="Roll Number" value="<?php echo $userid; ?>" >
                        </div>
						</div>
						<div class="col-6">                        
						<div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="occu" placeholder="Occupation" value="<?php echo $foccu; ?>" >
                        </div>
						</div>
				</div>
				<div class="row">
				<div class="col-6">                        
						<div class="form-group">                                 
									<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mtc" placeholder="Mode of Travel to college(hosteler,days scholar or by bus)" value="<?php echo $mtc; ?>" >                                  
                                </div></div>
								<div class="col-6">                        
						<div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="place" placeholder="Place" value="<?php echo $place; ?>" >
                                      </div>
									  </div>
				</div>
		<?php 
							
							$sqlc="SELECT * from student_counselling where student_id = '$session_id'";
							$con = mysqli_connect("localhost","root","","sample");
			
							$rs1= mysqli_query($con, $sqlc) or die(mysql_error());
							if (mysqli_num_rows($rs1) > 0) 
							{				
#echo "hi";						
				while($resu=mysqli_fetch_array($rs1))
				{			
$sid=$resu["student_id"];
$csem=$resu["csem"];
$mtc=$resu["mtc"];
$pname=$resu["pname"];
$poccu=$resu["occu"];
$place=$resu["place"];
$atten=$resu["attendence"];
$ntls=$resu["ntls"];
$prob=$resu["problems"];
$act=$resu["activities"];
$ach=$resu["ach"];
$sa1=$resu["as1"];
$sa2=$resu["as2"];
$sa3=$resu["as3"];
$sa4=$resu["as4"];
$sa5=$resu["as5"];
$sa6=$resu["as6"];
$sa7=$resu["as7"];
$sa8=$resu["as8"];
$intern1=$resu["intern1"];
$intern2=$resu["intern2"];
$intern3=$resu["intern3"];
$intern4=$resu["intern4"];
$intern5=$resu["intern5"];
$intern6=$resu["intern6"];
$intern21=$resu["intern21"];
$intern22=$resu["intern22"];
$intern23=$resu["intern23"];
$intern24=$resu["intern24"];
$intern25=$resu["intern25"];
$intern26=$resu["intern26"];
$csa1=$resu["csa1"];
$csa2=$resu["csa2"];
$csa3=$resu["csa3"];
$csa4=$resu["csa4"];
$csa5=$resu["csa5"];
$csa6=$resu["csa6"];
$ssem1=$resu["ssem1"];
$ssem2=$resu["ssem2"];
$ssem3=$resu["ssem3"];
$ssem4=$resu["ssem4"];
$ssem5=$resu["ssem5"];
$ssem6=$resu["ssem6"];
$ssem7=$resu["ssem7"];
$ssem8=$resu["ssem8"];
$bsem1=$resu["bsem1"];
$bsem2=$resu["bsem2"];
$bsem3=$resu["bsem3"];
$bsem4=$resu["bsem4"];
$bsem5=$resu["bsem5"];
$bsem6=$resu["bsem6"];
$bsem7=$resu["bsem7"];
$bsem8=$resu["bsem8"];
$csem1=$resu["csem1"];
$csem2=$resu["csem2"];
$csem3=$resu["csem3"];
$csem4=$resu["csem4"];
$csem5=$resu["csem5"];							
$csem6=$resu["csem6"];
$csem7=$resu["csem7"];
$csem8=$resu["csem8"];


							}
									?>				
			

			
				<div class="row">
				<div class="col-6">                        
						<div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="csem" placeholder="Current Semester(ex:1st Sem)" value="<?php echo $csem; ?>">
                                </div></div>
								<div class="col-6">                        
						 <div class="form-group">
                                            <input type="number" class="form-control" id="exampleInputPassword1" name="atten" placeholder="Attendence(eg:80)" value="<?php echo $atten; ?>">
                                          </div>
                                
									  </div>
				</div>
				<div class="row">
				<div class="col-6">                        
						<div class="form-group">
                                   <textarea class="form-control" id="exampleInputPassword1" name="act" placeholder="College Activities(If any participations)" value="<?php echo $act; ?>"></textarea>
                        </div>
						</div>
						<div class="col-6">                        
						<div class="form-group">
                                    <textarea class="form-control" id="exampleInputPassword1" name="ntls" placeholder="New Technologies learnt by you(If any)" value="<?php echo $ntls; ?>"></textarea>
                        </div>
						</div>
				</div>
				<div class="row">
				<div class="col-6">                        
						<div class="form-group">
                            <textarea class="form-control" id="exampleInputPassword1" name="problem" placeholder="Any Problems" value="<?php echo $prob; ?>"></textarea>
                        </div>
						</div>
						<div class="col-6">                        
						<div class="form-group">
                             <textarea class="form-control" id="exampleInputPassword1" name="ach" placeholder="Achievments(if any)"value="<?php echo $ach; ?>"></textarea>
                        </div>
						</div>
				</div>
						
				  
                 
                  </div>

<div class="container">
                <div class="row"><center>
				
				<table class="table table-bordered">
              <thead ><h5 style="text-align: center;">Attendence</h5>
                <tr>
                  <th scope="col" style="color:darkblue;">S.No</th>
                  <th scope="col" style="color:darkblue;">Semester1</th> 
                  <th scope="col" style="color:darkblue;">Semester2</th>
          
                  <th scope="col" style="color:darkblue;">Semester3</th>
                  <th scope="col" style="color:darkblue;">Semester4</th> 
                  <th scope="col" style="color:darkblue;">Semester5</th>
                  <th scope="col" style="color:darkblue;">Semester6</th>
				  <th scope="col" style="color:darkblue;">Semester7</th>
                  <th scope="col"style="color:darkblue;">Semester8</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" style="color:darkblue;">1</th>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as1" placeholder="" value="<?php echo $sa1; ?>"></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as2" placeholder="" value="<?php echo $sa2; ?>"></td>

        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as3" placeholder="" value="<?php echo $sa3; ?>"></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as4" placeholder="" value="<?php echo $sa4; ?>"></td>

        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as5"  placeholder=""value="<?php echo $sa5; ?>"></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as6" placeholder=""value="<?php echo $sa6; ?>"> </td>
		<td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as7" placeholder="" value="<?php echo $sa7; ?>"></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as8" placeholder="" value="<?php echo $sa8; ?>"></td>
            </table>
    
                       <table class="table table-bordered">
          <thead ><h5 >Current Semester Internal Marks:</h5>
            <tr>
              <th scope="col" style="color:darkblue;">S.No</th>
              <th scope="col" style="color:darkblue;">subject1</th> 
              <th scope="col" style="color:darkblue;">subject2</th>
              <th scope="col" style="color:darkblue;">subject3</th>
              <th scope="col" style="color:darkblue;">subject4</th> 
              <th scope="col" style="color:darkblue;">subject5</th>
              <th scope="col" style="color:darkblue;">subject6</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" style="color:darkblue;">Internals1</th>
    <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int1" placeholder="" value="<?php echo $intern1; ?>"></td>
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int2" placeholder="" value="<?php echo $intern2; ?>"></td>
      
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int3" placeholder="" value="<?php echo $intern3; ?>"></td>
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int4" placeholder="" value="<?php echo $intern4; ?>"></td>
      
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int5" placeholder="" value="<?php echo $intern5; ?>"></td>
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int6" placeholder="" value="<?php echo $intern6; ?>"></td>
        </tr>
              <tr>
                <th scope="row" style="color:darkblue;">Internal2</th>
      <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int21" placeholder="" value="<?php echo $intern21; ?>"></td>
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int22" placeholder="" value="<?php echo $intern22; ?>"></td>
        
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int23" placeholder="" value="<?php echo $intern23; ?>"></td>
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int24" placeholder="" value="<?php echo $intern24; ?>"></td>
       
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int25" placeholder="" value="<?php echo $intern25; ?>"></td>
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int26" placeholder="" value="<?php echo $intern26; ?>"></td>
        </tr>
                <tr>
                  <th scope="row" style="color:darkblue;">Final Assessment marks</th>
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
                  <th scope="col" style="color:darkblue;">S.No</th>
                  <th scope="col" style="color:darkblue;">Semester 1</th> 
                  <th scope="col" style="color:darkblue;">Semester 2</th>
                  <th scope="col" style="color:darkblue;">Semester 3</th>
                  <th scope="col" style="color:darkblue;">Semester 4</th> 
                  <th scope="col" style="color:darkblue;">Semester 5</th>
                  <th scope="col" style="color:darkblue;">Semester 6</th>
				  <th scope="col" style="color:darkblue;">Semester 7</th>
                  <th scope="col" style="color:darkblue;">Semester 8</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" style="color:darkblue;">SGPA</th>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="ssem1" placeholder="" value="<?php echo $ssem1; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="ssem2" placeholder="" value="<?php echo $ssem2; ?>"></td>
          
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem3" placeholder="" value="<?php echo $ssem3; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem4" placeholder="" value="<?php echo $ssem4; ?>"></td>
         
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem5" placeholder="" value="<?php echo $ssem5; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem6"  placeholder="" value="<?php echo $ssem6; ?>"></td>
						  <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem7" placeholder="" value="<?php echo $ssem7; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem8" placeholder="" value="<?php echo $ssem8; ?>"></td>
						  </tr>
           
                <tr>
                  <th scope="row" style="color:darkblue;">Backlogs</th>
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
                                <thead ><h5 style="text-align: center;">SemesterWise CGPA</h5>
                                  <tr>
                                    <th scope="col" style="color:darkblue;">S.No</th>
                                    <th scope="col" style="color:darkblue;">Semester 1</th> 
                                    <th scope="col" style="color:darkblue;">Semester 2</th>
                                    <th scope="col" style="color:darkblue;">Semester 3</th>
                                    <th scope="col" style="color:darkblue;">Semester 4</th> 
                                    <th scope="col" style="color:darkblue;">Semester 5</th>
                                    <th scope="col" style="color:darkblue;">Semester 6</th>
									<th scope="col" style="color:darkblue;">Semester 7</th>
                                    <th scope="col" style="color:darkblue;">Semester 8</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row" style="color:darkblue;">1</th>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csem1"  placeholder="" value="<?php echo $csem1; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem2"  placeholder="" value="<?php echo $csem2; ?>"></td>
          
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem3"  placeholder="" value="<?php echo $csem3; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csem4"   placeholder="" value="<?php echo $csem4; ?>"></td>
         
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem5"  placeholder="" value="<?php echo $csem5; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem6"  placeholder="" value="<?php echo $csem6; ?>"></td>
						  <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem7"  placeholder="" value="<?php echo $csem7; ?>"></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem8"  placeholder="" value="<?php echo $csem8; ?>"></td>
                              </table>
                              
                        
          </center>
                
                    </div>
							<?php
							}
							else{
								#echo "hello";
							?>	
								
							
				<div class="row">
				<div class="col-6">                        
						<div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="csem" placeholder="Current Semester(ex:1st Sem)">
                                </div></div>
								<div class="col-6">                        
						 <div class="form-group">
                                            <input type="number" class="form-control" id="exampleInputPassword1" name="atten" placeholder="Attendence(eg:80)">
                                          </div>
                                
									  </div>
				</div>
				<div class="row">
				<div class="col-6">                        
						<div class="form-group">
                                   <textarea class="form-control" id="exampleInputPassword1" name="act" placeholder="College Activities(If any participations)" ></textarea>
                        </div>
						</div>
						<div class="col-6">                        
						<div class="form-group">
                                    <textarea class="form-control" id="exampleInputPassword1" name="ntls" placeholder="New Technologies learnt by you(If any)" ></textarea>
                        </div>
						</div>
				</div>
				<div class="row">
				<div class="col-6">                        
						<div class="form-group">
                            <textarea class="form-control" id="exampleInputPassword1" name="problem" placeholder="Any Problems" ></textarea>
                        </div>
						</div>
						<div class="col-6">                        
						<div class="form-group">
                             <textarea class="form-control" id="exampleInputPassword1" name="ach" placeholder="Achievments(if any)"></textarea>
                        </div>
						</div>
				</div>
						
				  
                 
                  </div>

<div class="container">
                <div class="row"><center>
				
				<table class="table table-bordered">
              <thead ><h5 style="text-align: center;">Attendence</h5>
                <tr>
                  <th scope="col" style="color:darkblue;">S.No</th>
                  <th scope="col" style="color:darkblue;">Semester1</th> 
                  <th scope="col" style="color:darkblue;">Semester2</th>
          
                  <th scope="col" style="color:darkblue;">Semester3</th>
                  <th scope="col" style="color:darkblue;">Semester4</th> 
                  <th scope="col" style="color:darkblue;">Semester5</th>
                  <th scope="col" style="color:darkblue;">Semester6</th>
				  <th scope="col" style="color:darkblue;">Semester7</th>
                  <th scope="col"style="color:darkblue;">Semester8</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" style="color:darkblue;">1</th>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as1" placeholder="" ></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as2" placeholder="" ></td>

        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as3" placeholder="" ></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as4" placeholder="" ></td>

        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as5"  placeholder=""></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as6" placeholder=""> </td>
		<td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as7" placeholder=""></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="as8" placeholder=""></td>
            </table>
    
                       <table class="table table-bordered">
          <thead ><h5 >Current Semester Internal Marks:</h5>
            <tr>
              <th scope="col" style="color:darkblue;">S.No</th>
              <th scope="col" style="color:darkblue;">subject1</th> 
              <th scope="col" style="color:darkblue;">subject2</th>
              <th scope="col" style="color:darkblue;">subject3</th>
              <th scope="col" style="color:darkblue;">subject4</th> 
              <th scope="col" style="color:darkblue;">subject5</th>
              <th scope="col" style="color:darkblue;">subject6</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" style="color:darkblue;">Internals1</th>
    <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int1" placeholder=""></td>
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int2" placeholder=""></td>
      
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int3" placeholder="" ></td>
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int4" placeholder="" ></td>
      
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="int5" placeholder="" ></td>
                      <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int6" placeholder="" ></td>
        </tr>
              <tr>
                <th scope="row" style="color:darkblue;">Internal2</th>
      <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int21" placeholder="" ></td>
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int22" placeholder="" ></td>
        
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int23" placeholder="" ></td>
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int24" placeholder="" ></td>
       
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int25" placeholder="" ></td>
                        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="int26" placeholder="" ></td>
        </tr>
                <tr>
                  <th scope="row" style="color:darkblue;">Final Assessment marks</th>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="csa1" placeholder="" ></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csa2" placeholder=""></td>

        <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csa3" placeholder=""></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csa4"  placeholder=""></td>

        <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csa5"  placeholder=""></td>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csa6"  placeholder=""></td>
            </table>        
		<table class="table table-bordered">
              <thead ><h5 style="text-align: center;">Semester Performance</h5>
                <tr>
                  <th scope="col" style="color:darkblue;">S.No</th>
                  <th scope="col" style="color:darkblue;">Semester 1</th> 
                  <th scope="col" style="color:darkblue;">Semester 2</th>
                  <th scope="col" style="color:darkblue;">Semester 3</th>
                  <th scope="col" style="color:darkblue;">Semester 4</th> 
                  <th scope="col" style="color:darkblue;">Semester 5</th>
                  <th scope="col" style="color:darkblue;">Semester 6</th>
				  <th scope="col" style="color:darkblue;">Semester 7</th>
                  <th scope="col" style="color:darkblue;">Semester 8</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" style="color:darkblue;">SGPA</th>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="ssem1" placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1" name="ssem2" placeholder=""></td>
          
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem3" placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem4" placeholder=""></td>
         
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem5" placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem6"  placeholder=""></td>
						  <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem7" placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="ssem8" placeholder=""></td>
						  </tr>
           
                <tr>
                  <th scope="row" style="color:darkblue;">Backlogs</th>
        <td>  <input type="float" class="form-control" id="exampleInputPassword1"    name="bsem1"  placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="bsem2"   placeholder=""></td>
        
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="bsem3"  placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="bsem4"  placeholder=""></td>
      
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="bsem5"  placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="bsem6"  placeholder=""></td>
						  <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="bsem7"   placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="bsem8"  placeholder=""></td>
            </table>
                           
						  
                        <table class="table table-bordered">
                                <thead ><h5 style="text-align: center;">SemesterWise CGPA</h5>
                                  <tr>
                                    <th scope="col" style="color:darkblue;">S.No</th>
                                    <th scope="col" style="color:darkblue;">Semester 1</th> 
                                    <th scope="col" style="color:darkblue;">Semester 2</th>
                                    <th scope="col" style="color:darkblue;">Semester 3</th>
                                    <th scope="col" style="color:darkblue;">Semester 4</th> 
                                    <th scope="col" style="color:darkblue;">Semester 5</th>
                                    <th scope="col" style="color:darkblue;">Semester 6</th>
									<th scope="col" style="color:darkblue;">Semester 7</th>
                                    <th scope="col" style="color:darkblue;">Semester 8</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row" style="color:darkblue;">1</th>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csem1"  placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem2"  placeholder=""></td>
          
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem3"  placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"  name="csem4"   placeholder=""></td>
         
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem5"  placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem6"  placeholder=""></td>
						  <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem7"  placeholder=""></td>
                          <td>  <input type="float" class="form-control" id="exampleInputPassword1"   name="csem8"  placeholder=""></td>
                              </table>
                              
                        
          </center>
                
                    </div>	
								
								
								
						<?php		
								
							}
 ?>
  <div class="form-group row">
  <div class="col-2">
  Enter Date:
  </div>
			<div class="col-8">
               <input type="date" class="form-control" id="exampleInputPassword1" name="date" placeholder="Enter date" required>
                    
               
            
            
            </div>
            <div class="col-2">
               <input type="submit" name = "submit" class="btn btn-dark btn-lg " value="Submit" >
                    
               </div>
			   </div>
            
            
            </div>
</div>
	</form>	
		
		        
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
            <a class="nav-link" href="https://twitter.com/sircrrengg"><i class=" close fab fa-twitter"style="color:white;"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/sircrrengg"><i class="fab fa-facebook-square close"style="color:white;"></i></a>
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
 




</body>
</html>