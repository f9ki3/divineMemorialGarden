<?php include '../config/config.php'?>
    <div class="container_1">

            <img src="MAP.png" alt="map" class="map">

            <div class="child">
        <div class="child-0 child-1">
            <div class="child-1_1">
            <div class="block block-1">
                <div id="map" class="block-0 block-1_1">
                <?php
                // Prepare SQL query to fetch data for IDs from 1 to 5
                $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                        FROM property 
                        WHERE id BETWEEN 1 AND 5";

                // Execute the SQL query
                $result = $conn->query($sql);

                // Check if the query execution was successful
                if ($result === false) {
                    die("Error executing query: " . $conn->error);
                }

                // Check if there are any rows returned
                if ($result->num_rows > 0) {
                    // Loop through the result set
                    while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                } else {
                    // No results found
                    echo "No results found for IDs 1 to 5";
                }
                ?>


                </div>
                <div id="map" class="block-0 block-1_2">
                    <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 6 AND 10";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
           </div> <!--block block-1-->
            <div class="block block-2">
                <div id="map" class="block-0 block-2_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 11 AND 15";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-2_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 16 AND 21";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
            </div>
            <div class="block block-3">
                <div id="map" class="block-0 block-3_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 22 AND 27";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-3_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 28 AND 33";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
            </div>
            <div class="block block-4">
                <div id="map" class="block-0 block-4_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 34 AND 39";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-4_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 40 AND 46";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
             </div>
            <div class="block block-5">
                <div id="map" class="block-0 block-5_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 47 AND 53";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>      
                <div id="map" class="block-0 block-5_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 54 AND 60";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>                   
            </div>
            <div class="block block-6">
                <div id="map" class="block-0 block-6_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 61 AND 67";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-6_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 68 AND 75";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div> <!--block-0 block-6_2-->
            </div> <!--block block-6-->
        </div> <!--child-1_1-->
        </div> <!-- child-0 child-1  -->
        <div class="child-0 child-2">
            <div class="child-1_1">
            <div class="block block-7">
                <div id="map" class="block-0 block-7_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 76 AND 84";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>            
        </div>
            <div class="block block-8">
                <div id="map" class="block-0 block-8_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 85 AND 94";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-8_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 95 AND 104";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
            </div>
            <div class="block block-9">
                <div id="map" class="block-0 block-9_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 105 AND 114";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-9_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 115 AND 124";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
            </div>
            <div class="block block-10">
                <div id="map" class="block-0 block-10_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 125 AND 134";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-10_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 135 AND 144";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
            </div>
            <div class="block block-11">
                <div id="map" class="block-0 block-11_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 145 AND 154";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-11_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 155 AND 164";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
            </div>
            <div class="block block-12">
                    <div id="map" class="block-0 block-2_1">
                    <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 165 AND 174";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                    </div>
                    <div id="map" class="block-0 block-12_2">
                    <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 175 AND 184";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                    </div>                    
                </div>
            <div class="block block-13">
                <div id="map" class="block-0 block-13_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 185 AND 194";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-13_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 195 AND 204";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>               
            </div>
            </div>
        </div> <!--- child-2-->
        <div class="child-0 child-3">
            <div class="child-1_1">
            <div class="block block-14">
                <div id="map" class="block-0 block-14_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 205 AND 211";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-14_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 212 AND 221";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>   
            </div>
            <div class="block block-15">
                <div id="map" class="block-0 block-15_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 222 AND 231";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-15_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 232 AND 241";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
            </div>
            <div class="block block-16">
                <div id="map" class="block-0 block-16_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 242 AND 251";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-16_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 252 AND 261";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
            </div>
            <div class="block block-17">
                <div id="map" class="block-0 block-17_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 262 AND 271";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-17_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 272 AND 281";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>                
            </div>
            <div class="block block-18">
                <div id="map" class="block-0 block-18_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 282 AND 291";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-18_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 292 AND 301";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
            </div>
            <div class="block block-19">
                <div id="map" class="block-0 block-19_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 302 AND 311";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-19_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 312 AND 321";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>                                
            </div>
            <div class="block block-20">
                <div id="map" class="block-0 block-20_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 322 AND 331";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-20_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 332 AND 341";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>                           
            </div>
        </div>
        </div> <!--- child-3-->
        <div class="child-0 child-4">
            <div class="child-1_1">
                <div class="block block-21">
                    <div id="map" class="block-0 block-21_1">
                    <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 342 AND 346";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                    </div>
                    
                </div>
                    <div class="block block-22">
                        <div id="map" class="block-0 block-22_1">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 347 AND 356";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                        </div>
                        <div id="map" class="block-0 block-22_2">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 357 AND 366";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                        </div>
                        
                    </div>
                    <div class="block block-23">
                        <div id="map" class="block-0 block-23_1">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 467 AND 476";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                        </div>
                        <div id="map" class="block-0 block-23_2">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 377 AND 386";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                        </div>  
                    </div>
                    <div class="block block-24">
                        <div id="map" class="block-0 block-24_1">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 387 AND 396";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                        </div>
                        <div id="map" class="block-0 block-24_2">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 397 AND 406";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                        </div>                                            
                    </div>
                    <div class="block block-25">
                        <div id="map" class="block-0 block-25_1">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 407 AND 416";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                        </div>
                        <div id="map" class="block-0 block-25_2">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 417 AND 426";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                        </div>                                                        
                    </div>
                    <div class="block block-26">
                        <div id="map" class="block-0 block-26_1">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 427 AND 436";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                        </div>
                        <div id="map" class="block-0 block-26_2">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 437 AND 446";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                        </div>
                        </div>
                    <div class="block block-27_1">
                        <div id="map" class="block-0 block-27_1">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 447 AND 456";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                        </div>
                    <div id="map" class="block-0 block-27_2">
                    <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 457 AND 466";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                    </div>
                    <div class="block block-28">
                        <div id="map" class="block-0 block-28_1">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 467 AND 476";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                        </div>
                        <div id="map" class="block-0 block-28_2">
                        <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 477 AND 486";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                        </div>                                           
                    </div>
                </div>
            </div>
        </div> <!-- child-3-->
        <div class="child-0 child-5">
            <div class="child-1_1"> 
            <div class="block block-30">
                <div id="map" class="block-0 block-30_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id=487";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
            <div id="map" class="block-0 block-30_2">
            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 488 AND 497";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
            </div>
        </div>
            <div class="block block-31">
                <div id="map" class="block-0 block-31_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 498 AND 507";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-32_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 508 AND 517";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                </div> 
            <div class="block block-32">
                <div id="map" class="block-0 block-32_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 518 AND 527";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-32_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 528 AND 537";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                
            </div>
            <div class="block block-33">
                <div id="map" class="block-0 block-33_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 538 AND 547";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-33_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 548 AND 557";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                                
            </div>
            <div class="block block-34">
                <div id="map" class="block-0 block-34_1">
                    <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 558 AND 567";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                </div>
                <div id="map" class="block-0 block-34_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 568 AND 577";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                                
            </div>
            <div class="block block-35">
                <div id="map" class="block-0 block-35_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 578 AND 587";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-35_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 588 AND 597";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                
                
            </div>
            <div class="block block-36">
                <div id="map" class="block-0 block-36_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 598 AND 607";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-36_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 608 AND 617";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>                
            </div>
            <div class="block block-37">
                <div id="map" class="block-0 block-37_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 618 AND 627";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>
                <div id="map" class="block-0 block-37_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 628 AND 637";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>
                </div>                    
            </div>
        </div>
        </div>
                <div class="child-0 child-6">
                    <div class="child-1_1" >
                        <div class="block block-38">
                            <div id="map" class="block-0 block-38_2">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 638 AND 645";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>
                        </div>
                        <div class="block block-39">
                            <div id="map" class="block-0 block-39_1">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 646 AND 653";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>
                            <div id="map" class="block-0 block-39_2">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 654 AND 663";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>                          
                        </div>
                        <div class="block block-40">
                            <div id="map" class="block-0 block-40_1">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 654 AND 663";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>
                            <div id="map" class="block-0 block-40_2">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 664 AND 673";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>                      
                        </div>
                        <div class="block block-41">
                            <div id="map" class="block-0 block-41_1">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 674 AND 683";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>
                            <div id="map" class="block-0 block-41_2">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 684 AND 693";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>        
                            </div>                
                        </div>
                        <div class="block block-42">
                            <div id="map" class="block-0 block-42_1">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 694 AND 703";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>        
                            </div>
                            <div id="map" class="block-0 block-42_2">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 704 AND 713";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>        
                            </div>
                                            
                        </div>
                        <div class="block block-43">
                            <div id="map" class="block-0 block-43_1">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 714 AND 723";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>        
                            </div> 
                        </div>
                    </div> 
                </div>
                <div class="child-0 child-7">
                    <div class="child-1_1">
                        <div class="block block-44">
                            <div id="map" class="block-0 block-44_1">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 724 AND 733";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>
                            <div id="map" class="block-0 block-44_2">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 734 AND 743";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>                
                            </div>                               
                        <div class="block block-45">
                            <div id="map" class="block-0 block-45_1">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 744 AND 753";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>   
                            </div>
                            <div id="map" class="block-0 block-45_2">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 754 AND 763";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>                               
                        </div>
                        <div class="block block-46">
                            <div id="map" class="block-0 block-46_1">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 764 AND 773";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>
                            <div id="map" class="block-0 block-46_2">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 774 AND 783";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>
                                            
                        </div>
                        <div class="block block-47">
                            <div id="map" class="block-0 block-47_1">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 784 AND 793";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>
                            <div id="map" class="block-0 block-47_2">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 794 AND 803";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>                                
                        </div>
                        <div class="block block-48">
                            <div id="map" class="block-0 block-48_1">
                            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 804 AND 813";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                            </div>
                            
                        </div>
                    </div>
                    </div>
                    <div class="child-0 child-8">
                        <div class="child-1_1">
            <div class="block block-52">

            <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id ='824'";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                                    // Determine background color based on lot_status
                                    $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';
                                    // Escape HTML attribute values
                                    $id = htmlspecialchars($row["id"]);
                                    $lotNumber = htmlspecialchars($row["lot_number"]);
                                    $blockNumber = htmlspecialchars($row["block_number"]);
                                    $lotOwner = htmlspecialchars($row["lot_owner"]);    
                                    // Output HTML for each row
                                    echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; ">';
                                    echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $lotOwner . '" style="background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                                    echo $lotNumber;
                                    echo '</div></a>';
                                }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
            </div>
                <div id="map" class="block-0 block-52_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 825 AND 834";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                </div>
            
            <div class="block block-53">
                <div id="map" class="block-0 block-53_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 835 AND 844";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>    
                </div>
                <div id="map" class="block-0 block-53_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 845 AND 854";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>                
            </div>
            <div class="block block-54">
                <div id="map" class="block-0 block-54_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 855 AND 864";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>
                <div id="map" class="block-0 block-54_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 865 AND 874";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>
                                 
            </div>
            <div class="block block-55">
                <div id="map" class="block-0 block-6_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 875 AND 884";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>
                <div id="map" class="block-0 block-11_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 885 AND 894";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>      
            </div>
            <div class="block block-56">
                <div id="map" class="block-0 block-6_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 895 AND 904";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>
                <div id="map" class="block-0 block-11_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 905 AND 914";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>                
            </div>
            <div class="block block-57">
                <div id="map" class="block-0 block-6_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 915 AND 924";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>
                <div id="map" class="block-0 block-11_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 925 AND 934";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>
                
                                                
            </div>
            <div class="block block-58">
                <div id="map" class="block-0 block-58_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 935 AND 944";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>
                <div id="map" class="block-0 block-58_2">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 945 AND 954";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>   
            </div>
            <div class="block block-59">
                <div id="map" class="block-0 block-59_1">
                <?php
                            // Prepare SQL query to fetch data for IDs from 1 to 5
                            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status 
                                    FROM property 
                                    WHERE id BETWEEN 955 AND 963";
                            // Execute the SQL query
                            $result = $conn->query($sql);
                            // Check if there are any rows returned
                            if ($result && $result->num_rows > 0) {
                                // Loop through the result set
                                while ($row = $result->fetch_assoc()) {
                        // Determine background color based on lot_status
                        $backgroundColor = ($row["lot_status"] == 0) ? 'green' : 'red';

                        // Escape HTML attribute values
                        $id = htmlspecialchars($row["id"]);
                        $lotNumber = htmlspecialchars($row["lot_number"]);
                        $blockNumber = htmlspecialchars($row["block_number"]);

                        // Prepare and execute a query to get deceased person's name (upper)
                        $dsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
                        $deceased_stmt = $conn->prepare($dsql);
                        $deceased_stmt->bind_param("i", $id);
                        $deceased_stmt->execute();
                        $deceased_result = $deceased_stmt->get_result();
                        $deceased_name = '';

                        if ($deceased_result->num_rows > 0) {
                            $deceased_row = $deceased_result->fetch_assoc();
                            $deceased_name = htmlspecialchars($deceased_row["deceased_name"]);
                        }

                        $deceased_stmt->close();

                        // Prepare and execute a query to get deceased person's name (lower)
                        $dlsql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
                        $lowerdeceased_stmt = $conn->prepare($dlsql);
                        $lowerdeceased_stmt->bind_param("i", $id);
                        $lowerdeceased_stmt->execute();
                        $lowerdeceased_result = $lowerdeceased_stmt->get_result();
                        $lowerdeceased_name = '';

                        if ($lowerdeceased_result->num_rows > 0) {
                            $lowerdeceased_row = $lowerdeceased_result->fetch_assoc();
                            $lowerdeceased_name = htmlspecialchars($lowerdeceased_row["deceased_name"]);
                        }

                        $lowerdeceased_stmt->close();

                        // Output HTML for each row
                        echo '<a href="view_lot.php?id=' . $id . '" style="text-decoration: none; color: white; background-color: ' . $backgroundColor . ';" data-id="' . $id . '">';
                        echo '<div class="item btn_select_lot item-' . $id . '" value="' . $blockNumber . $lotNumber . $deceased_name . $lowerdeceased_name. '">';
                        echo $lotNumber;
                        echo '</div></a>';
                    }
                            } else {
                                // No results found
                                echo "No results found for IDs 1 to 5";
                            }
                        ?>  
                </div>
                
            </div>
            </div>
        </div>
      
 
        </div> <!--child-->

    </div> <!--container-->
