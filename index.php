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
	.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;

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
			   <a href="homepage.html"><img src="images/logo2.png" alt="E-counselling" style="width=300px; height=70px;"></a>
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
    </div>   
</nav>      
        <div class="container">
          <div class="row">
        
              <div class="col-lg nikhil">
                <a data-toggle="modal" data-target="#exampleModal1">  <img src="images/image.jpg" alt="..." class="rounded-circle"></a>
                  <h3 style="color:white">ADMIN</h3>
          </div>
            <div class="col-lg"></div>          
          <div class="col-lg nikhil">
            <a data-toggle="modal" data-target="#facultymodal" onclick="myFunction()">  <img src="images/image.jpg" alt="..." class="rounded-circle"></a>
              <h3 style="color:white">FACULTY</h3>
      </div>            
      <div class="col-lg"></div>          
              <div class="col-lg nikhil">
                <a data-toggle="modal" data-target="#studentmodal" onclick="myfunction()">  <img src="images/image.jpg" alt="..." class="rounded-circle">
                  <h3 style="color:white">STUDENT</h3></a>
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
    </div>
  </div>
</div>

<!-- Student modal -->

<div class="modal fade" id="studentmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-s" role="document">
		<div class="modal-content">
			<div class="modal-header"style="background-color:darkslategray;">
			<button class="btn" onclick="openCity(event, 'loginstudent')" id="open">  &nbsp Login &nbsp </button>
				<button class="btn" onclick="openCity(event, 'registerstudent')" >Register</button>
				

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">      
				<div class="container">
					<div id="registerstudent" class="tabcontent">
						<div class="row">
							<div class="col-md-3"></div>         
							<form name="myform" action="student_reg.php" method="POST">          
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="UserName" name="username" required>
									</div>
            
								</div>         
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="number" class="form-control form-control-lg" id="colFormLabelLg" placeholder="User Id" name="userid" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="password" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Password" name="password" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="password" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Re-enter Password" name="cpassword" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
										<button class="btn btn-dark btn-s ">Sign me Up</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div id="loginstudent" class="tabcontent">
						<div class="row">
							<div class="col-md-3"></div>
							<form name="myform" action="studentloginform.php" method = "POST">          
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="number" class="form-control form-control-lg" id="colFormLabelLg" placeholder="userid" name="userid" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="password" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Password" name="password" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="submit" name = "submit" class="btn btn-dark btn-s " value="Login" >      
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
										<a  href="forgot_password.php" >Forgot Password?</a>
									</div>
								</div>
							</form>
						</div>
					</div>
					<script>
					document.getElementById("open").click();
					document.getElementById("open1").click();
					function openCity(evt, cityName) {
						var i, tabcontent, tablinks;
						tabcontent = document.getElementsByClassName("tabcontent");
						for (i = 0; i < tabcontent.length; i++) {
						tabcontent[i].style.display = "none";
						}
					tablinks = document.getElementsByClassName("tablinks");
					for (i = 0; i < tablinks.length; i++) {
						tablinks[i].className = tablinks[i].className.replace(" active", "");
					}
					evt.currentTarget.className += " active";
					document.getElementById(cityName).style.display = "block";
  
					}
					</script>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
</div>

<!-- Faculty modal -->

<div class="modal fade" id="facultymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-s" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background-color:darkslategray;">
       <button class="btn" onclick="openCity(event, 'loginfaculty')" id="open1">  &nbsp Login &nbsp </button>
  <button class="btn" onclick="openCity(event, 'registerfaculty')" >Register</button>
  

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">       
      <div class="container">
	  <div id="registerfaculty" class="tabcontent">
 <div class="row">
		<div class="col-md-3"></div>
         
               <form name="myform" action="faculty_reg.php" method="POST">
          
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="UserName" name="username" required>
            </div>
            
          </div>          
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="number" class="form-control form-control-lg" id="colFormLabelLg" placeholder="User Id" name="userid" required>
            </div>
          </div>         
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="password" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Password" name="password" required>
            </div>            
          </div>          
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="password" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Re-enter Password" name="cpassword" required>
            </div>            
          </div>         
          <div class="form-group row">
            <div class="col-sm-10">
               <button class="btn btn-dark btn-s ">                    
                  Sign me Up</button>           
            </div>            
          </div>        
        </form>               
                </div>
</div>

<div id="loginfaculty" class="tabcontent">
  <div class="row">
				<div class="col-md-3"></div>         
               <form name="myform" action="facultyloginform.php" method = "POST">          
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="number" class="form-control form-control-lg" id="colFormLabelLg" placeholder="userid" name="userid" required>
            </div>            
          </div>         
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="password" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Password" name="password" required>
            </div>           
          </div>         
          <div class="form-group row">
            <div class="col-sm-10">
               <input type="submit" name = "submit" class="btn btn-dark btn-s " value="Login" >      
            </div>           
          </div>          
		   <div class="form-group row">
            <div class="col-sm-10">
              <a  href="forgot_password.php" >Forgot Password?</a>
            </div>            
          </div>         
        </form>               
				</div>
</div>
<script>
function myFunction(){
	document.getElementById("open1").click();
}
function myfunction(){
	document.getElementById("open").click();
}
</script>   
        </div>
				<div class="col-md-3"></div>
		</div>
		</div>
		</div>
</div>

<!-- login -->
 <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
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
              <h2 >Admin Login</h2>               
               <form name="myform" action="adminloginform.php" method = "POST">          
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="number" class="form-control form-control-lg" id="colFormLabelLg" placeholder="userid" name="userid" required>
            </div>            
          </div>         
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="password" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Password" name="password" required>
            </div>            
          </div>         
          <div class="form-group row">
            <div class="col-sm-10">
               <input type="submit" name = "submit" class="btn btn-dark " value="Login" >           
            </div>           
          </div>         
        </form>                
                </div>          
        </div>
        </div>
				<div class="col-md-3"></div>
		</div>
		</div>
</body>
</html>