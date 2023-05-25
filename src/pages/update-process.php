<?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    var_dump($_POST);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $id = $_POST["idmessages"];
    $mysqli = new mysqli("localhost", "root", "root", "messages", "3306");
    $qry = "UPDATE messages SET name=?, email=?, message=? WHERE idmessages=?";
    $mysqli_stmt = $mysqli->prepare($qry);
    $mysqli_stmt -> bind_param("sssi", $name, $email, $message, $id);
    $mysqli_stmt -> execute();
    var_dump($id);
    header('Location:read.php');

?>