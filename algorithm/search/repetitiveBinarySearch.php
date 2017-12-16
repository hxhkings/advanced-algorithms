<?php 

	function repetitiveBinarySearch(array $numbers, int $needle): int 
	{
		$low = 0;
		$high = count($numbers) - 1;
		$firstOccurence = -1;

		while ($low <= $high) {
			$mid = (int)(($low + $high) / 2);

			if ($numbers[$mid] === $needle) {
				$firstOccurence = $mid;
				$high = $mid - 1;
			} elseif ($numbers[$mid] > $needle) {
				$high = $mid - 1;
			} else {
				$low = $mid + 1;
			}
		}
		return $firstOccurence;
	}


?>