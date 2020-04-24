<?php

	include_once('functions.php');	
	
	$flag = ctype_digit($_GET["id"] ?? "");
	$err = "";

	if ($flag) {
		removeArticle($_GET["id"]);
		$err = "Success delete";
	}
	else {
		$err = "error id";
	}

	
?>

<hr>
<a href="index.php">Move to main page</a>
<p><?=$err?></p>