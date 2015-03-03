<?php
function insertion_sort($array){
	set_time_limit(120);
	for($i=1; $i<count($array); $i++){
		$value = $array[$i];
		for($j=$i-1; $j>=0; $j--){
			if($value < $array[$j]){
				$temp = $array[$j+1];
				$array[$j+1] = $array[$j];
				$array[$j] = $temp;
			}
			else
				break;
		}
	}
	return $array;
}
function printArray($array){
	foreach($array as $item)
		echo $item . ", ";
	echo "<br> <br>";
}
// 34.6 seconds for 10000 item array.
// $test = array();
// for($i=0; $i<10000; $i++)
// 	$test[] = rand(0,10000);
// // printArray($test);
// echo 'working';
// $time = microtime(true);
// $test = insertion_sort($test);
// // printArray($test);
// echo microtime(true) - $time;
?>

<script>
var insertion_sort = function(array){
	for(i=1; i<array.length; i++){
		var value = array[i];
		for(j=i-1; j>=0; j--){
			if(value < array[j]){
				var temp = array[j+1];
				array[j+1] = array[j];
				array[j] = temp;
			}
			else
				break;
		}
	}
	return array;
}
// 105 milliseconds for a 10000 item array.
var test = [];
for(i=0; i<10000; i++)
	test.push(Math.floor(Math.random()*10001));
var b = new Date().getTime();
test = insertion_sort(test);
var a = new Date().getTime();
console.log(test);
console.log(a-b);
</script>