<?php
// 文字列が含まれている位置を調べる
function check($target, $str) {
	$result = mb_strpos($target, $str);
	if ($result === false) {
		echo "「{$str}」は「{$target}」にはふくまれていません<br>", PHP_EOL;
	} else {
		echo "「{$str}」は「{$target}」の{$result}文字目にあります<br>", PHP_EOL;
	}
}

check("東京都渋谷区神南", "渋谷");
check("東京都渋谷区神南", "新宿");
check("PHP, swift, c#", "php");
check("PHP, swift, c#", "PHP");
?>