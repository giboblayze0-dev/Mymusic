<?php
$host = "sql123.epizy.com";
$user = "epiz_12345678";
$pass = "yourStrongPassword";
$db   = "epiz_12345678_xmusic";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
