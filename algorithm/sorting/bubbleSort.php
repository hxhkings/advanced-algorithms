<?php 
	
	function bubbleSort(array $arr): array
	{
		$len = count($arr);
		$count = 0;
		$bound = $len - 1;
		for ($i = 0; $i < $len; $i++) {
			$swapped = FALSE;
			$newbound = 0;
			for ($j = 0; $j < $bound; $j++) {
				$count++;
				if ($arr[$j] > $arr[$j + 1]){
					$tmp = $arr[$j + 1];
					$arr[$j + 1] = $arr[$j];
					$arr[$j] = $tmp;
					$swapped = TRUE;
					$newbound = $j;
				}
				
			}
			$bound = $newbound;
			if (!$swapped) break;
		}
		echo $count . "<br>";
		return $arr;
	}

?>