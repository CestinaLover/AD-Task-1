<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Basics - Page 2</title>
    <link rel="stylesheet" href="assets/css/example.css">
</head>
<body>
    <h1>Game Categories</h1>
    <?php
    $games = ["Valorant", "Stardew Valley", "Terraria"];

    echo "<h3>Games I Enjoy:</h3><ul>";
    foreach ($games as $game) {
        echo "<li>$game</li>";
    }
    echo "</ul>";

    $hoursPlayed = 120;
    echo "<p>Total hours played this month: $hoursPlayed</p>";

    if ($hoursPlayed > 100) {
        echo "<p class='genre green'>You're a hardcore gamer!</p>";
    } else {
        echo "<p class='genre blue'>Casual gaming is fun too!</p>";
    }
    ?>

    <a href="/AD-Task-1/index.php">Back to Page 1</a>
</body>
</html>
