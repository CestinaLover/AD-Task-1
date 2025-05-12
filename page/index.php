<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Basics - AD Task</title>
    <link rel="stylesheet" href="assets/css/example.css">
</head>
<body>
    <h1>AD-Task-1: PHP Basics</h1>
    <p>Demonstrating declarations, conditionals, and loops in PHP.</p>

    <?php
    // Declarations
    $username = "Student";
    $score = 78;

    echo "<h2>Hello, $username!</h2>";
    echo "<p>Your score is: $score</p>";

    // Conditional
    if ($score >= 90) {
        echo "<p class='grade green'>Grade: A</p>";
    } elseif ($score >= 75) {
        echo "<p class='grade blue'>Grade: B</p>";
    } else {
        echo "<p class='grade red'>Grade: C</p>";
    }

    // Looping
    echo "<h3>Numbers 1 to 5</h3><ul>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>Number: $i</li>";
    }
    echo "</ul>";
    ?>

    <img src="assets/img/nyebe_white.png" alt="Example image" width="200">

    <script src="assets/js/example.js"></script>
</body>
</html>
