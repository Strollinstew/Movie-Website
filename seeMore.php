<?php
include 'koneksi.php';
$query = "SELECT * FROM movie";
$result = $koneksi->query($query);

$queryo = "SELECT movie.*, genre.* FROM movie JOIN genre ON movie.idGenre = genre.idGenre;";
$resulto = $koneksi->query($queryo);

$id = intval($_GET['id']);

$querye = "SELECT * FROM movie WHERE idMovie = $id";
$resulte = $koneksi->query($querye)
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>See More</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>" />
</head>

<body>

    <div class="detailed">
        <?php while ($rowe = $resulte->fetch_assoc()) { ?>
            <img src="<?php echo $rowe['image'] ?>" alt="">
            <div class="movie-info">
                <h1><?php echo $rowe['title'] ?></h1>
                <p class="description2"><?php echo $rowe['description'] ?></p>
                <div class="tags">
                    <?php while ($rowo = $resulto->fetch_assoc()) { ?>
                        <span class="tag2">
                            <?php echo $rowo['nameGenre'] ?>
                        </span>
                    <?php } ?>
                </div>
                <p class="year2"><?php echo $rowe['year'] ?></p>
            <?php } ?>
            <button class="review" onclick="openForm()">Make Review</button>
        </div>
    </div>

    <div id="review-container" style="display: none;">
        <form action="review.php" method="POST" class="review-form">
            <input type="hidden" name="movieId" value="<?php echo $id ?>">

            <label for="star"><b>Stars</b></label>
            <br>
            <input type="radio" id="one" name="stars" value="1">
            <label for="one">1⭐</label>
            <br>
            <input type="radio" id="two" name="stars" value="2">
            <label for="two">2⭐</label>
            <br>
            <input type="radio" id="three" name="stars" value="3">
            <label for="three">3⭐</label>
            <br>
            <input type="radio" id="four" name="stars" value="4">
            <label for="four">4⭐</label>
            <br>
            <input type="radio" id="five" name="stars" value="5">
            <label for="five">5⭐</label>
            <br>

            <label for="review"><b>Review</b></label>
            <br>
            <textarea id="review" name="review"></textarea>
            <br>

            <button type="submit" class="review-submit">Submit</button>
            <br>
            <button type="button" class="btn-close" onclick="closeForm()">Close</button>
        </form>
    </div>





</body>
<script>

    let reviewContainer = document.getElementById("review-container");

    function closeForm() {
        reviewContainer.style.display = "none";
    }

    function openForm() {
        reviewContainer.style.display = "block";
    }
</script>

</html>