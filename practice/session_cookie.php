<?php
session_start();

// Function to increment visit count
function incrementVisitCount() {
    if (!isset($_SESSION['visit_count'])) {
        $_SESSION['visit_count'] = 1;
    } else {
        $_SESSION['visit_count']++;
    }

    // Set a cookie to store the visit count for a day
    setcookie('visit_count_cookie', $_SESSION['visit_count'], time() + 86400, '/');
}

// Check if the visit count cookie is set
if (isset($_COOKIE['visit_count_cookie'])) {
    $visitCount = $_COOKIE['visit_count_cookie'];
} else {
    $visitCount = 0;
}

// Increment visit count
incrementVisitCount();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Counter</title>
</head>
<body>
    <h1>Welcome to the Visit Counter</h1>

    <?php
    if ($visitCount == 0) {
        echo "<p>This is your first visit!</p>";
    } else {
        echo "<p>You have visited this site $visitCount times.</p>";
    }
    ?>

    <p>Refresh the page to see the visit count increment.</p>
</body>
</html>
