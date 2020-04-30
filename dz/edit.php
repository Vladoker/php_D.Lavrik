<?php

    include_once('functions.php');	
    	
	$id = ctype_digit($_GET["id"] ?? '') ? $_GET["id"] : false;
	$message = "";

	if ($id) {
        $articles = getArticles();
        $article = isset($articles[$id]) ? $articles[$id] : false;     
	}
	else {
		$message = "error id";
    }
    if($_SERVER["REQUEST_METHOD"] == 'POST') {
        $message = editArticle($id, $_POST['title'], $_POST['content']) ? 'Succes saved' : 'error post';
    }

	
?>

<hr>
<? if($message == '' && $article != false):?>
<form method="POST">
    <span>Title</span>
    <input type="text" name="title" value="<?=$article['title']?>"> <br>
    <span>Content</span>
    <textarea name="content"><?=$article['content']?></textarea> <br>
    <button>Save</button>
</form>
<? else :?>
<p><?=$message?></p>
<? endif;?>
<a href="index.php">Move to main page</a>