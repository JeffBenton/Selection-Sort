<?php
function radix_sort($array){
	$digits = 0;
	foreach($array as $num){
		if($num > $digits)
			$digits = $num;
	}
	for($i=0; $i<strlen((string)$digits); $i++){
		$stack = array(
			0 => array(),
			1 => array(),
			2 => array(),
			3 => array(),
			4 => array(),
			5 => array(),
			6 => array(),
			7 => array(),
			8 => array(),
			9 => array()
			);
		for($j=count($array)-1; $j>=0; $j--){
			$val = (string)array_pop($array);
			if(strlen($val)-($i+1) < 0)
				$stack[0][] = $val;
			else
				$stack[$val[strlen($val)-($i+1)]][] = $val;
		}
		for($j=0; $j<count($stack); $j++){
			if(count($stack[$j]) > 0){
				while(count($stack[$j]) > 0){
					$array[] = array_pop($stack[$j]);
				}
			}
		}
	}
	for($i=0; $i<count($array); $i++){
		$array[$i] = intval($array[$i]);
	}
	return $array;
}
//can't handle negative numbers.
$array = [];
for($i=0; $i<10000; $i++)
	$array[] = rand(0,10000);
$time = microtime(true);
$array = radix_sort($array);
echo microtime(true) - $time;
var_dump($array);


?>