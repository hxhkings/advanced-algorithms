<?php 

	function binarySearch(array $numbers, int $needle): bool 
	{
		$low = 0;
		$high = count($numbers) - 1;

		while ($low <= $high) {
			$mid = (int)(($high + $low) / 2);
			if ($numbers[$mid] > $needle) {
				$high = $mid - 1;
			} elseif ($numbers[$mid] < $needle) {
				$low = $mid + 1;
			} else {
				return TRUE;
			}

		}
		return FALSE;
	}

?>