<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST['login'] ?? '' != '' && $_POST['pass'] ?? '' != '' ) {

            $login = trim($_POST['login']);
            $pass = md5(trim($_POST['pass']));

            file_put_contents('./pass.txt', $login.':'.$pass . PHP_EOL, FILE_APPEND);

            header('Location: index.php');
            exit();

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <title>Register</title>
</head>
<body>
<h1 class="ml-5">Register</h1>
    <?php include("./model.php");?>
</body>
</html>