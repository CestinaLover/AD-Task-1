<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Basics - Page 1</title>
    <link rel="stylesheet" href="assets/css/example.css">
</head>
<body>
    <h1>Welcome to My Game List</h1>
    <?php
    $username = "Jinwoo";
    $favoriteGame = "Minecraft";

    echo "<p>Hello, $username!</p>";
    echo "<p>Your favorite game is: $favoriteGame</p>";

    $genre = "Sandbox";

    if ($genre == "Action") {
        echo "<p class='genre red'>You like fast-paced games!</p>";
    } elseif ($genre == "Sandbox") {
        echo "<p class='genre green'>You enjoy creative freedom!</p>";
    } else {
        echo "<p class='genre blue'>You have unique taste!</p>";
    }

    echo "<h3>Top 5 Games Countdown:</h3><ul>";
    for ($i = 5; $i > 0; $i--) {
        echo "<li>Game Rank: $i</li>";
    }
    echo "</ul>";
    ?>

    <a href="page/index.php">Go to Page 2</a>
</body>
</html>
