<?php

function displaySearchData($searchTerm) {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "project";

    // Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize user input to prevent SQL injection
    $searchTerm = mysqli_real_escape_string($conn, $searchTerm);

    // Query to fetch data from the 'searching' table based on the search term
    $sql = "SELECT id, name FROM searching WHERE name LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data in a table
        echo "<table class='table'>
                <thead>
                    <tr>
                        <th>อันดับ</th>
                        <th>ชื่อ</th>
                        <th>รายการ</th> <!-- New column for the button -->
                    </tr>
                </thead>
                <tbody>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td><button onclick='handleButtonClick(" . $row["id"] . ")'>ดูข้อมูล</button></td>
                </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
}
?>

<script>
function handleButtonClick(id) {
    // Check different conditions for each ID
    if (id === 1) {
        // Redirect to from1.php for ID 1
        window.location.href = '../from1.php';
    } else if (id === 2) {
        // Redirect to from2.php for ID 2
        window.location.href = '../from2.php';
    } else if (id === 3) {
        // Redirect to from3.php for ID 3
        window.location.href = '../from4.php';
    } else if (id === 4) {
        // Redirect to from3.php for ID 3
        window.location.href = '../from5.php';
    } else if (id === 5) {
        // Redirect to from3.php for ID 3
        window.location.href = '../from6.php';
    } else {
        // Handle other cases or do nothing
        alert('Button clicked for id ' + id);
    }
}
</script>
