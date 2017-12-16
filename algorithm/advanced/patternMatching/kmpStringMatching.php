<?php
	
	require_once('computeLPS.php');
	function KMPStringMatching(string $str, string $pattern): array 
	{
		$matches = [];
		$M = strlen($pattern);
		$N = strlen($str);
		$i = $j = 0;
		$lps = [];

		ComputeLPS($pattern, $lps);

		while ($i < $N) {
			if ($pattern[$j] == $str[$i]) {
				$j++;
				$i++;
			}

			if ($j == $M) {
				array_push($matches, $i - $j);
				$j = $lps[$j - 1];
			} elseif ($i < $N && $pattern[$j] != $str[$i]) {
				if ($j != 0)
					$j = $lps[$j - 1];
				else
					$i = $i + 1;
			}
		}
		return $matches;
	}


?>