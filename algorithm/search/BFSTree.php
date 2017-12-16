<?php 

	class BFSTree
	{
		public $root = NULL;

		public function __construct(TreeNode $node)
		{
			$this->root = $node;
		}

		public function BFS(TreeNode $node): SplQueue
		{
			$queue = new SplQueue;
			$visited = new SplQueue;

			$queue->enqueue($node);

			while (!$queue->isEmpty()) {
				$current = $queue->dequeue();
				$visited->enqueue($current);

				foreach ($current->children as $child) {
					$queue->enqueue($child);
				}
			}
			return $visited;
		}
	}


?>