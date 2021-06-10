<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(isset($_POST['submit1']))
{
$ret=mysqli_query($con,"SELECT * FROM users WHERE userEmail='".$_POST['username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";//
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')");
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:index.php");
exit();
}
else
{
$_SESSION['login']=$_POST['username'];	
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($con,"insert into userlog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$errormsg="Invalid username or password";
$extra="login.php";

}
}
else if(isset($_POST['submit2']))
{
$ret=mysqli_query($con,"SELECT * FROM users WHERE userEmail='".$_POST['username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";//
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')");
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:index.html");
exit();
}
}
else
{
$_SESSION['login']=$_POST['username'];	
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($con,"insert into userlog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$errormsg="Invalid username or password";
$extra="login.php";

}





if(isset($_POST['change']))
{
   $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM users WHERE userEmail='$email' and contactNo='$contact'");
$num=mysqli_fetch_array($query);
if($num>0)
{
mysqli_query($con,"update users set password='$password' WHERE userEmail='$email' and contactNo='$contact' ");
$msg="Password Changed Successfully";

}
else
{
$errormsg="Invalid email id or Contact no";
}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css" />

    <link href="https://fonts.googleapis.com/css?family=Damion&display=swap" rel="stylesheet">

<title>St.Ann's School chirala Alumni Association</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
function valid()
{
 if(document.forgot.password.value!= document.forgot.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.forgot.confirmpassword.focus();
return false;
}
return true;
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=0.8">
  </head>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script>
            $(function() {
 
                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember_me').attr('checked', 'checked');
                    $('#username').val(localStorage.usrname);
                    $('#pass').val(localStorage.pass);
                } else {
                    $('#remember_me').removeAttr('checked');
                    $('#username').val('');
                    $('#pass').val('');
                }
 
                $('#rememberme').click(function() {
 
                    if ($('#remember_me').is(':checked')) {
                        // save username and password
                        localStorage.usrname = $('#inputEmail1').val();
                        localStorage.pass = $('#inputPassword1').val();
                        localStorage.chkbx = $('#rememberme').val();
                    } else {
                        localStorage.usrname = '';
                        localStorage.pass = '';
                        localStorage.chkbx = '';
                    }
                });
				$('#remember_me').click(function() {
 
                    if ($('#remember_me').is(':checked')) {
                        // save username and password
                        localStorage.usrname = $('#username').val();
                        localStorage.pass = $('#pass').val();
                        localStorage.chkbx = $('#remember_me').val();
                    } else {
                        localStorage.usrname = '';
                        localStorage.pass = '';
                        localStorage.chkbx = '';
                    }
                });
            });
           
        
 
        </script>
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
    .tab-content{
    background:white;
}
.col-sm{
    background:white;
}
</style>

<body>
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
                        <a class="dropdown-item" href="registration.html"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;sign up</a>
                       

                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 15px;padding-top: 25px;border:2px solid #0084ea;; border-radius: 25px;margin-top: 25px;padding-top: 25px;padding-bottom: 25px;width:500px">
        <div class="col-sm login-cc">

       <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="nav-home" aria-selected="true">Alumni Login</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="nav-profile" aria-selected="false">Faculty Login</a>
   
	</div>
</nav>
          <div class="tab-content" id="myTabContent">
             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              
    
                     <form class="form-signin" action="newlogin.php" method="post">
                    <div class="text-center mb-4">
                        <i class="fas fa-user" style="font-size:50px;margin-top: 10px;"></i>
                      <h1 class="h3 mb-3 font-weight-normal">Alumni Login</h1>
                     
                    </div>
                  
                    <div class="form-label-group">
                      <input type="email"  class="form-control" placeholder="Email address" required autofocus name="username" id='username'>
                      <label for="inputEmail">Email address</label>
                    </div>
                  
                    <div class="form-label-group">
                         
                      <input type="password"  class="form-control" placeholder="Password" name="password" required id='pass'>
                      <label for="inputPassword">Password</label>
                    </div>
                   
                  
                    <div class="checkbox mb-3">
                      <label>
                        <input type="checkbox" value="remember-me" id="remember_me"> Remember me
						<a  class="forgot-pass"href="forgot.php">Forgot password</a>
                      </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" name="submit1" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                   
                  </form>
                    
                 </div>
                
           
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
           
    
                <form class="form-signin" action="newlogin.php" method="post">
                    <div class="text-center mb-4">
                        <i class="fas fa-chalkboard-teacher" style="font-size:50px;margin-top: 10px;"></i>
                      <h1 class="h3 mb-3 font-weight-normal">Faculty Login</h1>
                     
                    </div>
                  
                    <div class="form-label-group">
                      <input type="email" id="inputEmail1" class="form-control" placeholder="Email address" required autofocus name="username">
                      <label for="inputEmail">Email address</label>
                    </div>
                  
                    <div class="form-label-group">
                         
                      <input type="password" id="inputPassword1" class="form-control" placeholder="Password" name="password" required>
                      <label for="inputPassword">Password</label>
                    </div>
                    
                   
                  
                    <div class="checkbox mb-3">
                      <label>
                        <input type="checkbox" value="remember-me" id="rememberme
						"> Remember me
						<a  class="forgot-pass"href="forgot.php">Forgot password</a>
                      </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" name="submit2" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                   
                  </form>
               
        </div>
		
             
      
          </div>



        </div>
    </div>
	</body>
	</html>


      
</html>
