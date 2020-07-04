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
else { echo "Connected to mysql database. "; }
if(!empty($_POST['lat']) && !empty($_POST['longi']) )
{
	$val = $_POST['lat'];
	$val2 = $_POST['longi'];
	$sql = "INSERT INTO Gps (lat,longi) VALUES ('".$val."','".$val2."')"; 
	if ($conn->query($sql) === TRUE) {
		echo "Values inserted in MySQL database table.";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
// Close MySQL connection
$conn->close();
?>
