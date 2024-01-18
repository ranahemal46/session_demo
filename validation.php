<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid_username = "hemal";
    $valid_password = "password123";

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    if ($input_username == $valid_username && $input_password == $valid_password) {
        $_SESSION["user_id"] = $input_username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
