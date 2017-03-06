<pre>
<?php
echo "--- 配列の値を正規表現で検索置換する ---<br>";
$user = ["name" => "井上", "age" => 35, "phone" => "090-1234-5678"];
var_dump($user);
$pattern = "/(-)\d{4}$/";// 末尾４桁
$replacement = "$1****";
$result = preg_replace($pattern, $replacement, $user);
var_dump($result);
var_dump($user);

?>
</pre>