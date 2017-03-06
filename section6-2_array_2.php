<pre>
<?php
echo "--- 要素の削除と置換、連結と分割、重複を取り除く ---<br>";
$myArray = ["a", "b", "c", "d", "e", "f"];
var_dump($myArray);
echo "<br>";

$removed = array_splice($myArray, 1, 2);
var_dump($myArray);
echo "<br>";

var_dump($removed);
echo "<br>";

// 連想配列
$myArray = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5, "f" => 6];
var_dump($myArray);
echo "<br>";

$removed = array_splice($myArray, 1, 2);
var_dump($myArray);
echo "<br>";

var_dump($removed);
echo "<br>";


echo "--- 配列の先頭の値を取り出す ---<br>";
$myArray = ["a", "b", "c", "d", "e", "f"];
var_dump($myArray);
echo "<br>";

$removed = array_shift($myArray);
var_dump($myArray);
echo "<br>";

var_dump($removed);
echo "<br>";

// 配列の末尾の値を取り出す
$myArray = ["a", "b", "c", "d", "e", "f"];
var_dump($myArray);
echo "<br>";

$removed = array_pop($myArray);
var_dump($myArray);
echo "<br>";

var_dump($removed);
echo "<br>";

echo "--- 配列の要素を置換 ---<br>";
$myArray = ["a", "b", "c", "d", "e", "f"];
var_dump($myArray);
echo "<br>";

$replace = ["X", "Y", "Z"];
$removed = array_splice($myArray, 1, 3, $replace);
var_dump($myArray);
echo "<br>";

var_dump($removed);
echo "<br>";

echo "--- 配列を+演算子で連結 ---<br>";
$a = ["a", "b", "c"];
$b = ["d", "e", "f","g"];
$result = $a + $b;

var_dump($result);

echo "--- 配列をarray_mergeで連結 ---<br>";
$a = ["a", "b", "c"];
$b = ["d", "e", "f","g"];
$result = array_merge($a, $b);
var_dump($result);

echo "--- 連想配列をarray_mergeで連結 ---<br>";
// 重複はあと勝ち
$a = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5, "f" => 6];
$b = ["a" => 10, "g" => 2];
$result = array_merge($a, $b);
var_dump($result);

echo "--- 連想配列をarray_merge_recursiveで連結 ---<br>";
// 重複は多重配列
$a = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5, "f" => 6];
$b = ["a" => 10, "g" => 2];
$result = array_merge_recursive($a, $b);
var_dump($result);

echo "--- 2つの配列から連想配列を作る ---<br>";
$keys = ["a", "b", "c", "d", "e", "f"];
$vals = ["A", "B", "C", "D", "E", "F"];
$result = array_combine($keys, $vals);
var_dump($result);

echo "--- 配列を切り出す ---<br>";
$myArray = ["a", "b", "c", "d", "e", "f"];
var_dump(array_slice($myArray, 1, 3));
var_dump(array_slice($myArray, 1, 3, true));
var_dump($myArray);

?>
</pre>