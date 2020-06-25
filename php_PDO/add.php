<?php

	include_once('./model/db.php');

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$postData = $_POST;
		if (trim($postData["namePost"]) != "" && trim($postData["descPost"]) != "") {		
			dbQuery("INSERT INTO articles (title, content) VALUES (:t, :c)", [
				"t" => trim($postData["namePost"]),
				"c" => trim($postData["descPost"])
			]);
				
			header("Location: index.php");
			exit();				
		}
		
	}

?>

<form method="POST">
    <span>Названия поста</span> <br>
    <input type="text" name="namePost"> <br>
    <span>Содержимое поста</span> <br>
    <textarea name="descPost" id="" cols="30" rows="10"></textarea>
    <button>Send</button>
</form>
<hr>
<a href="index.php">Move to main page</a>