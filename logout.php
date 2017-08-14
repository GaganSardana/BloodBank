<?php
/*session_start();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Logout</title>
</head>
<body>
	Please Wait. . .
</body>
</html>*/
session_start();
//unset($_SESSION['loggedin'], $_SESSION['id'], $_SESSION['user']);
session_destroy();
header("Location: HomePage.php");
