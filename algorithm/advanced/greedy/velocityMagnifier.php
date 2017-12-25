<?php

function velocityMagnifier(array $jobs)
{
	$n = count($jobs);

	usort($jobs, function($opt1, $opt2) {
		return $opt1['velocity'] < $opt2['velocity'];
	});

	$dMax = max(array_column($jobs, "deadline"));

	$slot = array_fill(1, $dMax, -1);
	$filledTimeSlot = 0;

	for ($i = 0; $i < $n; $i++) {
		$k = min($dMax, $jobs[$i]['deadline']);
		while ($k >= 1) {
			if ($slot[$k] == -1) {
				$slot[$k] = $i;
				$filledTimeSlot++;
				break;
			}
			$k--;
		}

		if ($filledTimeSlot == $dMax) {
			break;
		}
	}

	echo("Stories to Complete: ");
	for ($i = 1; $i <= $dMax; $i++) {
		echo $jobs[$slot[$i]]['id'];

		if ($i < $dMax) {
			echo "\t";
		}
	}

	$maxVelocity = 0;
	for ($i = 1; $i <= $dMax; $i++) {
		$maxVelocity += $jobs[$slot[$i]]['velocity'];
	}
	echo "<br>Max Velocity: " . $maxVelocity;
}

?>