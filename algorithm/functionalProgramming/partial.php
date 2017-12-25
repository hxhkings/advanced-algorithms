<?php
	
	function partial($funcName, ...$args) {
		return function(...$innerArgs) use ($funcName, $args) {
			$allArgs = array_merge($args, $innerArgs);
			return call_user_func_array($funcName, $allArgs);
		};
	}
?>