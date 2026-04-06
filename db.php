<?php
$conn = new mysqli("localhost", "root", "", "ajax_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>