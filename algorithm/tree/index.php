<?php 

	require_once('treeNode.php');
	require_once('tree.php');

	echo "<h2>Basic Tree</h2>";

	$ceo = new TreeNode("CEO");
	$tree = new Tree($ceo);

	$cto = new TreeNode("CTO");
	$cfo = new TreeNode("CFO");
	$cmo = new TreeNode("CMO");
	$coo = new TreeNode("COO");

	$ceo->addChildren($cto);
	$ceo->addChildren($cfo);
	$ceo->addChildren($cmo);
	$ceo->addChildren($coo);

	$seniorArchitect = new TreeNode("Senior Architect");
	$softwareEngineer = new TreeNode("Software Engineer");
	$userInterfaceDesigner = new TreeNode("User Interface Designer");
	$qualityAssuranceEngineer = new TreeNode("Quality Assurance Engineer");

	$cto->addChildren($seniorArchitect);
	$seniorArchitect->addChildren($softwareEngineer);
	$cto->addChildren($qualityAssuranceEngineer);
	$cto->addChildren($userInterfaceDesigner);

	$tree->traverse($tree->root);


	echo "<h2>Binary Tree</h2>";

	require_once('binaryNode.php');
	require_once('binaryTree.php');

	$final = new BinaryNode("Final");

	$tree = new BinaryTree($final);

	$semiFinal1 = new BinaryNode("Semi Final 1");
	$semiFinal2 = new BinaryNode("Semi Final 2");
	$quarterFinal1 = new BinaryNode("Quarter Final 1");
	$quarterFinal2 = new BinaryNode("Quarter Final 2");
	$quarterFinal3 = new BinaryNode("Quarter Final 3");
	$quarterFinal4 = new BinaryNode("Quarter Final 4");

	$semiFinal1->addChildren($quarterFinal1, $quarterFinal2);
	$semiFinal2->addChildren($quarterFinal3, $quarterFinal4);

	$final->addChildren($semiFinal1, $semiFinal2);

	$tree->traverse($tree->root);

	echo "<h2>Binary Tree - Array</h2>";

	require_once('binaryTreeArray.php');

	$nodes = [];
	$nodes[] = "Final";
	$nodes[] = "Semi Final 1";
	$nodes[] = "Semi Final 2";
	$nodes[] = "Quarter Final 1";
	$nodes[] = "Quarter Final 2";
	$nodes[] = "Quarter Final 3";
	$nodes[] = "Quarter Final 4";

	$tree = new BinaryTreeArray($nodes);
	$tree->traverse(0);

	echo "<h2>Binary Search Tree (BST)</h2>";

	require_once('node.php');
	require_once('bst.php');

	$tree = new BST(10);

	$tree->insert(12);
	$tree->insert(6);
	$tree->insert(3);
	$tree->insert(8);
	$tree->insert(15);
	$tree->insert(13);
	$tree->insert(36);

	$tree->traverse($tree->root);
	echo "<br>";
	echo $tree->search(14) ? "Found" : "Not Found" . "<br>";
	echo $tree->search(36) ? "Found" : "Not Found" . "<br>";
	echo "<br>";
	
	$tree->remove(15);
	$tree->traverse($tree->root);

	echo "<h2>Using Traversal Methods</h2>";

	$tree->traverse($tree->root, 'pre-order');
	echo "<br>";
	$tree->traverse($tree->root, 'in-order');
	echo "<br>";
	$tree->traverse($tree->root, 'post-order');

?>