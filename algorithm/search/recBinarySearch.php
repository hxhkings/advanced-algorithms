<?php 

	function recBinarySearch(array $numbers, int $needle, int $low, int $high): bool 
	{
		if ($high < $low)
			return FALSE;

		$mid = (int)(($low + $high) / 2);

		if ($numbers[$mid] > $needle) {
			return recBinarySearch($numbers, $needle, $low, $mid - 1);
		} elseif ($numbers[$mid] < $needle) {
			return recBinarySearch($numbers, $needle, $mid + 1, $high);
		} else {
			return TRUE;
		}
	}


?>