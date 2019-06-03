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
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
  border-radius: 5px;
  background-color: skyblue;
  padding: 10px;
  margin-top: 50px;
  margin-left: 80px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container1 {
  padding: 2px 16px;
  
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
					<a href="faculty_profile.php">Profile</a>
					<a href="edit_faculty_profile.php"> Edit Profile</a>
					<a href="logout.php">Log out</a>

				</div>
			</div>
        
		</div>
		</nav>
           
		
<?php
	
   $sql="SELECT * from student_assign where faculty_id = '$session_id'";
echo '<div class="container-fluid" >
        <div class="row">
		<div class="col-8">
			<div class="col-md-8" style="margin-left:200px; margin-bottom:100px;">
			<div class="shadow-none p-3 mb-5 rounded" style="outline-style: solid;
  outline-color: grey;">
			<div class="col-md-8 offset-md-2">
				<center><span class="d-block p-2 bg-primary text-white " >MY COUNSELLING STUDENTS </span></center>
			</div>
		
			<div class="col-sm-10">';
				$rs= mysqli_query($con, $sql) or die(mysql_error());
				$result = mysqli_query($con, $sql);
				if (mysqli_num_rows($result) > 0) 
			{
				while($res=mysqli_fetch_array($rs))
				{
					
					?><?php											  
												  $variable = $res["student_id"]; ?>
											  <td><form method="post" action="view_student_profile.php" style="margin-left:100px;">
 <input type="hidden" name="text" value="<?php echo $variable; ?>">
 <button type="submit" style="margin-top: 10px; margin-right: 50px;" class="btn btn-block"><?php echo $res["student_id"]; ?></button>
</form></td> </tr>								<?php
								
			}}
			else
			{
				echo '<script>alert("Students are not allocated for you");
	</script>';
	
			}
					
					
		echo'</div>
		</div>
	   </div>
	   </div>';

?>

<?php 
			$student_id=$_POST['studentid'];

			$sqlc="SELECT date from faculty_report where sid = '$student_id'";
			$rsc= mysqli_query($con, $sqlc) or die(mysql_error());
			?>


<div class="col-4">
			<div class="card">
 
  <div class="container1">
    <p> Enter Student id here to view the students report</p>
			<center>
			<form name="myform" action="view_student_report.php" method = "POST">
			<div class="form-group row">
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabelLg" placeholder="Enter Student Id" name="studentid" value="<?php echo $student_id; ?>">
            </div>
            
          </div>	
<div class="form-group row">
            <div class="col-sm-10">
			<label>Select the date </label><br>
			<?php 
			if(mysqli_num_rows($rsc) > 0){
			while($resc=mysqli_fetch_array($rsc))
				{					
$date1=$resc['date'];	?>
  <input type="radio" name="date1"  value="<?php echo "$date1"; ?>"><?php echo "$date1"; ?><br>

			<?php		} }else{
				echo '<p>Report of '.$student_id.'is Not generated</p>';
			} 
  ?>
								
			
			
             
            </div>
            
          </div>		  
                    
          <div class="form-group row">
            <div class="col-sm-10">
               <input type="submit" name = "submit" class="btn btn-dark btn-s " value="View" >    
            
            </div>
            
          </div>
          
          
          
        </form></center>
  </div>
</div>
			</div>
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