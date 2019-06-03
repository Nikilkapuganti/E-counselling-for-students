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
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 4px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
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
            <!-- <button class="btn " data-toggle="modal" data-target="#exampleModal">  </button> -->
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
		 <div class="container-fluid" >
<?php
	
   $sql="SELECT * from student_profile where student_id = '$session_id'";

				$rs= mysqli_query($con, $sql) or die(mysql_error());
				if (mysqli_num_rows($rs) > 0) 
			{
				while($res=mysqli_fetch_array($rs))
				{					
					$imgpath=$res['image'];
					$userid = $res['student_id'];
					$name = $res['student_name'];
					$phno = $res['phno'];
					$email = $res['email'];
					$dob = $res['dob'];
					$gender = $res['gender'];
					$permaddr = $res['permaddr'];
					$presaddr = $res['presaddr'];
					$fname = $res['fname'];
					$fphno = $res['fphno'];
					$foccu = $res['foccu'];
					$femail = $res['femail'];
					$mname = $res['mname'];
					$mphno = $res['mphno'];
					$moccu = $res['moccu'];
					$memail = $res['memail'];
					$mtc = $res['mtc'];
					$place = $res['place'];
					echo '<div class="container-fluid" >
        <div class="row">
			<div class="col-3" >
			<div class="shadow-none p-3 mb-5 rounded" >
			<div class="col-md-12">
				<center><span class="d-block p-2 bg-primary text-white " >Profile Picture</span></center>
			</div>
		
			<div class="col-sm-6">';
echo "<img src='$imgpath' height='250' width='250' style='margin-top:30px;'> 
</div>"; ?>
<a data-toggle="modal" data-target="#exampleModal"><button type="submit" style="margin-top: 10px; margin-left: 50px;" class="button button2">Change Picture</button></a>

<?php					
			}								
			?>	
		</div>
	   </div>
   <div class="col-9">
		<div class="shadow-none p-3 mb-5 rounded" >
			<div class="row">
				<div class="col-2">
					<label>User ID:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $userid; ?>" disabled>
				</div>
				<div class="col-2">
					<label>Father Name:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $fname; ?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label>User Name:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $name; ?>" disabled>
				</div>
				<div class="col-2">
					<label>Mobile No:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $fphno; ?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label>Phone Number:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $phno; ?>" disabled>
				</div>
				<div class="col-2">
					<label>Occupation:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $foccu; ?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label>Email:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $email; ?>" disabled>
				</div>
				<div class="col-2">
					<label>Email:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $femail; ?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label>Date of Birth:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $dob; ?>" disabled>
				</div>
				<div class="col-2">
					<label>Mother Name:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $mname; ?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label>Gender:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $gender; ?>" disabled>
				</div>
				<div class="col-2">
					<label>Mobile No:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $mphno; ?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label>Present Address:</label>
				</div>  
				<div class="col-4">
					<textarea class="form-control" id="exampleInputEmail1" placeholder="<?php echo $presaddr; ?>" disabled></textarea>
				</div>
				<div class="col-2">
					<label>Occupation:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $moccu; ?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label>Permanent Address:</label>
				</div>  
				<div class="col-4">
					<textarea class="form-control" id="exampleInputEmail1" placeholder="<?php echo $permaddr; ?>" disabled></textarea>
				</div>
				<div class="col-2">
					<label>Email:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $memail; ?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label>Mode of Travel to College:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $mtc; ?>" disabled>
				</div>
				<div class="col-2">
					<label>Place:</label>
				</div>  
				<div class="col-4">
					<input class="form-control" id="exampleInputEmail1" placeholder="<?php echo $place; ?>" disabled>
				</div>
			</div>
		</div>
	</div> 
   </div>
	</div>
	</div>
	
	<?php 
			$sqlc="SELECT faculty_id from student_assign where student_id = '$session_id'";
			$resu = mysqli_query($con,$sqlc);
			while($res1=mysqli_fetch_array($resu))
				{	$s = $res1['faculty_id'];
			
			}
			$sql1="SELECT username from faculty_reg where userid = '$s'";
			$resu1 = mysqli_query($con,$sql1);
			while($res2=mysqli_fetch_array($resu1))
				{	$r = $res2['username'];
			
			}
			
			?>
	<div class="row shadow-none p-3 mb-5 rounded" style="margin-left:100px; margin-right:180px;outline-style: solid; outline-color: grey;">
		
			<div class="col-6 p-2 mb-3 rounded" style="background-color:lightpink;">
					Counsellor Name: <?php echo $r; ?>
				</div>  
			<div class="col-6" >
			<form method="post" action="student_counselling_form.php">
 <button type="submit" class="btn btn-block">Counselling form</button>
</form>
			</div>
			</div>	
			<?php } 
			else{
			?>
			<div class="col-6" style="margin:200px 100px 200px 400px;">
			<a href="registration.php"><button  class="btn btn-block">Fill Your Profile To Proceed</button></a></div>
			<?php
			}?>
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
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background-color:darkslategray;">
        <h5 class="modal-title" ></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">       
      <div class="container">	
        <div class="row">
				<div class="col-md-3"></div>
          <div class="col-6 col-md-6 h black"> 
              <h5 >Change Profile Picture</h5>               
               <form name="myform" action="update_student_picture.php" method = "POST" enctype="multipart/form-data">          
           <input type="hidden" name="text" value="<?php echo $userid; ?>" />
          <div class="form-group row">
            <div class="col-sm-10">
             <input type="file" class="form-control" name="file" />
            </div>            
          </div>         
          <div class="form-group row">
            <div class="col-sm-10">
               <input type="submit" name = "submit" class="btn btn-dark btn-s " value="Change" >           
            </div>        
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