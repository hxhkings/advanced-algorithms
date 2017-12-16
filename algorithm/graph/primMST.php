<?php

	function primMST(array $graph)
	{
		$parent = []; // Array to store the MST
		$key = []; // used to pick minimum weight edge
		$visited = []; // set of vertices not yet included in  MST
		$len = count($graph);

		// Initialize all keys as MAX
		for ($i = 0; $i < $len; $i++) {
			$key[$i] = PHP_INT_MAX;
			$visited[$i] = false;
		}

		$key[0] = 0;
		$parent[0] = -1;

		// The MST will have V vertices
		for ($count = 0; $count < $len - 1; $count++) {
			// Pick the minimum key vertex
			$minValue = PHP_INT_MAX;
			$minIndex = -1;

			foreach (array_keys($graph) as $v) {
				if ($visited[$v] == false && $key[$v] < $minValue) {
					$minValue = $key[$v];
					$minIndex = $v;
				}
			}

			$u = $minIndex;

			// Add the picked vertex to the MST Set
			$visited[$u] = true;

			for ($v = 0; $v < $len; $v++) {
				if ($graph[$u][$v] != 0 && $visited[$v] == false 
					&& $graph[$u][$v] < $key[$v]) {
					$parent[$v] = $u;
					$key[$v] = $graph[$u][$v];
				}
			}
		}

		// Print MST
		echo "Edge\tweight<br>";
		$minimumCost = 0;
		for ($i = 1; $i < $len; $i++) {
			echo $parent[$i] . " - " . $i . " \t " . $graph[$i][$parent[$i]] . "<br>";
			$minimumCost += $graph[$i][$parent[$i]];
		}
		echo "Minimum cost: $minimumCost <br>";
	}


?>