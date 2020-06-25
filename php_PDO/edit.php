<?php

    include_once('model/db.php');	
    	
	$id = ctype_digit($_GET["id"] ?? '') ? $_GET["id"] : false;
	$message = "";

	if ($id) {   
        $article = dbQuery("SELECT * FROM articles WHERE id_article = $id");
        $article = $article->fetch();
        $article = count($article) == 0 ? false : $article;
	}
	else {
		$message = "error id";
    }
    if($_SERVER["REQUEST_METHOD"] == 'POST') {
        dbQuery("UPDATE articles SET title = :title, content = :content WHERE id_article = :id",[
                "title" => $_POST['title'],
                "content" => $_POST['content'],
                "id" => $id
            ]
        );
        header("Location: index.php");
		exit();
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