<?php


if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank System</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style2.css">
  <script src="js/lgjs1.js"></script>
  
  </head>

<body id="mypage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="HomePage.php"><img src="logo.png" width="30" height="30"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="HomePage.php">HOME</a></li>
        <li><a href="HomePage.php#aboutus">ABOUT US</a></li>
        <li><a href="HomePage.php#donner">DONNER LIST</a></li>
        <li><a href="HomePage.php#contact">CONTACT</a></li>
        
        <li><a href="#mypage"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> SIGN UP<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="Hregister.php">Hospital</a></li>
          <li><a href="Rregister.php">Receiver</a></li>
        </ul>
    </ul>
  </div>
</nav>
<!-- Receiver/Hospital-->
<div id="fullscreen_bg" class="fullscreen_bg"/>
<div id="regContainer" class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#receiver" class="active" id="login-form-link">Receiver</a>
              </div>
              <div class="col-xs-6">
                <a href="#hospital" id="register-form-link">Hospital</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form"  method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <label for="username">Email</label>
                    <input type="Email"  id="remail" name="remail" tabindex="1" class="form-control" placeholder="Email" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password"  id="rpassword"  name="rpassword" tabindex="2" class="form-control" placeholder="Password" required>
                  </div>

                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class=""  id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit"  id="Sign" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form"  method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <label for="username">Email</label>
                    <input type="Email" name="hemail"  tabindex="1" class="form-control" placeholder="Email" value="">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="hpassword"  tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class=""  id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="hlogin-submit"  tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php

require 'connection.php';
##-------------------------------------------------HOSPITAL-------------------------------------------------------------##
if (isset($_POST['hemail']) and isset($_POST['hpassword'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['hemail'];
$password = $_POST['hpassword'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM hospital WHERE Email='$username' and Password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
$result=mysqli_fetch_array($result);
##------------------------------------------------Session Variable For Name----------------------------------------------##
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
$_SESSION['hospital_name']=$result['Name'];
echo $_SESSION['hospital_name'];
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
echo "<script> location.href='Hospital.php'; </script>";
        exit;
}
else{
echo '<script type="text/javascript">alert("EMAIL ID OR PASSWORD DOES NOT MATCH !")</script>';
}
}
##-------------------------------------------------RECEIVER-------------------------------------------------------------##

if (isset($_POST['remail']) and isset($_POST['rpassword'])){
//3.1.1 Assigning posted values to variables.
$username1 = $_POST['remail'];
$password1 = $_POST['rpassword'];
//3.1.2 Checking the values are existing in the database or not
$query1 = "SELECT * FROM receiver WHERE Email='$username1' and Password='$password1'";
 
$result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
$count1 = mysqli_num_rows($result1);
$result=mysqli_fetch_array($result1);
##------------------------------------------------Session Variable For Name----------------------------------------------##
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
$_SESSION['receiver_name']=$result['Name'];
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count1 == 1){
echo "<script> location.href='receiver.php'; </script>";
        exit;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
echo '<script type="text/javascript">alert("EMAIL ID OR PASSWORD DOES NOT MATCH !")</script>';
}
}

$conn->close();
?>

<!-- Footer -->
<footer class="text-center">
 
  <p>&copy; Gagan Sardana</p> 
</footer>
</div>
</body>
</html>



