<?php

	include_once('model/db.php');	
	
	$flag = ctype_digit($_GET["id"] ?? "");
	$err = "";

	if ($flag) {
		$id = $_GET["id"];
		dbQuery("DELETE FROM articles WHERE id_article = $id");
		$err = "Success delete";
	}
	else {
		$err = "error id";
	}

	
?>

<hr>
<a href="index.php">Move to main page</a>
<p><?=$err?></p>