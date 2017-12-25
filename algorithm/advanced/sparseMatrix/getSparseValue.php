<?php

	
	function getSparseValue(array $array, int $i, int $j): int {
		if (isset($array[$i][$j]))
			return $array[$i][$j];
		else
			return 0;
	}



?>