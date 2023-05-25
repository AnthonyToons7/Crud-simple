<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])){
    $mysqli = new mysqli("localhost", "root", "root", "messages", "3306");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $test = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?);";
    $mysqli_stmt = $mysqli->prepare($test);
    $mysqli_stmt->bind_param('sss', $name, $email, $message);
    if ($mysqli_stmt->execute()){
        echo "test";
    }

}

header('Location:read.php');