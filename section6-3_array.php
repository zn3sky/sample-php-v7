<pre>
<?php
// 正の値だけ合計
$valList = [1,2,3,4,5,-1,-2,-3,-4];
var_dump($valList);

$sum = 0;
foreach ($valList as $value) {
	if ($value > 0) {
		$sum += $value;
	}
}
var_dump($sum);

// array_sum();
$valList = [1,2,3,4,5,-1,-2,-3,-4];
var_dump(array_sum($valList));

echo "--- 配列から条件に合う値を抽出する ---<br>";
$myArray = ["a" => 1, "b" => 2, "c" => -3, "d" => 4, "e" => 5, "f" => 6];
var_dump($myArray);
$filtered = array_filter($myArray, "isPlus");
function isPlus($value) {
	return ($value > 0);
}
var_dump($filtered);


echo "--- 配列を変数に展開する ---<br>";
$data = ["aaa", "すずき", 23];
var_dump($data);

list($id, $name, $age) = $data;
var_dump($id);
var_dump($name);
var_dump($age);
?>
</pre>