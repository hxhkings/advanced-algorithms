<?php

	function fibonacciMemoized(int $n): int 
	{
		global $fibCache;
		global $count;
		$count++;
		if ($n == 0 || $n == 1) {
			return 1;
		} else {

			if (isset($fibCache[$n - 1])) {
				$tmp = $fibCache[$n - 1];
			} else {
				$tmp = fibonacciMemoized($n - 1);
				$fibCache[$n - 1] = $tmp;
			}

			if (isset($fibCache[$n - 2])) {
				$tmp1 = $fibCache[$n - 2];
			} else {
				$tmp1 = fibonacciMemoized($n - 2);
				$fibCache[$n - 2] = $tmp1;
			}

			return $tmp + $tmp1;
		}
	}


?>