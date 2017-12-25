<?php

function printGrid(array $grid)
{
	echo "<table>";
	foreach ($grid as $row) {
		echo "<tr>";
		
		foreach ($row as $col) {
			echo "<td>| $col |</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}


?>