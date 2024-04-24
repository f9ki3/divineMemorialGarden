<?php
include '../config/config.php';

// Retrieve offset from the request
$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

// Query to fetch next 10 results
$query = "SELECT * FROM property
            JOIN sell_bulletin ON property.id = sell_bulletin.bulletin_user_id
            WHERE lot_status = 1 AND bulletin_user_id != $property_id
            LIMIT 10 OFFSET $offset";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        // Output each fetched result as HTML
        echo '<div class="col-12 col-md-4 p-2">
                <div class="border rounded p-3">
                    <div>
                        <!-- Display property details here -->
                    </div>
                </div>
            </div>';
    }
} else {
    // No more results to fetch
    echo '<p class="text-center mt-3">No more posts to show.</p>';
}
?>
