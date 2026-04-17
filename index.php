<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>My Music Website</title>
</head>

<body>

<h1>🎵 New Music</h1>
<div id="new-music">
<?php
$result = $conn->query("SELECT * FROM songs ORDER BY id DESC LIMIT 10");
while ($row = $result->fetch_assoc()) {
?>
  <div>
    <h3><?php echo $row['artist']." - ".$row['title']; ?></h3>
    <a href="song.php?song=<?php echo $row['slug']; ?>">Play</a>
  </div>
<?php } ?>
</div>

<hr>

<h1>🔥 Trending Music</h1>
<div id="trending">
<?php
$result = $conn->query("SELECT * FROM songs ORDER BY views DESC LIMIT 10");
while ($row = $result->fetch_assoc()) {
?>
  <div>
    <h3><?php echo $row['artist']." - ".$row['title']; ?></h3>
    <a href="song.php?song=<?php echo $row['slug']; ?>">Play</a>
  </div>
<?php } ?>
</div>

<hr>

<h1>💿 Albums</h1>
<div id="albums">
<?php
$result = $conn->query("SELECT * FROM albums ORDER BY id DESC LIMIT 10");
while ($row = $result->fetch_assoc()) {
?>
  <div>
    <h3><?php echo $row['name']; ?></h3>
  </div>
<?php } ?>
</div>

<hr>

<h1>📰 Music News</h1>
<div id="news">
<?php
$result = $conn->query("SELECT * FROM news ORDER BY id DESC LIMIT 5");
while ($row = $result->fetch_assoc()) {
?>
  <div>
    <h3><?php echo $row['title']; ?></h3>
    <p><?php echo $row['content']; ?></p>
  </div>
<?php } ?>
</div>

</body>
</html>
