<?php

	echo "<h2>Linear Search</h2>";

	require_once('linear.php');
	$numbers = range(1, 200, 5);

	if (search($numbers, 31)) {
		echo "Found";
	} else {
		echo "Not Found";
	}

	echo "<h2>Binary Search</h2>";

	require_once('binarySearch.php');
	$numbers = range(1, 200, 5);

	$number = 31;
	if (binarySearch($numbers, $number) !== FALSE) {
		echo "$number Found <br>";
	} else {
		echo "$number Not Found <br>";
	}

	$number = 500;
	if (binarySearch($numbers, $number) !== FALSE) {
		echo "$number Found <br>";
	} else {
		echo "$number Not Found <br>";
	}

	echo "<h2>Recursive Binary Search</h2>";

	require_once('recBinarySearch.php');
	$numbers = range(1, 200, 5);

	$number = 31;
	if (recBinarySearch($numbers, $number, 0, count($numbers) - 1) !== FALSE) {
		echo "$number Found <br>";
	} else {
		echo "$number Not Found <br>";
	}

	$number = 500;
	if (recBinarySearch($numbers, $number, 0, count($numbers) - 1) !== FALSE) {
		echo "$number Found <br>";
	} else {
		echo "$number Not Found <br>";
	}

	echo "<h2>Repetitive Binary Search</h2>";

	require_once('repetitiveBinarySearch.php');

	$numbers = [1, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 5, 5];
	$number = 2;

	$pos = repetitiveBinarySearch($numbers, $number);

	if ($pos >= 0) {
		echo "$number Found at position $pos <br>";
	} else {
		echo "$number Not found <br>";
	}

	$number = 5;

	$pos = repetitiveBinarySearch($numbers, $number);

	if ($pos >= 0) {
		echo "$number Found at position $pos <br>";
	} else {
		echo "$number Not found <br>";
	}

	echo "<h2>Search Using Hash Table</h2>";
	$arr = [];
	$count = rand(10, 30);

	for ($i = 0; $i < $count; $i++) {
		$val = rand(1, 500);
		$arr[$val] = $val;
	}

	$number = 100;

	if (isset($arr[$number])) {
		echo "$number found";
	} else {
		echo "$number not found";
	}

	echo "<h2>Breadth First Search</h2>";

	require_once('treeNode.php');
	require_once('BFSTree.php');

	$root = new TreeNode('8');
	$tree = new BFSTree($root);
	$node1 = new TreeNode("3");
	$node2 = new TreeNode("10");
	$root->addChildren($node1);
	$root->addChildren($node2);

	$node3 = new TreeNode("1");
	$node4 = new TreeNode("6");
	$node5 = new TreeNode("14");
	$node1->addChildren($node3);
	$node1->addChildren($node4);
	$node2->addChildren($node5);

	$node6 = new TreeNode("4");
	$node7 = new TreeNode("7");
	$node8 = new TreeNode("13");
	$node4->addChildren($node6);
	$node4->addChildren($node7);
	$node5->addChildren($node8);

	$visited = $tree->BFS($tree->root);

	while (!$visited->isEmpty()) {
		echo $visited->dequeue()->data . "<br>";
	}

	echo "<h2>Depth First Search</h2>";

	require_once('DFSTree.php');

	try {

		$root = new TreeNode('8');
		$tree = new DFSTree($root);
		$node1 = new TreeNode("3");
		$node2 = new TreeNode("10");
		$root->addChildren($node1);
		$root->addChildren($node2);

		$node3 = new TreeNode("1");
		$node4 = new TreeNode("6");
		$node5 = new TreeNode("14");
		$node1->addChildren($node3);
		$node1->addChildren($node4);
		$node2->addChildren($node5);

		$node6 = new TreeNode("4");
		$node7 = new TreeNode("7");
		$node8 = new TreeNode("13");
		$node4->addChildren($node6);
		$node4->addChildren($node7);
		$node5->addChildren($node8);

		$tree->DFS($tree->root);

		$visited = $tree->visited;
		while (!$visited->isEmpty()) {
			echo $visited->dequeue()->data . "<br>";
		}

	} catch (Exception $e) {
		echo $e->getMessage();
	}

	echo "<h2>Depth First Search (Using SplStack)</h2>";

	require_once('stackDFSTree.php');

	try {

		$root = new TreeNode('8');
		$tree = new StackDFSTree($root);
		$node1 = new TreeNode("3");
		$node2 = new TreeNode("10");
		$root->addChildren($node1);
		$root->addChildren($node2);

		$node3 = new TreeNode("1");
		$node4 = new TreeNode("6");
		$node5 = new TreeNode("14");
		$node1->addChildren($node3);
		$node1->addChildren($node4);
		$node2->addChildren($node5);

		$node6 = new TreeNode("4");
		$node7 = new TreeNode("7");
		$node8 = new TreeNode("13");
		$node4->addChildren($node6);
		$node4->addChildren($node7);
		$node5->addChildren($node8);

		$visited = $tree->DFS($tree->root);

		
		while (!$visited->isEmpty()) {
			echo $visited->dequeue()->data . "<br>";
		}

	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>