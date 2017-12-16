<?php



	class StackDFSTree
	{
		public $root = NULL;
		

		public function __construct(TreeNode $node)
		{
			$this->root = $node;
			
		}

		public function DFS(TreeNode $node): SplQueue
		{
			$stack = new SplStack;
			$visited = new SplQueue;

			$stack->push($node);

			while (!$stack->isEmpty()) {
				$current = $stack->pop();
				$visited->enqueue($current);
				$current->children = array_reverse($current->children);
				foreach ($current->children as $child) {
					$stack->push($child);
				}
			}
			return $visited;
		}
	}

?>