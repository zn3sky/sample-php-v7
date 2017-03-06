<pre>
<?php
echo "--- 正規表現を使って配列を検索する（部分一致検索） ---<br>";

$data = ["山田", "神田", "山本"];
$pattern = "/田/";
var_dump($data);
$result = preg_grep($pattern, $data);
var_dump($result);


echo "--- 正規表現を使ってマッチしない値を検索する（部分一致検索） ---<br>";
$data = ["山田", "神田", "山本"];
$pattern = "/田/";
var_dump($data);
$result = preg_grep($pattern, $data, PREG_GREP_INVERT);
var_dump($result);

?>
</pre>