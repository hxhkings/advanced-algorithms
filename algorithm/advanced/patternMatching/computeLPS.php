<?php

	function ComputeLPS(string $pattern, array &$lps)
	{
		$len = 0;
		$i = 1;
		$M = strlen($pattern);

		$lps[0] = 0;

		while ($i < $M) {
			if ($pattern[$i] == $pattern[$len]) {
				$len++;
				$lps[$i] = $len;
				$i++;
			} else {
				if ($len != 0) {
					$len = $lps[$len - 1];
				} else {
					$lps[$i] = 0;
					$i++;
				}
			}
		}
	}

?>