<?php
	
	$graph = [];
	$visited = [];
	$vertexCount = 6;

	for ($i = 1; $i <= $vertexCount; $i++) {
		$graph[$i] = array_fill(1, $vertexCount, 0);
		$visited[$i] = 0;
	}

	$graph[1][2] = $graph[2][1] = 1;
	$graph[1][5] = $graph[5][1] = 1;
	$graph[5][2] = $graph[2][5] = 1;
	$graph[5][4] = $graph[4][5] = 1;
	$graph[4][3] = $graph[3][4] = 1;
	$graph[3][2] = $graph[2][3] = 1;
	$graph[6][4] = $graph[4][6] = 1;
	
	echo "<h2>Breadth First Search</h2>";

	require_once('BFS.php');

	$path = BFS($graph, 1, $visited);

	while (!$path->isEmpty()) {
		echo $path->dequeue() . "\t";
	}

	echo "<h2>Depth First Search</h2>";

	require_once('DFS.php');

	$path = DFS($graph, 1, $visited);

	while (!$path->isEmpty()) {
		echo $path->dequeue() . "\t";
	}


	echo "<h2>Topological Sort</h2>";

	require_once('topologicalSort.php');

	$graph = [
		[0, 0, 0, 0, 1],
		[1, 0, 0, 1, 0],
		[0, 1, 0, 1, 0],
		[0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0]
	];

	$sorted = topologicalSort($graph);

	while (!$sorted->isEmpty()) {
		echo $sorted->dequeue() . "\t";
	}

	echo "<h2>Shortest Path using Floyd-Warshall</h2>";

	$totalVertices = 5;
	$graph = [];
	for ($i = 0; $i < $totalVertices; $i++) {
		for ($j = 0; $j < $totalVertices; $j++) {
			$graph[$i][$j] = $i == $j ? 0 : PHP_INT_MAX;
 		}
	}
	$graph[0][1] = $graph[1][0] = 10;
	$graph[2][1] = $graph[1][2] = 5;
	$graph[0][3] = $graph[3][0] = 5;
	$graph[3][1] = $graph[1][3] = 5;
	$graph[4][1] = $graph[1][4] = 10;
	$graph[3][4] = $graph[4][3] = 20;
	
	require_once('floydWarshall.php');

	$distance = floydWarshall($graph);

	echo "Shortest distance between A to E is: " . $distance[0][4] . "<br>";
	echo "Shortest distance between D to C is: " . $distance[3][2] . "<br>";

	echo "<h2>Shortest Path using Dijkstra</h2>";
	require_once('dijkstra.php');

	$graph = [
		'A' => ['B' => 3, 'C' => 5, 'D' => 9],
		'B' => ['A' => 3, 'C' => 3, 'D' => 4, 'E' => 7],
		'C' => ['A' => 5, 'B' => 3, 'D' => 2, 'E' => 6, 'F' => 3],
		'D' => ['A' => 9, 'B' => 4, 'C' => 2, 'E' => 2, 'F' => 2],
		'E' => ['B' => 7, 'C' => 6, 'D' => 2, 'F' => 5],
		'F' => ['C' => 3, 'D' => 2, 'E' => 5]
	];

	$source = "A";
	$target = "F";

	$result = Dijkstra($graph, $source, $target);
	extract($result);

	echo "Distance from $source to $target is $distance <br>";
	echo "Path to follow : ";

	while (!$path->isEmpty()) {
		echo $path->pop() . "\t";
	}

	echo "<h2>Shortest Path using Bellman-Ford</h2>";

	require_once('bellmanFord.php');

	// Checking for negative cycle
	define("I", PHP_INT_MAX);
	$graph = [
		0 => [I, 3, 5, 9, I, I],
		1 => [3, I, 3, 4, 7, I],
		2 => [5, 3, I, 2, 6, 3],
		3 => [9, 4, 2, I, 2, 2],
		4 => [I, 7, 6, 2, I, 5],
		5 => [I, I, 3, 2, 5, I]
	];

	$source = 0;
	$distances = BellmanFord($graph, $source);

	foreach($distances as $target => $distance) {
		echo "distance from $source to $target is $distance <br>";
	}

	echo "<h2>Minimum Spanning Tree using Prim</h2>";

	$G = [
		[0, 3, 1, 6, 0, 0],
		[3, 0, 5, 0, 3, 0],
		[1, 5, 0, 5, 6, 4],
		[6, 0, 5, 0, 0, 2],
		[0, 3, 6, 0, 0, 6],
		[0, 0, 4, 2, 6, 0]
	];

	require_once('primMST.php');

	primMST($G);

	echo "<h2>Minimum Spanning Tree using Kruskal</h2>";

	require_once('Kruskal.php');

	$mst = Kruskal($G);

	$minimumCost = 0;

	foreach ($mst as $v) {
		echo "From {$v['from']} to {$v['to']} cost is {$v['cost']} <br>";
		$minimumCost += $v['cost'];
	}

	echo "Minimum cost: $minimumCost \n";
?>