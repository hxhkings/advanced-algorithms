<?php

define("N", 9);
define("UNASSIGNED", 0);

require_once('findUnassignedLocation.php');
require_once('usedInRow.php');
require_once('usedInColumn.php');
require_once('usedInBox.php');
require_once('isSafe.php');
require_once('solveSudoku.php');
require_once('printGrid.php');

echo "<h2>Sudoku Puzzle - BackTracking</h2>";

$grid = [
	[0, 0, 7, 0, 3, 0, 8, 0, 0],
	[0, 0, 0, 2, 0, 5, 0, 0, 0],
	[4, 0, 0, 9, 0, 6, 0, 0, 1],
	[0, 4, 3, 0, 0, 0, 2, 1, 0],
	[1, 0, 0, 0, 0, 0, 0, 0, 5],
	[0, 5, 8, 0, 0, 0, 6, 7, 0],
	[5, 0, 0, 1, 0, 8, 0, 0, 9],
	[0, 0, 0, 5, 0, 3, 0, 0, 0],
	[0, 0, 2, 0, 9, 0, 5, 0, 0]

];

if (solveSudoku($grid) == true)
	printGrid($grid);
else 
	echo "No solution exists";

?>