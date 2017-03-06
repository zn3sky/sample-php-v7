<pre>
<?php
// -----------------------------------------------------------------------------
// 配列をソートする
// -----------------------------------------------------------------------------
echo "--- 昇順にソートする ---<br>";
$data = [7,6,5,4,2,1,99,12, 0, -1, 2];
var_dump($data);
sort($data);
var_dump($data);

echo "--- 降順にソートする ---<br>";
$data = [7,6,5,4,2,1,99,12, 0, -1, 2];
var_dump($data);
rsort($data);
var_dump($data);


// -----------------------------------------------------------------------------
// 連想配列をソートする
// -----------------------------------------------------------------------------
echo "--- 昇順にソートする ---<br>";
$data = ["S" => 23, "M" => 36, "L" => 29];
var_dump($data);
asort($data);
var_dump($data);

echo "--- 降順にソートする ---<br>";
$data = ["S" => 23, "M" => 36, "L" => 29];
var_dump($data);
arsort($data);
var_dump($data);

// -----------------------------------------------------------------------------
// 配列をシャッフルする
// -----------------------------------------------------------------------------
echo "--- シャッフルする ---<br>";
$data = ["A", "B", "C"];
var_dump($data);
shuffle($data);
var_dump($data);

// -----------------------------------------------------------------------------
// 並びを逆にする
// -----------------------------------------------------------------------------
echo "--- 並びを逆にする ---<br>";

$data = ["山田", "鈴木", "田中"];
var_dump($data);
$res = array_reverse($data);
var_dump($res);
var_dump($data);

// -----------------------------------------------------------------------------
// 並びを自然順にする
// -----------------------------------------------------------------------------
echo "--- 自然順にする ---<br>";
$data = ["image1", "image2", "image12"];
var_dump($data);
$res = natsort($data);
var_dump($res);
var_dump($data);



?>
</pre>