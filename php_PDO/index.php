<?php

	include_once('model/db.php');
	
	$query = dbQuery("SELECT * FROM articles");
	$articles = $query->fetchAll();

?>
<a href="add.php">Add article</a>
<hr>
<div class="articles">
	<? foreach($articles as $article):?>
		<div class="article">
			<h2><?=$article["title"]?></h2>
			<a href="article.php?id=<?=$article["id_article"]?>">Read more</a>
		</div>
	<?endforeach;?>
</div>
	