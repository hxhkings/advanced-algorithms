<?php


	function showFiles(string $dirName, Array &$allFiles = []){

		$files = scandir($dirName);
			print json_encode($files) . "<br>";
		foreach ($files as $key => $value) {
			$path = realpath($dirName . DIRECTORY_SEPARATOR . $value);
			print $dirName . DIRECTORY_SEPARATOR . $value ."<br>";
			print $path ."<br>";
			if (!is_dir($path)){
				$allFiles[] = $path;
			} else if ($value != "." && $value != ".."){
				showFiles($path, $allFiles);
				$allFiles[] = $path;
			}
		}
		return;

	}
	
	$files = [];
	showFiles('.', $files);

	foreach($files as $file){
		echo $file . "<br>";
	}



?>