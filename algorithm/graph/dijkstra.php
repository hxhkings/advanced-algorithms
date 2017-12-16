<?php 

	function Dijkstra(array $graph, string $source, string $target): array 
	{
		$dist = [];
		$pred = [];
		$Queue = new SplPriorityQueue();

		foreach ($graph as $v => $adj) {
			$dist[$v] = PHP_INT_MAX;
			$pred[$v] = NULL;
			$Queue->insert($v, min($adj));
			echo $v . " => " . min($adj) . " => " . json_encode($adj) . "<br>";
		}

		$dist[$source] = 0;

		while (!$Queue->isEmpty()) {
			$u = $Queue->extract();
			echo $u . "<br>";
			if (!empty($graph[$u])) {
				foreach ($graph[$u] as $v => $cost) {
					if ($dist[$u] + $cost < $dist[$v]) {
						$dist[$v] = $dist[$u] + $cost;
						$pred[$v] = $u;
					}
				}
			}
		}

		$S = new SplStack();
		$u = $target;
		$distance = 0;

		while (isset($pred[$u]) && $pred[$u]) {
			$S->push($u);
			$distance += $graph[$u][$pred[$u]];
			$u = $pred[$u];
		}

		if ($S->isEmpty()) {
			return ["distance" => 0, "path" => $S];
		} else {
			$S->push($source);
			return ["distance" => $distance, "path" => $S];
		}
	}


?>