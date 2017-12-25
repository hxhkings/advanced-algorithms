<?php

	function pearsonScore(array $reviews, string $person1, string $person2): float {

		$commonItems = array();

		foreach ($reviews[$person1] as $restaurant1 => $rating) {
			foreach ($reviews[$person2] as $restaurant2 => $rating) {
				if ($restaurant1 == $restaurant2) {
					$commonItems[$restaurant1] = 1;
				}
			}
		}

		$n = count($commonItems);

		if ($n == 0)
			return 0.0;
		$sum1 = 0;
		$sum2 = 0;
		$sqrSum1 = 0;
		$sqrSum2 = 0;
		$pSum = 0;

		foreach ($commonItems as $restaurant => $common) {
			$sum1 += $reviews[$person1][$restaurant];
			$sum2 += $reviews[$person2][$restaurant];
			$sqrSum1 += $reviews[$person1][$restaurant] ** 2;
			$sqrSum2 += $reviews[$person2][$restaurant] ** 2;
			$pSum += $reviews[$person1][$restaurant] * 
					 $reviews[$person2][$restaurant];	
		}

		$num = $pSum - (($sum1 * $sum2) / $n);
		$den = sqrt(($sqrSum1 - (($sum1 ** 2) / $n)) * 
					($sqrSum2 - (($sum2 ** 2) / $n)));

		if ($den == 0) {
			$pearsonCorrelation = 0;
		} else {
			$pearsonCorrelation = $num / $den;
		}

		return (float) $pearsonCorrelation;
	}


?>