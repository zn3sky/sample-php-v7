<pre>
<?php
echo "--- 配列の値を検索置換する ---<br>";

$data = ["aaa", "bbb", "ccc", "ddd"];
$search = ["aaa", "bbb"];
$replace = ["あ", "い"];

var_dump($data);
var_dump($search);
var_dump($replace);

$result = str_replace($search, $replace, $data);

var_dump($result);
var_dump($data);

?>
</pre>