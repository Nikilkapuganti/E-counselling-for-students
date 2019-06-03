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
label{
  font-weight: 500;
  font-size: 100%;
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
	
   $sql="SELECT * from faculty_profile where userid = '$session_id'";

        
				$rs= mysqli_query($con, $sql) or die(mysql_error());
				if (mysqli_num_rows($rs) > 0) 
			{
				while($res=mysqli_fetch_array($rs))
				{					
			
					$userid = $res['userid'];
					$fname = $res['fname'];
					$lname = $res['lname'];
					$qual = $res['qual'];
					$dob = $res['dob'];
					$email = $res['email'];
					$phno = $res['phno'];
					$address = $res['address'];
								
			}
								
			?>		
			
			
			 <div class="site-content container-fluid ">
            <!-- <div class="container body-content" style="padding-top:-10px; margin-top:-10px"> -->
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
	<center><h4>Edit Profile</h4></center>
<form name="myform" action="edit_faculty_code.php" method="POST">
				<div class="form-group">
                    <input type="number" class="form-control" name="userid"  placeholder="User Id" value="<?php echo $userid; ?>">
                  </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="fname"  placeholder="FirstName" value="<?php echo $fname; ?>">
                  </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="lname"  placeholder="Lastname" value="<?php echo $lname; ?>">
                  </div>
				<div class="form-group">
                    <input type="text" class="form-control" name="qual"  placeholder="Qualification" value="<?php echo $qual; ?>">
                  </div>
                  <div class="form-group">
                    <input type="date" class="form-control" name="dob"  placeholder="Date of Birth" value="<?php echo $dob; ?>">
                  </div>
                
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
                  </div>
				<div class="form-group">
                    <input type="number" class="form-control" name="phno"  placeholder="Mobile Number" value="<?php echo $phno; ?>">
                  </div>  
                            <div class="form-group">
                                    
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="address" placeholder="<?php echo $address; ?>"></textarea>
                                  </div>
                                  
					
					
               
   



                     <center> <input type="submit" class="btn" value="save" name="submit" style="width:50%" /></center>


</form>


            </div>
            <div class="col-sm-3">
               
                  </div>




			<?php } ?>




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
              <h5 >Change Profile Picture</h5>
               
               <form name="myform" action="update_faculty_picture.php" method = "POST" enctype="multipart/form-data">
          
          
          
          
           <input type="hidden" name="text" value="<?php echo $session_id; ?>" />
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