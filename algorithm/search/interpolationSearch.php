<?php 

	
	function interpolationSearch(array $arr, int $key): int 
	{
		$low = 0;
		$high = count($arr) - 1;

		while ($arr[$high] != $arr[$low] && $key >= $arr[$low] && $key <= $arr[$high]) {
			$mid = intval($low + (($key - $arr[$low]) * ($high - $low) / ($arr[$high] - $arr[$low])));

			if ($arr[$mid] < $key)
				$low = $mid + 1;
			elseif ($key < $arr[$mid])
				$high = $mid - 1;
			else
				return $mid;
		}

		if ($key == $arr[$low])
			return $low;
		else 
			return -1;
	}

?>