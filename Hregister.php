<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank System</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"</script>
  <link rel="stylesheet" href="css/style4.css">
  <script src="js/register.js"></script>  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

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
        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> SIGN UP<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="#">Hospital</a></li>
        <li><a href="Rregister.php">Receiver</a></li>
        </ul>
    </ul>
  </div>
</nav>
<!--Receiver Register-->
    <div class="container">

    <form class="well form-horizontal" action="" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Hospital Registration Form</b></h2></center></legend><br>

 
<!-- Hname input-->

<div class="form-group">
  <label class="col-md-4 control-label">Hosptial-Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Hname" placeholder="Username" class="form-control"  type="text" required>
    </div>
  </div>
</div>


<!-- Email input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="email" required>
    </div>
  </div>
</div>

<!-- Password input-->



<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="password" id="password" placeholder="Password" class="form-control"  type="password" onkeyup='check();' required />
    </div>
  </div>
</div>

<!-- Confirm Password input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control"  type="password" onkeyup='check();' required />&nbsp&nbsp&nbsp<span id='message'></span>
  
    </div>
  </div>
</div>



<!-- Contact input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact" placeholder="(+91)" class="form-control" type="text" pattern="[789][0-9]{9}" maxlength="10" required>
    </div>
  </div>
</div>
<!-- Address input-->

<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
  <input  name="address" placeholder="Address" class="form-control"  type="text" required>
    </div>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->

    <!-- Footer -->
<footer class="text-center">
 
  <p>&copy; Gagan Sardana</p> 
</footer>


</body>
</html>
<?php

require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['Hname'];
$email=$_POST['email'];
$address=$_POST['address'];
$pass=$_POST['password'];
$contact=$_POST['contact'];


$sql = "INSERT INTO hospital (Name,Email,Password,Address,Contact)
VALUES ('$name', '$email', '$pass','$address','$contact')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Thank You For Registration.Go Login!")</script>';}
elseif ($conn->query($sql) === FALSE) {
    echo '<script type="text/javascript">alert("Email-Id Alredy Exist . TRY AGAIN !")</script>';}
}

  $conn->close();
?>
