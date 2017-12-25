<?php

function usedInColumn(array &$grid, int $col, int $num): bool 
{
	return in_array($num, array_column($grid, $col));
}


?>