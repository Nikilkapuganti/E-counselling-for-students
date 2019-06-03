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
        
            <!-- <button class="btn " data-toggle="modal" data-target="#exampleModal">  </button> -->
            <div class="dropdown">
				<button class="btn">Hi <?php echo $login_session; ?></button>
				<div class="dropdown-content">
				<a href="change_password.php"> Change Password</a>
					<a href="registration"> Edit Profile</a>
					<a href="logout.php">Log out</a>

				</div>
			</div>
        
		</div>
		</nav> 
                    






















    <div class="site-content container-fluid ">
            <!-- <div class="container body-content" style="padding-top:-10px; margin-top:-10px"> -->
        <div class="row">
		
            <div class="col-sm-2"></div>
            <div class="col-sm-5">

<form name="myform" method="POST" action="student_profile.php" enctype="multipart/form-data">

<h4>Student Details:</h4>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="sname" placeholder="Student Name">
                  </div>
				  <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputEmail1" name="sid" placeholder="ID">
                  </div>
                
                <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputEmail1" name="phno" placeholder="MobileNo">
                  </div>
				
				<div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                  </div>

				
                  <div class="form-group">
                    <input type="date" class="form-control" id="exampleInputEmail1" name="dob" placeholder="Date of Birth">
                  </div>
				  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="mtc" placeholder="Mode Of travel to College(Hosteler,Dayscholar or by Bus)">
                  </div>

				
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="place" placeholder="Place(Village,Town or City)">
                  </div>
                
                <tr> <td><input type="radio" name="gender" value="male"> Male</td></tr>
                          <tr> <td> <input type="radio" name="gender" value="female"  > Female </tr>

   
                  <div class="form-group">                                    
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="addr" placeholder="Present Address"></textarea>
                   </div>
					<div class="form-group">                                    
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="permaddr" placeholder="Permanent Address"></textarea>
                   </div>
   
                  
   
                  <div class="form-group">
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Choose Profile Picture" disabled>
                  </div>
                  <div class="form-group">
                    <input type="file" class="form-control" name="file" >
                  </div>



                      



			

            </div>
            <div class="col-sm-5">
                <h4>Guradian Details:</h4>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="f_name" placeholder="Father's Name">
                  </div>
                
                <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputEmail1" name="f_phno" placeholder="MobileNo">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="f_occu" placeholder="Occupation">
                  </div>
				  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" name="f_email" placeholder="Email">
                  </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="m_name" placeholder="Mother's Name">
                  </div>

   
                  <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputEmail1" name="m_phno" placeholder="MobileNo">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="m_occu" placeholder="Occupation">
                  </div>
				<div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" name="m_email" placeholder="Email">
                  </div>
				  </div>
			<div class="col-sm-6"></div>
			<input type="submit" class="btn " name="submit" value="Save"></button>
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