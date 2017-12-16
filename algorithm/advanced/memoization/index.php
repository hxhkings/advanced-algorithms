<?php 
$startMem = memory_get_usage();
$startTime = microtime();
$count = 0;

require_once('fibonacci.php');
echo "<h2>Fibonacci</h2>";
echo fibonacci(30) . "<br>";
echo "Function called: " . $count . "<br>";
$endTime = microtime();
$endMem = memory_get_usage();
echo "time=" . ($endTime - $startTime) . "<br>";
echo "memory=" . ($endMem - $startMem) . "<br>";



require_once('fibonacciMemoized.php');

echo "<h2>Fibonacci w/ Memoization</h2>";
$startMem = memory_get_usage();
$startTime = microtime();
$fibCache = [];
$count = 0;

echo fibonacciMemoized(30) . "<br>";
echo "Function called: " . $count . "<br>";

$endTime = microtime();
$endMem = memory_get_usage();
echo "time=" . ($endTime - $startTime) . "<br>";
echo "memory=" . ($endMem - $startMem) . "<br>";
echo json_encode($fibCache) . "<br>";
echo count($fibCache);
?>