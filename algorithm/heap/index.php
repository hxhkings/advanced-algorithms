<?php

	echo "<h2>Min Heap</h2>";
	require_once('minHeap.php');

	$numbers = [37, 44, 34, 65, 26, 86, 129, 83, 9];

	echo "Initial array <br>" . implode("\t", $numbers) . "<br><br>";
	$heap = new MinHeap(count($numbers));
	$heap->create($numbers);
	echo "Constructed Heap <br>";
	$heap->display();
	echo "Min Extract: " . $heap->extractMin() . "<br>";
	$heap->display();
	echo "Min Extract: " . $heap->extractMin() . "<br>";
	$heap->display();
	echo "Min Extract: " . $heap->extractMin() . "<br>";
	$heap->display();
	echo "Min Extract: " . $heap->extractMin() . "<br>";
	$heap->display();
	echo "Min Extract: " . $heap->extractMin() . "<br>";
	$heap->display();
	echo "Min Extract: " . $heap->extractMin() . "<br>";
	$heap->display();

	echo "<h2>Max Heap w/ Priority Queue</h2>";
	require_once('priorityQ.php');

	$pq = new PriorityQ(count($numbers));

	foreach ($numbers as $number) {
		$pq->enqueue($number);
	}

	echo "Constructed Heap <br>";
	$pq->display();
	echo "Dequeued: " . $pq->dequeue() . "<br>";
	$pq->display();
	echo "Dequeued: " . $pq->dequeue() . "<br>";
	$pq->display();
	echo "Dequeued: " . $pq->dequeue() . "<br>";
	$pq->display();
	echo "Dequeued: " . $pq->dequeue() . "<br>";
	$pq->display();
	echo "Dequeued: " . $pq->dequeue() . "<br>";
	$pq->display();
	echo "Dequeued: " . $pq->dequeue() . "<br>";
	$pq->display();

	echo "<h2>Heap Sort</h2>";
	require_once('heapSort.php');

	$numbers = [37, 44, 34, 65, 26, 86, 129, 83, 9];

	heapSort($numbers);
	echo implode("\t", $numbers);


	echo "<h2>SplMaxHeap</h2>";

	$numbers = [37, 44, 34, 65, 26, 86, 129, 83, 9];

	$heap = new SplMaxHeap;
	foreach ($numbers as $number) {
		$heap->insert($number);
	}

	while (!$heap->isEmpty()) {
		echo $heap->extract() . "\t";
	}

?>