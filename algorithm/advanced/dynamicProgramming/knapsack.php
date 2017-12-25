<?php

	function knapSack(int $maxWeight, array $weights, array $values, int $n)
	{
		$DP = [];

		for ($i = 0; $i <= $n; $i++) {
			for ($w = 0; $w <= $maxWeight; $w++) {
				if ($i == 0 || $w == 0)
					$DP[$i][$w] = 0;
				elseif ($weights[$i - 1] <= $w)
				 $DP[$i][$w] = max($values[$i - 1] +
				 $DP[$i - 1][$w - $weights[$i - 1]],
				 $DP[$i - 1][$w]);
				else 
					$DP[$i][$w] = $DP[$i - 1][$w];
			}
		}
		return $DP[$n][$maxWeight];
	}

?>