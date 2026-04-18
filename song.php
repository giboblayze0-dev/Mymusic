<?php
include 'config.php';

$id = $_GET['id'];

// increase views
$conn->query("UPDATE songs SET views = views + 1 WHERE id=$id");

$song = $conn->query("SELECT * FROM songs WHERE id=$id")->fetch_assoc();
?>

<h1><?php echo $song['title']; ?></h1>
<p><?php echo $song['artist']; ?></p>

<img src="uploads/images/<?php echo $song['image']; ?>" width="200">

<audio controls>
<source src="uploads/audio/<?php echo $song['file_path']; ?>">
</audio>

<p>👁 Views: <?php echo $song['views']; ?></p>
