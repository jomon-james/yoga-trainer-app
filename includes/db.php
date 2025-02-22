<?php
$host = "localhost";
$user = "root";
$pass = "jomon27james";
$dbname = "yoga_trainer";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
