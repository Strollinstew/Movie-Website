<?php
include 'koneksi.php';
$query = "SELECT * FROM movie";
$result = $koneksi->query($query);

$queryo = "SELECT movie.*, genre.* FROM movie JOIN genre ON movie.idGenre = genre.idGenre;";
$resulto = $koneksi->query($queryo);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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
            <a href="login.php">Login</a>
            <a href="#">Sign Up</a>
        </div>
    </nav>

    <div class="product-cards">
        <h1 class="title-top-rated">Top Rated</h1>
        <div class="card-list">
            <?php while ($row = $result->fetch_assoc()) { 
            
            $movieId = $row['idMovie'];
            ?>
            <div class="card">
                <div class="poster">
                    <img src="<?php echo $row['image'] ?>" alt="Movie Poster">
                    <span class="category"><?php echo $row['type'] ?></span>
                </div>
                <div class="card-content">
                    <div class="title-movie">
                        <h2><?php echo $row['title'] ?></h2>
                        <span class="year"><?php echo $row['year'] ?></span>
                    </div>
                    <p class="description">
                        <?php echo $row['description'] ?>
                    </p>
                    <p class="rating"><?php echo $row[''] ?></p>
                     <?php while ($rowo = $resulto->fetch_assoc()) {?>
                    <div class="tags">
                        <span class="tag">
                            <?php echo $rowo['nameGenre']?>
                        </span>
                    </div>
                    <?php } ?>
                    <a href="seeMore.php?id=<?php echo $movieId ?>" class="btn">See More</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <script>

    </script>
</body>

</html>