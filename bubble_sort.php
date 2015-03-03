<?php
function bubble_sort($array){
	set_time_limit(120);
	for($i=0; $i<count($array); $i++){
		for($j=0; $j<count($array)-1-$i; $j++){
			if($array[$j] > $array[$j+1]){
				$temp = $array[$j];
				$array[$j] = $array[$j+1];
				$array[$j+1] = $temp;
			}
		}
	}
	return $array;
}
// //115.17 seconds to sort a 10000 item array.
// $test = [];
// for($i=0; $i<10000; $i++)
// 	$test[] = rand(0,10000);
// $time = microtime(true);
// $test = bubble_sort($test);
// echo microtime(true) - $time;
// // var_dump($test);
?>

<script>
var bubble_sort = function(array){
	for(i=0; i<array.length; i++){
		for(j=0; j<array.length-1-i; j++){
			if(array[j] > array[j+1]){
				var temp = array[j];
				array[j] = array[j+1];
				array[j+1] = temp;
			}
		}
	}
	return array;
}
// 313 milliseconds to sory a 10000 item array.
var test = [];
for(i=0; i<10000; i++)
	test.push(Math.floor(Math.random()*10001));
var b = new Date().getTime();
test = bubble_sort(test);
var a = new Date().getTime();
console.log(test);
console.log(a-b);
</script>