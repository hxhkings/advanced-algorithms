<?php



function sum($a, $b, $c) {
	return $a + $b + $c;
}

function currySum($a) {
	return function ($b) use ($a) {
		return function ($c) use ($a, $b) {
			return $a + $b + $c;
		};
	};
}