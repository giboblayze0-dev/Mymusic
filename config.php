<?php
$host = "localhost";
$user = "root";        // your DB username
$pass = "gift1999";            // your DB password
$db   = "BlayzVibe.great-site.net";      // your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
