<?php
include 'koneksi.php';
$query = "SELECT * FROM movie";
$result = $koneksi->query($query);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>" />
</head>

<body>
    <nav>
        <img src="uploads/logo.png" class="logo" />
        <div class="main-nav">
            <a href="#">Home</a>
            <a href="#">Movies</a>
            <a href="#">TV Shows</a>
            <a href="#">My List</a>
        </div>
        <div class="second-nav">
            <a href="#">Login</a>
            <a href="#">Sign Up</a>
        </div>
    </nav>

    <div class="container-cards-menu">
        <h1 class="title-top-rated">Top rated</h1>
        <div class="container-cards">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="card">
                    <img src="<?php echo $row['image']; ?>" class="card-img" />
                    <div class="card-overview">
                        <h2><?php echo $row['title']; ?></h2>
                        <p class="card-year"><?php echo $row['year']; ?></p>
                        <p class="card-genre"><?php echo $row['genre']; ?></p>
                        <p class="card-rating"><?php echo $row['rating']; ?></p>
                    </div>
                    <div class="card-info">
                        <p class="card-description"><?php echo $row['description']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script></script>
</body>

</html>