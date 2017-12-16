<?php 

	require_once('queueInterface.php');
	require_once('linkedList.php');


class AgentQueueList implements Queue 
{

	private $limit;
	private $queue;

	public function __construct(int $limit = 20)
	{
		$this->limit = $limit;
		$this->queue = new LinkedListQueue();	
	}

	public function dequeue(): string 
	{
		if($this->isEmpty()){
			throw new UnderflowException('Queue is Empty');
		} else {
			$lastItem = $this->peek();
			$this->queue->deleteFirst();
			return $lastItem;
		}
	}

	public function enqueue(string $newItem, int $priority = NULL)
	{
		if ($this->queue->getSize() < $this->limit){
			$this->queue->insert($newItem, $priority);
		} else {
			throw new OverflowException('Queue is full');
		}
	}

	public function peek(): string 
	{
		return $this->queue->getNthNode(1)->data;
	}

	public function isEmpty(): bool
	{
		return $this->queue->getSize() === 0;
	}

	public function display()
	{
		return $this->queue->display();
	}
}



?>