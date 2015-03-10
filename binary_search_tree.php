<?php
	class node{
		public $left;
		public $num;
		public $right;
		public function __construct($num){
			$this->num = $num;
		}
	}

	class binaryTree{
		public $root;

		public function add($num){
			if($this->root == NULL)
				$this->root = new Node($num);
			else{
				$loc = $this->root;
				while($loc != NULL){
					if($num < $loc->num && $loc->left != NULL){
						$loc = $loc->left;
					}
					elseif($num < $loc->num && $loc->left == NULL){
						$loc->left = new Node($num);
						break;
					}
					if($num >= $loc->num && $loc->right != NULL){
						$loc = $loc->right;
					}
					elseif($num >= $loc->num && $loc->right == NULL){
						$loc->right = new Node($num);
						break;
					}
				}
			}
			return $this;
		}
	}

	// function toArray($root, $array){
	// 	if($root->left != NULL)
	// 		toArray($root->left, $array);
	// 	array_push($array, $root);
	// 	if($root->right != NULL)
	// 		toArray($root->right, $array);
	// 	return $array;
	// }
	function toArray($root, $array){
		if($root->left != NULL)
			$array = toArray($root->left, $array);
		$array[]= $root->num;
		if($root->right != NULL)
			$array = toArray($root->right, $array);
		return $array;
	}
	function printArray($array){
		foreach($array as $value)
			echo $value . "<br>";
	}
	// function printTree($root){
	// 	if($root->left != NULL)
	// 		printTree($root->left);
	// 	echo $root->num . "<br>";
	// 	if($root->right != NULL)
	// 		printTree($root->right);
	// }

$tree = new binaryTree();
for($i=0; $i<10000; $i++)
	$tree->add(rand(0,10000));
// var_dump($tree);
$array = array();
$time = microtime(true);
$array = toArray($tree->root, $array);
echo microtime(true) - $time . " seconds.<br>";
printArray($array);
?>