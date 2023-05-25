<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $err = "";
    $content = "";
	if(isset($_GET["error"])){
		$err = $_GET["error"];
	}
	$mysqli = new mysqli("localhost", "root", "root", "messages", "3306");
    $qry = "SELECT * FROM messages";
    $mysqli_stmt = $mysqli->prepare($qry);
    $mysqli_stmt->execute();
    $result = $mysqli_stmt->get_result();
    while ($row = $result -> fetch_assoc()) { 
        $content .= "<span>" . $row["name"] . "</span>&nbsp;";
        $content .= "<span>" . $row["email"] . "</span>&nbsp;";
        $content .= "<span>" . $row["message"] . "</span>&nbsp;";
        $content .= "<a href='update.php?id=" . $row["idmessages"] . "'>update</a>&nbsp;";
        $content .= "<a href='delete.php?id=" . $row["idmessages"] . "'>delete</a>";
        $content .= "<br>";
    }
    $content .= "<a href='../../create.php'>add</a>";

    $mysqli->close();
?>

<!doctype html>
<html lang="nl">
	<head>
		<meta charset="utf-8" />
		<title>Messages</title>
	</head>
	<body>
		<?php 
            echo $content;
            echo "<br>";
            echo $err;
            echo "<br>";
        ?>
	</body>
</html>