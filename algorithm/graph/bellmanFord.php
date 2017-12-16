<?php 

	function BellmanFord(array $graph, int $source): array 
	{
		$dist = [];
		$len = count($graph);

		foreach ($graph as $v => $adj) {
			$dist[$v] = PHP_INT_MAX;
		}

		$dist[$source] = 0;

		for ($k = 0; $k < $len - 1; $k++) {
			for ($i = 0; $i < $len; $i++) {
				for ($j = 0; $j < $len; $j++) {
					if ($dist[$i] > $dist[$j] + $graph[$j][$i]) {
						$dist[$i] = $dist[$j] + $graph[$j][$i];
					}
				}
			}
		}

		for ($i = 0; $i < $len; $i++) {
			for ($j = 0; $j < $len; $j++) {
				if ($dist[$i] > $dist[$j] + $graph[$j][$i]) {
					echo 'The graph contains a negative-weight cycle!';
					return [];
				}
			}
		}
		return $dist;
	} 



?>