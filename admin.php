<?php
include '../config.php';

if($_POST){

$title = $_POST['title'];
$artist = $_POST['artist'];
$category = $_POST['category'];

$image = $_FILES['image']['name'];
$audio = $_FILES['audio']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/images/".$image);
move_uploaded_file($_FILES['audio']['tmp_name'], "../uploads/audio/".$audio);

$conn->query("INSERT INTO songs (title, artist, image, file_path, category)
VALUES ('$title','$artist','$image','$audio','$category')");
}
?>

<form method="POST" enctype="multipart/form-data">
<input name="title"><br>
<input name="artist"><br>

<select name="category">
<option value="new">New</option>
<option value="trending">Trending</option>
<option value="album">Album</option>
<option value="news">News</option>
</select><br>

<input type="file" name="image"><br>
<input type="file" name="audio"><br>

<button>Upload</button>
</form>
