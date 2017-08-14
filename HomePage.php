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
  <link rel="stylesheet" href="css/style1.css">
  <script src="js/top.js"></script>

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
      <a class="navbar-brand" href="#myPage"><img src="logo.png" width="30" height="30"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#myPage">HOME</a></li>
        <li><a href="#aboutus">ABOUT US</a></li>
        <li><a href="#donner">DONNER LIST</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> SIGN UP<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="Hregister.php">Hospital</a></li>
          <li><a href="Rregister.php">Receiver</a></li>
        </ul>
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
<!-- Container (About Us Section) -->
<div id="aboutus" class="container text-center">
  <h3>ABOUT US</h3>
  <p><em>Save A life Give Blood!</em></p>
  <p class="text-justify">'Life Saver Blood Bank' is the first product resulted out of the community welfare initiative called 'People Project' from uSiS Technologies. Universally, 'Blood' is recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. Once in every 2- seconds, someone, somewhere is desperately in need of blood. More than 29 million units of blood components are transfused every year. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion.</p>
  <p class="text-justify">Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.
  We remind every visitor that we have the empowerment to save lives and let’s do that – right now, right here. If you are eligible for blood donation, please register yourself as a blood donor now!</p>
  <p class="text-justify">We also take this opportunity to thank our whole team for all your ideas, commitment and hard-ship in making this dream a reality. We would also like to thank our friends and well-wishers for all your support and encouragement throughout this project. It is now reasonably safe to say that together we have made this society a slightly better and safer place to live.</p><br />
  <p>Thank you and Happy Blood donating!</p>
</div>

<!-- Container (Donner Section) -->

<div id="donner" class="container">
 <h3 class="text-center">DONNER LIST</h3>
  <br /><br />
<?php

require 'DonnerList.php';
?>
</div>

<!-- Container (Contact Section) -->
<form action="" method="post">
<div id="contact" class="container">
  <h3 class="text-center">CONTACT</h3>
  <br /><br />

  <div class="row">
    <div class="col-md-4">

      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">

      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>

    </div>
  </div>
</div>
</form>
<!--php code for contact -->
<?php
#error_reporting(E_ERROR | E_PARSE);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];

require 'connection.php';

$sql = "INSERT INTO contact (Name,Email,Comment)
VALUES ('$name', '$email', '$comments')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Thank You For Your Contribution . It Means ALot To Us!")</script>';
    echo "<script> location.href='HomePage.php'; </script>";
  }
$conn->close();
}
?>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; Gagan Sardana</p>
</footer>
</script>
</body>
</html>
