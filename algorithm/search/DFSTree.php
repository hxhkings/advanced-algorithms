<?php 
	
	class DFSTree
	{
		public $root = NULL;
		public $visited;

		public function __construct(TreeNode $node)
		{
			$this->root = $node;
			$this->visited = new SplQueue;
		}

		public function DFS(TreeNode $node)
		{
			$this->visited->enqueue($node);

			if ($node->children) {
				foreach ($node->children as $child) {
					$this->DFS($child);
				}
			}
		}
	}

?>