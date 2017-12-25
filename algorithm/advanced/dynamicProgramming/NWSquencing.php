<?php


function NWSquencing(string $s1, string $s2)
{
	$grid = [];
	$M = strlen($s1);
	$N = strlen($s2);

	for ($i = 0; $i <= $N; $i++) {
		$grid[$i] = [];
		for ($j = 0; $j <= $M; $j++) {
			$grid[$i][$j] = null;
		}
	}
	$grid[0][0] = 0;

	for ($i = 1; $i <= $M; $i++) {
		$grid[0][$i] = -1 * $i;
	}

	for ($i = 1; $i <= $N; $i++) {
		$grid[$i][0] = -1 *$i;
	}

	for ($i = 1; $i <= $N; $i++) {
		for ($j = 1; $j <= $M; $j++) {
			$grid[$i][$j] = max(
				$grid[$i - 1][$j - 1] + ($s2[$i - 1] == $s1[$j - 1] ? SP : MS),
				$grid[$i - 1][$j] + GP, $grid[$i][$j - 1] + GP
			);
		}
	}

	printSequence($grid, $s1, $s2, $M, $N);
}


?>