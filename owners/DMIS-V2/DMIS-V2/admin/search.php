<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'dbcemetery');

// Check if the search form has been submitted
if (isset($_POST['submit'])) {
    // Get the search term
    $search = mysqli_real_escape_string($conn, $_POST['search']);

    // Run the query to retrieve data from the database
    $stmt = mysqli_prepare($conn, "SELECT * FROM deceased WHERE deceased_id = ?");
    mysqli_stmt_bind_param($stmt, "i", $deceased_id);
    $deceased_id = 1; // replace with actual value
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if any results were returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through the results and display them as search results
        while ($row = mysqli_fetch_assoc($result)) {
            // echo '<div class="result">';
            // echo '<h2>' . $row['title'] . '</h2>';
            // echo '<p>' . $row['description'] . '</p>';
            // echo '</div>';
        }
    } else {
        // Display a message if no results were found
        echo 'No results found.';
    }
}

// Close the database connection
mysqli_close($conn);
?>
