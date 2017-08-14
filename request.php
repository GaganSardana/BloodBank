<?php
require 'connection.php';
$sql = "SELECT Name,Type,Gender,Contact,Email FROM request";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table align=center><tr><th>Name</th><th>Type</th><th>Units</th><th>Contact</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Name"]."</td><td>".$row["Type"]."</td><td>".$row["Gender"]."</td><td>".$row["Contact"]."</td><td>".$row["Email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "SORRY ! NO REQUEST IS THERE ";
}

?>