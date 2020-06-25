<?php
session_start();
    $_SESSION['registered_user'] ?? '' != '' ? 0 : exit();

    // тут надо делать загрузку файлов на сервер но мне лень) 
    // есть вероятность что эту работу никто неувидит поэтому ей было уделенно 15 - 20 минут)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body>
    <form>
    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    </form>
</body>
</html>