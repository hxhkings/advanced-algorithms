<?php

	$reviews = [];
	$reviews['Adiyan'] = ["McDonalds" => 5,	"KFC" => 5, "Pizza Hut"	=>	4.5, "Burger King" => 4.7, "American Burger" =>	3.5, "Pizza Roma" => 2.5];	

	$reviews['Mikhael']	= ["McDonalds" => 3, "KFC" => 4, "Pizza	Hut" =>	3.5, "Burger King" => 4, "American Burger" =>	4, "Jafran"	=>	4];	

	$reviews['Zayeed'] = ["McDonalds" => 5,	"KFC" => 4,	"Pizza Hut"	=>	2.5, "Burger King" => 4.5, "American Burger"	=>	3.5, "Sbarro" => 2];	

	$reviews['Arush'] =	["KFC" => 4.5, "Pizza Hut" => 3, "Burger King" => 4, "American Burger" => 3, "Jafran" => 2.5,	"FFC" => 3.5];	
	$reviews['Tajwar'] = ["Burger King"	=>	3, "American Burger" =>	2, "KFC" => 2.5, "Pizza Hut" =>	3, "Pizza Roma"	=>	2.5, "FFC" => 3];	
	$reviews['Aayan'] =	[ "KFC"	=> 5, "Pizza Hut" => 4, "Pizza Roma" => 4.5, "FFC" => 4];

	echo "<h2>Collaborative Filtering Recommendation System Using Pearson Correlation</h2>";

	require_once('pearsonScore.php');
	require_once('getRecommendations.php');

	$person = 'Adiyan';

	echo 'Restaurant recommendations for ' . $person . "<br>";
	$recommendations = getRecommendations($reviews, $person);
	foreach ($recommendations as $restaurant => $score) {
		echo $restaurant . "<br>";
	}


?>