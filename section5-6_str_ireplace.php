<?php
$subject = "Apple Pie";
$result = str_ireplace("p", "#", $subject, $count);
echo "置換前：{$subject}<br>", PHP_EOL;
echo "置換後：{$result}、(置換個数：{$count})<br>", PHP_EOL;

// 複数
$search = ["鈴木", "35歳"];
$replace = ["A", "x歳"];

$subject = "担当は鈴木さんです。鈴木さんは35歳の男性です。";
$result = str_replace($search, $replace, $subject);
echo "置換前：{$subject}<br>", PHP_EOL;
echo "置換後：{$result}", PHP_EOL;

?>