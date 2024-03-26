<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcemetery";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the search criteria from the GET request
$cemetery_name = $_GET['cemetery_name'] ?? '';
$plot_number = $_GET['plot_number'] ?? '';
$location = $_GET['location'] ?? '';

// Construct the MySQL query based on the search criteria
$sql = "SELECT * FROM cemetery_map WHERE 1=1";
if (!empty($cemetery_name)) {
    $sql .= " AND Cemetery_Name LIKE '%$cemetery_name%'";
}
if (!empty($plot_number)) {
    $sql .= " AND Plot_Number LIKE '%$plot_number%'";
}
if (!empty($location)) {
    $sql .= " AND (Latitude LIKE '%$location%' OR Longitude LIKE '%$location%')";
}

// Execute the MySQL query
$result = mysqli_query($conn, $sql);

// Output the search results as an HTML table
if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>Cemetery ID</th><th>Cemetery Name</th><th>Latitude</th><th>Longitude</th><th>Plot Number</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$row['Cemetery_ID']}</td><td>{$row['Cemetery_Name']}</td><td>{$row['Latitude']}</td><td>{$row['Longitude']}</td><td>{$row['Plot_Number']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the MySQL connection
mysqli_close($conn);
?>
