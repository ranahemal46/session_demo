<?php
session_start();

if (isset($_SESSION["user_id"])) {
    echo "Welcome " . $_SESSION["user_id"] . " You are now logged in and on the dashboard page.";
    echo "Session is started now.";
    echo '<form action="logout.php" method="post">';
    echo '<input type="submit" value="Logout">';
    echo '</form>';
} else {
    header("Location: Login.php");
    exit();
}
?>
