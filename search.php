<?php
include 'db.php';

// check if query exists
if (isset($_GET['query'])) {

    $query = $_GET['query'];

    // avoid empty search showing all
    if ($query != "") {

        $sql = "SELECT * FROM products WHERE name LIKE '%$query%'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo "<div class='item'>";
                echo "<b>Name:</b> " . $row['name'] . "<br>";
                echo "<b>Category:</b> " . $row['category'] . "<br>";
                echo "<b>Price:</b> ₹" . $row['price'];
                echo "</div>";
            }

        } else {
            echo "<p>No products found</p>";
        }

    } else {
        echo "<p>Start typing to search...</p>";
    }
}
?>