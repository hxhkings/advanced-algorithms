<?php

	function printSequence($grid, $s1, $s2, $j, $i)
	{
		$sq1 = [];
		$sq2 = [];
		$sq3 = [];

		do {

			$t = $grid[$i - 1][$j];
			$d = $grid[$i - 1][$j - 1];
			$l = $grid[$i][$j - 1];
			$max = max($t, $d, $l);

			switch ($max) {
				case $d:
				$j--;
				$i--;
					array_push($sq1, $s1[$j]);
					array_push($sq2, $s2[$i]);
					if ($s1[$j] == $s2[$i])
						array_push($sq3, "|");
					else 
						array_push($sq3, " ");
					break;

				case $t:
				$i--;
					array_push($sq1, GC);
					array_push($sq2, $s2[$i]);
					array_push($sq3, " ");
					break;

				case $l:
				$j--;
					array_push($sq1, $s1[$j]);
					array_push($sq2, GC);
					array_push($sq3, " ");
					break;

			}
		} while ($i > 0 && $j > 0);

		echo implode("", array_reverse($sq1)) . "<br>";
		echo implode("", array_reverse($sq3)) . "<br>";
		echo implode("", array_reverse($sq2)) . "<br>";
	}


?>