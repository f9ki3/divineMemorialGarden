<?php 
// Establish database connection
$servername = "153.92.8.8";
$username = "u990660024_admin";
$password = "xk1n6J~4rY";
$dbname = "u990660024_dmis";

// Establish database connection
// $servername = "sql.freedb.tech";
// $username = "freedb_f9ki3";
// $password = "f@Q7QhtY8wD6*wT";
// $dbname = "freedb_divine_memorial";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  // echo "Connected successfully";
}
?>
