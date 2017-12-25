<?php

function isSafe(array $grid, int $row, int $col, int $num): bool
{
	return !usedInRow($grid, $row, $num) &&
		   !usedInColumn($grid, $col, $num) &&
		   !usedInBox($grid, $row - $row % 3, $col - $col % 3, $num);
}

?>