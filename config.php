<?php
$conn = new mysqli("localhost", "DB_USER", "DB_PASS", "DB_NAME");

if ($conn->connect_error) {
    die("DB Error: " . $conn->connect_error);
}
?>



<?php include 'config.php'; ?>

<form method="GET">
<input name="q" placeholder="Search songs">
<button>Search</button>
</form>

<?php
if(isset($_GET['q'])) {
$q = $_GET['q'];

$res = $conn->query("SELECT * FROM songs 
WHERE title LIKE '%$q%' OR artist LIKE '%$q%'");

while($row = $res->fetch_assoc()) {
    echo "<div>
        <img src='uploads/images/{$row['image']}' width='100'>
        <p>{$row['title']} - {$row['artist']}</p>
        <a href='song.php?id={$row['id']}'>Play</a>
    </div>";
}
}
?>
