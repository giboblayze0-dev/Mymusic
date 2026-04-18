<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>BlayzeVibe</title>

<script>
function loadMore(section) {
    let offset = document.querySelectorAll("." + section + "-item").length;

    fetch("loadmore.php?section=" + section + "&offset=" + offset)
    .then(res => res.text())
    .then(data => {
        document.getElementById(section).innerHTML += data;
    });
}
</script>

</head>

<body>

<!-- NAV -->
<nav>
<a href="#new">New</a> |
<a href="#trending">Trending</a> |
<a href="#album">Albums</a> |
<a href="#news">News</a> |
<a href="search.php">Search</a>
</nav>

<h1>🎵 BlayzeVibe</h1>

<!-- NEW -->
<div class="section" id="new">
<h2>🔥 New Music</h2>

<?php
$q = $conn->query("SELECT * FROM songs WHERE category='new' ORDER BY id DESC LIMIT 5");
while($row = $q->fetch_assoc()) {
    echo "<div class='song new-item'>
        <img src='uploads/images/{$row['image']}' width='100'>
        <p>{$row['title']} - {$row['artist']}</p>
        <a href='song.php?id={$row['id']}'>Play</a>
    </div>";
}
?>
<button onclick="loadMore('new')">Load More</button>
</div>

<!-- TRENDING -->
<div class="section" id="trending">
<h2>📈 Trending</h2>

<?php
$q = $conn->query("SELECT * FROM songs WHERE category='trending' ORDER BY views DESC LIMIT 5");
while($row = $q->fetch_assoc()) {
    echo "<div class='song trending-item'>
        <img src='uploads/images/{$row['image']}' width='100'>
        <p>{$row['title']} - {$row['artist']}</p>
        <p>👁 {$row['views']} views</p>
        <a href='song.php?id={$row['id']}'>Play</a>
    </div>";
}
?>
<button onclick="loadMore('trending')">Load More</button>
</div>

<!-- ALBUM -->
<div class="section" id="album">
<h2>💿 Albums</h2>

<?php
$q = $conn->query("SELECT * FROM songs WHERE category='album' ORDER BY id DESC LIMIT 5");
while($row = $q->fetch_assoc()) {
    echo "<div class='song album-item'>
        <img src='uploads/images/{$row['image']}' width='100'>
        <p>{$row['title']} - {$row['artist']}</p>
        <a href='song.php?id={$row['id']}'>Play</a>
    </div>";
}
?>
<button onclick="loadMore('album')">Load More</button>
</div>

<!-- NEWS -->
<div class="section" id="news">
<h2>📰 News</h2>

<?php
$q = $conn->query("SELECT * FROM songs WHERE category='news' ORDER BY id DESC LIMIT 5");
while($row = $q->fetch_assoc()) {
    echo "<div class='song news-item'>
        <img src='uploads/images/{$row['image']}' width='100'>
        <p>{$row['title']} - {$row['artist']}</p>
        <a href='song.php?id={$row['id']}'>Read</a>
    </div>";
}
?>
<button onclick="loadMore('news')">Load More</button>
</div>

</body>
</html>
