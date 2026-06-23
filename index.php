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
    <div class="scope product-cards | -fluid-text">
        <h1 class="title-top-rated">Top rated</h1>
        <div class="_card-list | grid" style="
      --grid--fill-mode: var(--product-cards--fill-mode, auto-fill);
      --grid--row-gap: var(--product-cards--gap, 1.5rem);
      --grid--column-gap: var(--product-cards--gap, 1.5rem);
      --grid--column-max-count: var(--product-cards--column-max-count, 4);
      --grid--column-min-width: var(--product-cards--column-min-width, 20rem);">

            <?php while ($row = $result->fetch_assoc()) { ?>
                <section class="_card">
                    <h2 class="_heading | -fluid-text -trim-both" style="--fluid-text--min-font-size: 16;
      --fluid-text--max-font-size: 24;"><?php echo $row['title']; ?></h2>
                    <div class="_thumbnail-stack">
                        <img src="<?php echo $row['image']; ?>" alt="" width="400" height="210" fetchpriority="high" />
                        <img src="<?php echo $row['image']; ?>" alt="" width="400" height="210" fetchpriority="high" />
                    </div>
                    <p class="_category | -trim-both">Category A</p>
                    <p class="_price | -trim-both"><?php echo $row['year']; ?></p>
                    <p class="_description | -line-clamp"><?php echo $row['description']; ?></p>
                    <p class="_description | -line-clamp"><?php echo $row['rating']; ?></p>
                    <ul class="_tag-list | cluster" style="
      --cluster--gap: 0.5rem;">
      <?php while ($rowy = $resulto->fetch_assoc()) {?>
                        <li class="_tag | -trim-both"><?php echo $rowy['nameGenre']?></li>
                        <?php } ?>
                    <div class="_button"
                        style="--purchase-button--background: var(--_accent); --purchase-button--foreground: var(--_accent-contrast);">
                        <a href="#" class="scope purchase-button">See more</a>
                    </div>
                </section>
            <?php } ?>
        </div>
    </div>

    <script></script>
</body>

</html>