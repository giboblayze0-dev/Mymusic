<?php
include 'config.php';

$section = $_GET['section'];
$offset = $_GET['offset'];

$q = $conn->query("SELECT * FROM songs 
WHERE category='$section'
ORDER BY id DESC
LIMIT 5 OFFSET $offset");

while($row = $q->fetch_assoc()) {
    echo "<div class='{$section}-item song'>
        <img src='uploads/images/{$row['image']}' width='100'>
        <p>{$row['title']} - {$row['artist']}</p>
        <a href='song.php?id={$row['id']}'>Open</a>
    </div>";
}
?>
