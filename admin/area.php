<html lang="en">
<?php include 'header.php'?>
<body>
<div style="display: flex; flex-direction: row">
<?php include 'navbar.php'?>
<div class="bg-light w-100 p-3">
    <div class="border p-3 rounded mb-3" style="background: white; display: flex; flex-direction: row; justify-content: space-between;">
        <h4 class="fw-bolder ">Area List</h4>
        <button class="btn btn-sm btn-success">+ New Area</button>
    </div>
    <div class="border p-3 rounded mb-3" style="background: white; height: auto">
        <div class="row">
            <?php
                // Establishing a connection to MySQL database
                include '../config/config.php';

                // Query to fetch data from the lawn table
                $sql = "SELECT * FROM lawn";
                $result = $conn->query($sql);

                // Loop through fetched data to display each lawn
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-6 col-md-6 p-2">';
                        echo '<a href="area_info?lawn_name=' . urlencode($row["lawn_name"]) . '" style="text-decoration: none">';
                        echo '<div class="border rounded p-3" style="height: 300px; background-image: url(\'../assets/img/lawn.jpg\'); background-size: cover; background-position: center; position: relative; overflow: hidden;">';
                        echo '<div class="rounded" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); border-radius: 15px;"></div>';
                        // Display lawn name and total lay dead
                        echo '<h1 class="fw-bolder mt-5" style="font-size: 60px; color: white; position: relative; z-index: 1;">' . $row["lawn_name"] . '</h1>';
                        echo '<h5 style="color: white; position: relative; z-index: 1;">' . $row["description"] . '</h5>';
                        echo '</div>';
                        echo '</a>'; // Closed the <a> tag
                        echo '</div>';

                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
</div>
</body>
</html>
