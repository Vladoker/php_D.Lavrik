<?php

	include_once('functions.php');
	$articles = getArticles();

?>
<a href="add.php">Add article</a>
<hr>
<div class="articles">
	<? foreach($articles as $id => $value):?>
		<div class="article">
			<h2><?=$value["title"]?></h2>
			<a href="article.php?id=<?=$id?>">Read more</a>
		</div>
	<?endforeach;?>
</div>
	