<?php


	function editArticle(int $id, string $newTitle, string $newContent) : bool {
		
		$articles = getArticles();
		$flag = true;

		isset($articles[$id]) && $newTitle != '' && $newContent != '' ? $articles[$id] = [
			'title' => $newTitle,
			'content' => $newContent
		] : $flag = false;
		
		saveArticles($articles);
		return $flag;

	}
	// your functions may be here

	/* start --- black box */
	function getArticles() : array{
		$content = file_get_contents('db/articles.json');
		if($content != false){
			return json_decode($content, true);
		}
		return [];
	}

	function addArticle(string $title, string $content) : bool{
		$articles = getArticles();

		$lastId = end($articles)['id'] ?? '';
		$id = $lastId + 1;

		$articles[$id] = [
			'id' => $id,
			'title' => $title,
			'content' => $content
		];

		saveArticles($articles);
		return true;
	}

	function removeArticle(int $id) : bool{
		$articles = getArticles();

		if(isset($articles[$id])){
			unset($articles[$id]);
			saveArticles($articles);
			return true;
		}
		
		return false;
	}

	function saveArticles(array $articles) : bool{
		file_put_contents('db/articles.json', json_encode($articles));
		return true;
	}
	/* end --- black box */