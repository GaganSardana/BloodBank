<?php


if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank System</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style3.css">
  <script src="js/top.js"></script>
  </head>
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
      <a class="navbar-brand" href="Hospital.php"><img src="logo.png" width="30" height="30"></a>
    </div>
    <ul class="nav navbar-nav navbar-left">
    <li><a>WELCOME <?php echo isset($_SESSION['hospital_name'])?$_SESSION['hospital_name']:'' ?></a></li>
    </ul>


    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="Hospital.php">HOME</a></li>
        <li><a href="#donner">DONNER LIST</a></li>
        <li><a href="#addblood">ADD BLOOD INFO</a></li>
        <li><a href="#request">VIEW REQUEST</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>

    </ul>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1st.jpg" alt="" width="1200" height="700">
      </div>

      <div class="item">
        <img src="2nd.jpg" alt="" width="1200" height="700">

      </div>

      <div class="item">
        <img src="3rd.jpg" alt="" width="1200" height="700">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<!-- Container (Donner Section) -->

<div id="donner" class="container">
 <h3 class="text-center">DONNER LIST</h3>
   <br /><br />
<?php

require 'RHdonner.php';
?>
</div>

<!-- Container (Add Blood Section) -->
<form action="" method="post">
<div id="addblood" class="container " >
  <h3 class="text-center" >ADD BLOOD INFO</h3>
  <br /><br />

    <div class="col-md-8 ">

       <div class="col-sm-6 form-group"><label>Hospital-Name</label>
          <input class="form-control" id="quantity" name="quantity" value="<?php echo isset($_SESSION['hospital_name'])?$_SESSION['hospital_name']:'' ?>" type="text" required>
        </div>
      <div class="row " >
        <div class="col-sm-6 form-group"><label>Types</label>
          <select class="form-control" id="type" name="type" placeholder="Type" type="text" required>
          <option>A+</option><option>B+</option><option>O+</option><option>AB+</option>
          <option>A-</option><option>B-</option><option>O-</option><option>AB-</option></select>
        </div>
        <div class="col-sm-6 form-group"><label>Units</label>
          <input class="form-control" id="quantity" name="quantity" placeholder="Units" type="text" required>
        </div>
      <div class="col-sm-6 form-group"><label>Email</label>
          <input class="form-control" id="email" name="email" placeholder="Email" type="Email" required>
        </div>
        <div class="col-sm-6 form-group"><label>Contact</label>
          <input class="form-control" id="contact" name="contact" placeholder="Contact" type="text" minlength="10" maxlength="10" required>
        </div>
      <label>Details</label>
      <textarea class="form-control" id="comments" name="comments" placeholder="Blood Info " rows="5" required></textarea>
      </div>
      <br>
      <div class="row col-md-offset-5">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Add</button>
        </div>
      </div>

    </div>
  </div>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$hname=isset($_SESSION['hospital_name'])?$_SESSION['hospital_name']:'';
$type=$_POST['type'];
$quantity=$_POST['quantity'];
$info=$_POST['comments'];
$contact=$_POST['contact'];
$email=$_POST['email'];

require 'connection.php';


$sql = "INSERT INTO donation (Name,Type,Units,Detail,Email,Contact)
VALUES ('$hname','$type', '$quantity', '$info','$email','$contact')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Thank You For Your Contribution . It Means ALot To Us!")</script>';
    echo "<script> location.href='Hospital.php'; </script>";}
$conn->close();
}
?>

<!-- Container (View Request Section) -->

<div id="request" class="container">
 <h3 class="text-center">BLOOD REQUESTS</h3>
 <br /><br />
<?php
require 'request.php';
?>
</div>



<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; Gagan Sardana</p>
</footer>
</body>
</html>
