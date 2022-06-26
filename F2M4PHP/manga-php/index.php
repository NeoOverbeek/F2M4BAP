<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `manga`');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga Store</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans:ital,wght@0,400;0,500;1,400&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">

        <h1 class="site-title">Best manga 2022!</h1>

        <section class="places-list">
        <?php foreach($result as $row): ?>
            <!--article-->
            <article class="places-list__place">
                <h2 class="manga-title"><?php echo $row['titel']; ?></h2>
                <figure class="places-list__photo" style="background-image: url(images/<?php echo $row['foto']?>)"></figure>
                <header class="deel-prijs-header">
                    <h3>vol <?php echo $row['volume']?></h3>
                    <em>€ <?php echo $row['prijs']?></em>
                </header>
                <p><?php echo $row['beschrijving']?></p>
            </article>
            <?php endforeach; ?>
        </section>
    </div>
</body>

</html>