<?php

	function fibonacci(int $n): int 
	{
		global $count;
		$count++;
		if ($n == 0) {
			return 1;
		} elseif ($n == 1) {
			return 1;
		} else {
			return fibonacci($n - 1) + fibonacci($n - 2);
		}
	}

?>