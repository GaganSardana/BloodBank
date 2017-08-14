<?php
require 'connection.php';
$sql = "SELECT Name,Type,Units,Contact,Email FROM donation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table align=center><tr><th>Name</th><th>Type</th><th>Units</th><th>Contact</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Name"]."</td><td>".$row["Type"]."</td><td>".$row["Units"]."</td><td>".$row["Contact"]."</td><td>".$row["Email"]."</td></tr>";
    }
    echo "</table>&nbsp&nbsp<div class=col-md-12 form-group align=center>
          <a href=lg1.php><button class=btn disabled='disabled' pull-right type=submit name=submit id=submit>Request Sample</button></a>
        </div>";
} else {
    echo "SORRY ! NO ONE IS THERE RIGHT NOW ";
}
$conn->close();
?>