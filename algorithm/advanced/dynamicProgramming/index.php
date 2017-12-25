<?php

	echo "<h2>0-1 KnapSack</h2>";

	require_once('knapsack.php');

	$values = [10, 20, 30, 40, 50];
	$weights = [1, 2, 3, 4, 5];
	$maxWeight = 10;
	$n = count($values);
	
	echo knapSack($maxWeight, $weights, $values, $n);

	echo "<h2>Longest Common Subsequence (LCS)</h2>";

	require_once('LCS.php');

	$X = "AGGTAB";
	$Y = "GGTXAYB";
	echo "LCS Length:". LCS($X, $Y);

	define("GC", "-");
	define("SP", 1);
	define("GP", -1);
	define("MS", -1);

	require_once('NWSquencing.php');
	require_once('printSequence.php');

	$X = "GAATTCAGTTA";
	$Y = "GGATCGA";

	echo "<h2>DNA Sequencing using Needleman-Wunsch</h2>";

	NWSquencing($X, $Y);

?>