<?php


	echo "<h2>Currying</h2>";

	require_once('currySum.php');

	$sum = currySum(10)(20)(30);

	echo $sum;

	echo "<h2>Partial Applications</h2>";

	require_once('partial.php');

	$sum = partial("sum", 10, 20);
	$sum = $sum(30);

	echo $sum;
?>