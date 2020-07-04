<?php
$host = "localhost";		         // host = localhost because database hosted on the same server where PHP files are hosted
$username = "id14256457_dusername";
$password = "s@Cl9ENk*\KeNgL>";
$dbname = "id14256457_dname";


// Establish connection to MySQL database
$conn = new mysqli($host, $username, $password, $dbname);


// Check if connection established successfully
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else { echo "Connected to mysql database. <br>"; }
// Select values from MySQL database table

$sql = "SELECT * FROM Gps";  // Update your tablename here
$result = $conn->query($sql);
echo "<center>";

if ($result->num_rows > 0) {
	// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<strong> Sr:</strong> " . $row["Sr"]. " &nbsp <strong>lat:</strong> " . $row["lat"]. " &nbsp <strong>longi:</strong> " . $row["longi"]. "<p>";
    }
} else {
    echo "0 results";
}
echo "</center>";
$conn->close();
?>