<?php 

	function exponentialSearch(array $arr, int $key): int 
	{
		$size = count($arr);

		if ($size == 0)
			return -1;

		$bound = 1;

		while ($bound < $size && $arr[$bound] < $key) {
			$bound *= 2;
		}
		return recBinarySearch($arr, $key, intval($bound / 2), min($bound, $size));
	}


?>