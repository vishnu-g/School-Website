<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Damion&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=0.5">
<title>St.Ann's School chirala Alumni Association</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<style>
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 70px;
  width: 70%;
  min-width: 300px;
  border:1px solid #0084ea;
  border-radius:40px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #0084ea;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}
button:hover {
  opacity: 0.8;
}
#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #0084ea;
}
.form-signup{
    margin-top:20px;
    padding-bottom:300px;
    width:700px;
    height:500px;
    
}
.form-signup{
      width: 500px;
      height: 500px;
   
     
  }
  .form-signupcc{
     }
  .form-signin{
    padding:30px;
    border-radius:25px;
    border:2px solid #0084ea;
  }
</style>
<?php 
 
$con= new mysqli('localhost','id11868652_alumni','12345','id11868652_alumni')or die("Could not connect to mysql".mysqli_error($con));

 if(isset($_POST['submit'])){

$emailaddress=$_POST['username'];	
	
	
$sample_con = mysqli_query($con,"select * from users where username='$emailaddress'");
$rowcount=mysqli_num_rows($sample_con);

if($rowcount==1){
  echo'<script>alert("email already taken")</script>';
}
else{
       session_start();
    $_SESSION['email']=$emailaddress;
    echo'<script>';
      echo'location.replace("regform.php")';
        echo'</script>';    
  
}

 }







?>


<body >
    <style>
        #top-header {
            background-color: #0084ea;
            color: white;
        }
        
        .left-top {
            float: right;
            color: #fff;
        }
        
        .left-top a {
            text-decoration: none;
            color: white;
        }
        
        .navbar-brand img {
            width: 70px;
            height: 60px;
        }
        
        .navbar-brand {
            font-size: 30px;
            text-decoration: none;
            font-family: monospace;
        }
        dein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
    </style>
    
    <body >
        <div id="top-header">
            <div class="container clearfix">
    
    
                <div id="et-info">
                    <span id="et-info-phone"><i class="fa fa-phone" aria-hidden="true"></i> 08594-230156</span>
                    <div class="left-top">
                        <a href="mailto:stannschirala14@gmail.com"><span id="et-info-email"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;stannschirala14@gmail.com</span></a>
                    </div>
                </div>
                <!-- #et-info -->
                <div id="et-secondary-menu">
                </div>
                <!-- #et-secondary-menu -->
    
            </div>
            <!-- .container -->
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html"><img src="logo.jpg" />&nbsp;<span> St.Ann's School Chirala</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="#">About STANN'S AA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#success"> Alumni Chapters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#event"> Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Gallery</a>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Login/Signup
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="newlogin.php"><i class="fa fa-user" aria-hidden="true"></i>
                        &nbsp;login</a>
                            <a class="dropdown-item" href="newlogin.php"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;sign up</a>
                           
    
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
<div class="container form-signup ">
    <div class="form-signupcc shadow-lg p-3 mb-5 bg-white rounded">
      <form class="form-signin" action="registration.php" method="post">
        <div class="text-center mb-4">
            <i class="fas fa-user" style="font-size:50px;margin-top: 10px;"></i>
          <h1 class="h3 mb-3 font-weight-normal">Verify Email Address</h1>
        </div>
        <div class="form-label-group">
          <input type="email"  class="form-control" placeholder="Enter Email address for verification" required autofocus name="username" id='username'>
          <label for="inputEmail">Email address</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit"><i class="fa fa-lock"></i> Verify</button>
        </form>
</div>
</div>





</body>
</html>
