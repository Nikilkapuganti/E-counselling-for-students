<?php 
include('connection.php');
include('session.php');
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
.card{
	background-color: white;
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
  margin-left: 400px;
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
					<a href="logout.php">Log out</a>

				</div>
			</div>
        
		</div>
		</nav>
           
		
  <?php 
  $var = $_POST['text'];
 # $var1 = $_POST['text1'];
 # $sql="SELECT * from faculty_report where faculty_id='$var'";
 # $rs= mysqli_query($con, $sql) or die(mysql_error());							
 										
  
  ?>
 

<div class="container">
        <div class="row">
           
            <div class="col-8">
               
                    <table class="table table-bordered" style="margin-top:50px; margin-left:100px;">
                            <thead>
                              <tr class="table-dark">
                                
                                <th scope="col">Student Id</th>
                                <th scope="col">Student Name</th>
								<th></th>
                                
                              </tr>
                            </thead>
                            <tbody>
                                    <?php
										
										
										$sqlc = "SELECT * from student_assign where faculty_id='$var'";
										$rs= mysqli_query($con, $sqlc) or die(mysql_error());							
										while($result=mysqli_fetch_array($rs)){		
												$sqls="SELECT * from student_reg";
											$rss= mysqli_query($con, $sqls) or die(mysql_error());
											while($res=mysqli_fetch_array($rss)){												  
												if(($result["student_id"]) == ($res["userid"])){
													echo '<tr class="table-info">
														  
											              <td>'.$res["userid"].'</td>
														  
														  <td>'.$res["username"].'</td>';?>
											              <td>
														  <?php $sid=$res['userid']; ?>
														  <form name="myform" action="view_admin_student_report.php" method = "POST">
														  <input type="hidden" name="text" value="<?php echo $sid; ?>" >
														  <button class="button button2" >View Report</button>
														  </form>
														  </td></tr>
														  								  
											<?php	}					 					  
													
											  }
											  											  
										
										}
									?>	
							</tbody>
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
        <h5 class="modal-title" ></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <div class="container">
	  
	  <?php 
			$sqlz="SELECT date from faculty_report where sid = '$sid'";
			$rsz= mysqli_query($con, $sqlz) or die(mysql_error());
			?>

	
        <div class="row">
				<div class="col-md-3"></div>
          <div class="col-6 col-md-6 h black"> 
              <h2 style="margin-left:60px;">Select Date of the Report</h2>
               
               <form name="myform" action="view_admin_student_report.php" method = "POST">
			<div class="form-group row">
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabelLg" placeholder="Enter Student Id" name="studentid" value="<?php echo $sid; ?>">
            </div>
            
          </div>	
<div class="form-group row">
            <div class="col-sm-10">
			<label>Select the date </label><br>
			<?php 
			
			while($resz=mysqli_fetch_array($rsz))
				{					
$date1=$resz['date'];	?>
  <input type="radio" name="date1"  value="<?php echo "$date1"; ?>"><?php echo "$date1"; ?><br>

		<?php		}  
  ?>
								
			
			
             
            </div>
            
          </div>		  
                    
          <div class="form-group row">
            <div class="col-sm-10">
               <input type="submit" name = "submit" class="btn btn-dark btn-s " value="View" >    
            
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