<?php

	$dsn = 'mysql:host=127.0.0.1;dbname=algorithms;';
	$user = 'hxhking';
	$pass = 'hunter1hunter';

	$dbh = new PDO($dsn, $user, $pass);

	$result = $dbh->query("SELECT * FROM categories ORDER BY parentCategory ASC, sortInd ASC", PDO::FETCH_OBJ);

	$categories = [];

	foreach($result as $row){
		$categories[$row->parentCategory][] = $row;
	}

	echo json_encode($categories);	

	function showCategoryTree(Array $categories, int $n)
	{
		if (isset($categories[$n])){
			foreach($categories[$n] as $category){
				echo str_repeat("-", $n)."".$category->categoryName . "<br>";
				showCategoryTree($categories, $category->id);
			}
		}
		return;
	}

	echo showCategoryTree($categories, 0);


	

?>