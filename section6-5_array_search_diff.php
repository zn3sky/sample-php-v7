<pre>
<?php
echo "--- 配列を比較して一致しない値を見つける ---<br>";

$checkID = ["aaa", "bbb", "ccc", "ddd"];
$alist = ["AAA"];
$blist = ["bbb", "ccc"];

var_dump($checkID);
var_dump($alist);
var_dump($blist);

$diffID = array_diff($checkID, $alist, $blist);

var_dump($diffID);

?>
</pre>