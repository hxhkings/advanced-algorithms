<?php 

function findUnassignedLocation(array &$grid, int &$row, int &$col): bool 
{
	for ($row = 0; $row < N; $row++)
		for ($col = 0; $col < N; $col++)
			if ($grid[$row][$col] == UNASSIGNED)
				return true;
			return false;
}



?>