<?php
	
	echo "<h2>Pattern Matching</h2>";
	require_once('strFindAll.php');

	$txt = "AABAACAADAABABBBAABAA";
	$pattern = "AABA";
	$matches = strFindAll($pattern, $txt);

	if ($matches) {
		foreach ($matches as $pos) {
			echo "Pattern found at index: " . $pos . "<br>";
		}
	}

	echo "<h2>Pattern Matching using Knuth-Morris-Pratt</h2>";
	require_once('kmpStringMatching.php');

	$matches = KMPStringMatching($txt, $pattern);

	if ($matches) {
		foreach ($matches as $pos) {
			echo "Pattern found at index: " . $pos . "<br>";
		}
	}


?>