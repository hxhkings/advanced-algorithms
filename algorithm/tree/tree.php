<?php 
	
	class Tree
	{
		public $root = NULL;
		public function __construct(TreeNode $node)
		{
			$this->root = $node;
		}

		public function traverse(TreeNode $node, int $level = 0)
		{
			if ($node){
				echo str_repeat("-", $level);
				echo $node->data . "<br>";

				foreach ($node->children as $childNode){
					$this->traverse($childNode, $level + 1);
				}
			}
		}
	}



?>