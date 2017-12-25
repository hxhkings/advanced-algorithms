<?php

	echo "<h2>Huffman using SPL priority queue</h2>";

	require_once('huffmanEncode.php');

	$txt = 'PHP 7 Data structures and Algorithms';
	$symbols = array_count_values(str_split($txt));
	$codes = huffmanEncode($symbols);
?>
<table>
<?php
	echo "<tr>";
	echo "<th>Symbol</th><th>Weight</th><th>Huffman Code</th>";
	echo "</tr>";
?>

<?php
	foreach ($codes as $sym => $code) {
		echo "<tr>";
		echo "<td>$sym</td><td>$symbols[$sym]</td><td>$code</td>";
		echo "</tr>";
	}

?>
</table>

<?php
	
	echo "<h2>Huffman: Job-scheduling Problem</h2>";

	require_once('velocityMagnifier.php');

	$jobs = [
		["id" => "S1", "deadline" => 2, "velocity" => 95],
		["id" => "S2", "deadline" => 1, "velocity" => 32],
		["id" => "S3", "deadline" => 2, "velocity" => 47],
		["id" => "S4", "deadline" => 1, "velocity" => 42],
		["id" => "S5", "deadline" => 3, "velocity" => 28],
		["id" => "S6", "deadline" => 4, "velocity" => 64],

	];

	velocityMagnifier($jobs);

?>