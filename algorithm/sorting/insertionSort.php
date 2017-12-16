<?php

	function insertionSort(array &$arr)
	{
		$len = count($arr);
		$count = 0;
		for ($i = 1; $i < $len; $i++) {
			$key = $arr[$i];
			$j = $i - 1;
			while ($j >= 0 && $arr[$j] > $key) {
				$count++;
				$arr[$j + 1] = $arr[$j];
				$j--;
			}
			$arr[$j + 1] = $key;
		}
		echo $count . "<br>";
	}


?>