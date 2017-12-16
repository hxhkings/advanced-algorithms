<?php 

	echo "<h2>Bubble Sort</h2>";

	require_once('bubbleSort.php');

	$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
	$sortedArray = bubbleSort($arr);
	echo implode(', ', $sortedArray);

	echo "<h2>Selection Sort</h2>";

	require_once('selectionSort.php');

	$sortedArray = selectionSort($arr);
	echo implode(', ', $sortedArray);

	echo "<h2>Insertion Sort</h2>";

	require_once('insertionSort.php');

	$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
	insertionSort($arr);
	echo implode(', ', $arr);

	echo "<h2>Merge Sort</h2>";

	require_once('mergeSort.php');

	$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
	$sortedArray = mergeSort($arr);
	echo implode(', ', $sortedArray);

	echo "<h2>Quick Sort</h2>";

	require_once('quickSort.php');

	$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
	quickSort($arr, 0, count($arr) - 1);
	echo implode(', ', $arr);

	echo "<h2>Bucket Sort</h2>";

	require_once('bucketSort.php');

	$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
	bucketSort($arr);
	echo implode(', ', $arr);
?>