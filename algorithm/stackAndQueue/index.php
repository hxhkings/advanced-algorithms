<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>


<?php

echo "<h1>Stacks and Queues</h1>";
echo "<h2>Using Simple Stack</h2>";

require_once('books.php');

try{

	$programmingBooks = new Books(10);
	$programmingBooks->push("Introduction to PHP7");
	$programmingBooks->push("Mastering Javascript");
	$programmingBooks->push("MySQL Workbench tutorial");
	echo $programmingBooks->pop() . "<br>";
	echo $programmingBooks->pop() . "<br>";
} 
catch(Exception $e){
	echo $e->getMessage();
}

echo "<h2>Using LinkedList</h2>";

require_once('booklist.php');

try{

	$programmingBooks = new BookList();
	$programmingBooks->push("Introduction to PHP7");
	$programmingBooks->push("Mastering Javascript");
	$programmingBooks->push("MySQL Workbench tutorial");
	echo $programmingBooks->pop() . "<br>";
	echo $programmingBooks->pop() . "<br>";
	echo $programmingBooks->top() . "<br>";
}
catch(Exception $e){
	echo $e->getMessage();
}
	echo "<h2>Using SPL Stack Class</h2>";
	$programmingBooks = new SplStack();
	$programmingBooks->push("Introduction to PHP7");
	$programmingBooks->push("Mastering Javascript");
	$programmingBooks->push("MySQL Workbench tutorial");
	echo $programmingBooks->pop() . "<br>";
	echo $programmingBooks->top() . "<br>";

	echo "<h2>Using Simple Queue</h2>";

	require_once('agentQueue.php');

	try{
		$agents = new AgentQueue(10);
		$agents->enqueue("Fred");
		$agents->enqueue("Keith");
		$agents->enqueue("Aidiyan");
		$agents->enqueue('Mikhael');
		$agents->enqueue("John");
		echo $agents->dequeue() . "<br>";
		echo $agents->dequeue() . "<br>";
		echo $agents->peek() . "<br>";
	}
	catch(Exception $e){
		echo $e->getMessage();
	}

	echo "<h2>Using LinkedList</h2>";

	require_once('agentQueue.php');

	try{
		$agents = new AgentQueue(10);
		$agents->enqueue("Fred");
		$agents->enqueue("Keith");
		$agents->enqueue("Aidiyan");
		$agents->enqueue('Mikhael');
		$agents->enqueue("John");
		echo $agents->dequeue() . "<br>";
		echo $agents->dequeue() . "<br>";
		echo $agents->peek() . "<br>";
	}
	catch(Exception $e){
		echo $e->getMessage();
	}

	echo "<h2>Using SPL Queue Class</h2>";

	$agents = new SplQueue();
		$agents->enqueue("Fred");
		$agents->enqueue("Keith");
		$agents->enqueue("Aidiyan");
		$agents->enqueue('Mikhael');
		$agents->enqueue("John");
		echo $agents->dequeue() . "<br>";
		echo $agents->dequeue() . "<br>";
		echo $agents->bottom() . "<br>";

/*class foo {
    public $value = 42;

    public function &getValue() {
        return $this->value;
    }
}

$obj = new foo;
$myValue = &$obj->getValue(); // $myValue is a reference to $obj->value, which is 42.
$obj->value = 2;
echo $myValue;                // prints the new value of $obj->value, i.e. 2. */

require_once('linkedListQueue.php');

echo "<h2>Using LinkedList with Priority</h2>";

	require_once('agentQueueList.php');

	try{
		$agents = new AgentQueueList(10);
		$agents->enqueue("Fred", 1);
		$agents->enqueue("John", 2);
		$agents->enqueue("Keith", 3);
		$agents->enqueue("Aidiyan", 4);
		$agents->enqueue('Mikhael', 2);
		$agents->display();
		echo $agents->dequeue() . "<br>";
		echo $agents->dequeue() . "<br>";
		
	}
	catch(Exception $e){
		echo $e->getMessage();
	}

	echo "<h2>Using SplPriorityQueue</h2>";

	class MyPQ extends SplPriorityQueue
	{
		public function compare($priority1, $priority2)
		{
			return $priority1 <=> $priority2;
		}
	}

	$agents = new MyPQ();
		$agents->insert("Fred", 1);
		$agents->insert("John", 2);
		$agents->insert("Keith", 3);
		$agents->insert("Aidiyan", 4);
		$agents->insert('Mikhael', 2);

		// mode of extraction
		$agents->setExtractFlags(MyPQ::EXTR_BOTH);

		// Go to Top
		$agents->top();

		while ($agents->valid()){
			$current = $agents->current();
			echo $current['data'] . "<br>";
			$agents->next();
		}

		echo "<h2>Using Double-ended Queue</h2>";

		require_once('dequeue.php');

		try{
			$agents = new Dequeue(10);
			$agents->enqueueAtFront('Fred');
			$agents->enqueueAtFront('John');
			$agents->enqueueAtBack('Keith');
			$agents->enqueueAtBack('Aidiyan');
			$agents->enqueueAtFront('Mikhael');
			echo $agents->dequeueFromBack() . "<br>";
			echo $agents->dequeueFromFront() . "<br>";
			echo $agents->peekFront() . "<br>";
		} 
		catch(Exception $e){
			echo $e->getMessage();
		}

?>

</body>
</html>