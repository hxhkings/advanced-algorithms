<?php

function usedInBox(array &$grid, int $boxStartRow, int $boxStartCol, int $num): bool 
{
	for ($row = 0; $row < 3; $row++)
		for ($col = 0; $col < 3; $col++)
			if ($grid[$row + $boxStartRow][$col + $boxStartCol] == $num)
				return true;
			return false;

}

?>