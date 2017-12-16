<?php

	function Kruskal(array $graph): array 
	{
		$len = count($graph);
		$tree = [];

		$set = [];
		foreach ($graph as $k => $adj) {
			$set[$k] = [$k];
		}

		$edges = [];
		for ($i = 0; $i < $len; $i++) {
			for ($j = 0; $j < $i; $j++) {
				if ($graph[$i][$j]) {
					$edges[$i . ',' . $j] = $graph[$i][$j];
				}
			}
		}

		asort($edges);

		foreach ($edges as $k => $w) {
			list($i, $j) = explode(',', $k);

			$iSet = findSet($set, $i);
			$jSet = findSet($set, $j);
			if ($iSet != $jSet) {
				$tree[] = ["from" => $i, "to" => $j,
						"cost" => $graph[$i][$j]];
					unionSet($set, $iSet, $jSet);
			}
		}

		return $tree;
	}

	function findSet(array &$set, int $index) 
	{
		foreach ($set as $k => $v) {
			if (in_array($index, $v)) {
				return $k;
			}
		}
		return false;
	}

	function unionSet(array &$set, int $i, int $j) 
	{
		$a = $set[$i];
		$b = $set[$j];
		unset($set[$i], $set[$j]);
		$set[] = array_merge($a, $b);
	}

?>

