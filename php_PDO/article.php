<?php

	include_once('model/db.php');		
	
	$id = (int)($_GET['id'] ?? '');
	$query = dbQuery("SELECT * FROM articles WHERE (id_article = :id)", array('id' => $id));
	$post = $query->fetch();
	
	$hasPost = ($post !== null && count($post) != 0);

?>
<div class="content">
	<? if($hasPost): ?>
		<div class="article">
			<h1><?=$post['title']?></h1>
			<div><?=$post['content']?></div>
			<hr>
			<a href="delete.php?id=<?=$id?>">Remove</a> <br>
			<a href="edit.php?id=<?=$id?>">Edit</a>
		</div>
	<? else: ?>
		<div class="e404">
			<h1>Страница не найдена!</h1>
		</div>
	<? endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>