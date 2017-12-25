<?php

function usedInRow(array &$grid, int $row, int $num): bool 
{
	return in_array($num, $grid[$row]);
}


?>