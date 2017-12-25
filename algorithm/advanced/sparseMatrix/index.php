<?php
	
	$sparseArray = [];
	$sparseArray[0][5] = 1;
	$sparseArray[1][0] = 1;
	$sparseArray[2][4] = 2;
	$sparseArray[3][2] = 2;
	$sparseArray[4][6] = 1;
	$sparseArray[5][7] = 2;
	$sparseArray[6][6] = 1;
	$sparseArray[7][1] = 1;

	echo "<h2>Bloom Filters and Sparse Matrix</h2>";

	require_once('getSparseValue.php');

	echo getSparseValue($sparseArray, 0, 2) . "<br>";
	echo getSparseValue($sparseArray, 7, 1) . "<br>";
	echo getSparseValue($sparseArray, 8, 8) . "<br>";



?>