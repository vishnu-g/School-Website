<!DOCTYPE html>
<html>
    <head>
    <title> Alumni Tracking System</title>
         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </head>
    <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">
<img src="logo.jpg" class="image" width="50" height="50" />    
    <style>
        .image{
            border-radius: 15px;
        }
        .navbar-brand{
            font-family: monospace;
            font-weight: bold;
            font-size:28px;
        }
.col-auto{
float: right;

        }  
        .button-12{
            float: center;
            position: absolute;
            padding: 250px;
            
            
            
        }
        .col{
            padding-top: 30px;
            margin-left: 440px;
            float: center;
        }
        .card{
            
            position: absolute;
            margin-left: 380px;
            margin-top: 200px;
        }
.head{
font-family: monospace;
} </style>
      Govt of Goa Alumni Association
     
    
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
<div class="col-auto">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active" style="float: right">
        <a class="nav-link" href="#"><i class="fas fa-home"></i>&nbsp;Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-university"></i>&nbsp;Colleges</a>
      </li>
     
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;About us</a>
          </li><li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-address-book"></i></i>&nbsp;Contact us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>&nbsp;&nbsp;Login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="login1.html"><i class="fas fa-user"></i>&nbsp;&nbsp;Login</a>
              <a class="dropdown-item" href="register.php"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;Register</a>
           
              </div></li>
    </ul>
     </div>
  </div>
   
</nav> 




 <?php
$con= new mysqli('localhost','id11868652_alumni','12345','id11868652_alumni')or die("Could not connect to mysql".mysqli_error($con));
 

	
	
	
	$sample_con = mysqli_query($con,"select * from users ");
	$rowcount=mysqli_num_rows($sample_con);
	echo $rowcount;
	$row=mysqli_fetch_assoc($sample_con);
	echo $row['name'];

	
	
    
    
    
     
?>

</body>
</html>




