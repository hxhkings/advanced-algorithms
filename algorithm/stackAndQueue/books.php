<?php

	require_once('stackInterface.php');

	class Books implements Stack
	{
		private $limit;
		private $stack;

		public function __construct(int $limit = 20)
		{
			$this->limit = $limit;
			$this->stack = [];
		}

		public function pop(): string 
		{
			if($this->isEmpty()){
				throw new UnderflowException('Stack is Empty');
			} else {
				return array_pop($this->stack);
			}
		}

		public function push(string $newItem)
		{
			if(count($this->stack) < $this->limit){
				array_push($this->stack, $newItem);
			} else {
				throw new OverflowException('Stack is Full');
			}
		}

		public function top(): string 
		{
			return end($this->stack);
		}

		public function isEmpty(): bool 
		{
			return empty($this->stack);
		}
	}

	

?>