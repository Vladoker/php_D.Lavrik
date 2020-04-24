<?php 
$err = "";
$isSend = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<pre>";
 
 $file = $_FILES["phpimage"];
 
  

  if($file["name"] == "") {
    $err = "ФАЙЛ НЕ ВЫБРАН";
  }
  else if ($file["size"] == 0) {
    $err = "ФАЙЛ СЛИШКОМ БОЛЬШОЙ";
  }
  else if (!preg_match("/.*\.png|jpg$/", $file["name"]) ){
    $err = "file type png or jpg";
  }
  else $isSend = true;

  if ($isSend) {
    $name = basename($file["name"]);
    move_uploaded_file($file["tmp_name"], "images/$name");
     echo "Файл отправлен";
  }
  else { 
     echo $err; 
  } 
  echo "</pre>";
  
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forma</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">

    <input type="file" name="phpimage" id="228">
    <br>

    <button>Загрузить</button>
    </form>
</body>
</html>