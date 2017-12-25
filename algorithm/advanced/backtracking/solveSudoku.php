<?php

function solveSudoku(array &$grid): bool 
{
	$row = $col = 0;

	if (!findUnassignedLocation($grid, $row, $col))
		return true; // success! no empty space

	for ($num = 1; $num <= N; $num++) {
		if (isSafe($grid, $row, $col, $num)) {
			$grid[$row][$col] = $num; // make assignment

			if (solveSudoku($grid))
				return true; // return, if success

			$grid[$row][$col] = UNASSIGNED; // failure
		}
	}
	return false; // triggers backtracking
}


?>