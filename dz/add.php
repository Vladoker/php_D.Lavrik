<?php

	include_once('functions.php');

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$postData = $_POST;
		if ($postData["namePost"] != "" && $postData["descPost"] != "") {
			
		$flag =	addArticle(trim($postData["namePost"]), trim($postData["descPost"]));
			if($flag) {
				echo "Success";
			}
			else {
				echo "error";
			}
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