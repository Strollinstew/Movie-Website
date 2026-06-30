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
    <div class="form-box">
        <form action="login.php" method="POST" class="form">
            <span class="title">Log in</span>
            <div class="form-container">
                <input type="text" name="name" class="input" placeholder="Full Name">
                <input type="email" name="email" class="input" placeholder="Email">
                <input type="password" name="password" class="input" placeholder="Password">
            </div>
            <input type="submit" value="login" id="submit">
        </form>
    </div>
</body>

</html>