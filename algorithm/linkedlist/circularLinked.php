<?php

	class ListNode
	{
		public $data = NULL;
		public $next = NULL;

		public function __construct(string $data = NULL)
		{
			$this->data = $data;
		}
	}

	class CircularLinkedList
	{
		private $_firstNode = NULL;
		private $_totalNode = NULL;

		public function insertAtEnd(string $data = NULL)
		{
			$newNode = new ListNode($data);

			if($this->_firstNode === NULL){

				$this->_firstNode = &$newNode;
			} else {
				$currentNode = $this->_firstNode;

				while($currentNode->next !== $this->_firstNode){
					$currentNode = $currentNode->next;
				}

				$currentNode->next = $newNode;
			}

			$newNode->next = $this->_firstNode;
			$this->_totalNode++;
			return TRUE;
		}

		public function display()
		{
			echo "Total book titles: " . $this->_totalNode . "<br>".

			$currentNode = $this->_firstNode;

			while($currentNode->next !== $this->_firstNode){
				echo $currentNode->data . "<br>";
				$currentNode = $currentNode->next;
			}

			if($currentNode){
				echo $currentNode->data . "<br>";
			}
		}
	}





?>