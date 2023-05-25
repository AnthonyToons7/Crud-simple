<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $mysqli = new mysqli("localhost", "root", "root", "messages", "3306");
    $qry = "DELETE FROM messages WHERE idmessages = ?";
    $mysqli_stmt = $mysqli->prepare($qry);
    $mysqli_stmt -> bind_param("i", $_GET['id']);
    $mysqli_stmt -> execute();
    $result = $mysqli_stmt->get_result();

header('Location:read.php');