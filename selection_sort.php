<?php
// function selection_sort($array){
// 	for($i=0; $i<count($array)-1; $i++){
// 		$min = $i;
// 		for($j=$i+1; $j<count($array); $j++){
// 			if($array[$j] < $array[$min]){
// 				$min = $j;
// 			}
// 		}
// 		$temp = $array[$i];
// 		$array[$i] = $array[$min];
// 		$array[$min] = $temp;
// 	}
// 	return $array;
// }
// function selection_sort_max($array){
// 	for($i=0; $i<count($array); $i++){
// 		$max = count($array) - 1 - $i;
// 		for($j=$i+1; $j<=count($array); $j++){
// 			if($array[count($array)-$j] > $array[$max]){
//  				$max = count($array)-$j;
//  			}
// 		}

// 		$temp = $array[count($array)-1-$i];
// 		$array[count($array)-1-$i] = $array[$max];
// 		$array[$max] = $temp;
// 	}
// 	return $array;
// }

function selection_sort_double($array){
	set_time_limit(120);
	for($i=0; $i <= (count($array)-1-$i); $i++){
		$minIndex = $i;
		$maxIndex = (count($array)-1-$i);
		for($j=$i; $j<=(count($array)-1-$i); $j++){
			if($array[$j] <= $array[$minIndex])
				$minIndex = $j;
			if($array[$j] >= $array[$maxIndex])
					$maxIndex = $j;
		}
		$array = swap($array, $i, $minIndex);
		if($i == $maxIndex)
			$maxIndex = $minIndex;
		$array = swap($array, (count($array)-1-$i), $maxIndex);
	}
	return $array;
}

function swap($array, $x, $y){
	$temp = $array[$x];
	$array[$x] = $array[$y];
	$array[$y] = $temp;
	return $array;
}
//79.66 seconds for 10000 items in the array.

// $test = array(4,3,1,2);
// $test = array();
// for($i=0; $i<10000; $i++){
// 	$test[] = rand(0,10000);
// }
// $time = microtime(true);
// $test = selection_sort_double($test);
// var_dump($test);
// $afterTime = microtime(true);
// echo $afterTime - $time;
?>
<script>

var selection_sort_double = function(array){
	for(i=0; i<=(array.length-1-i); i++){
		var minIndex = i;
		var maxIndex = (array.length-1-i);
		for(j=i; j<=(array.length-1-i); j++){
			if(array[j] <= array[minIndex])
				minIndex = j;
			if(array[j] >= array[maxIndex])
				maxIndex = j;
		}
		array = swap(array, i, minIndex);
		if(i===maxIndex)
			maxIndex = minIndex;
		array = swap(array, (array.length-i-1), maxIndex);
	}
	return array;
}
var swap = function(array, x, y){
	var temp = array[x];
	array[x] = array[y];
	array[y] = temp;
	return array;
}

var test = [];
for(i=0; i<100; i++)
	test.push(Math.floor(Math.random()*10001));
test = selection_sort_double(test);
console.log(test);

</script>