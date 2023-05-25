<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="update-process.php" method="POST">
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="email" name="email">
        <input type="text" placeholder="message" name="message">
        <input type="hidden" placeholder="id" name="idmessages" value="<?= $_GET["id"] ?>">
        <?php
        ?>
        <input type="submit" value="update">
    </form>
</body>
</html>