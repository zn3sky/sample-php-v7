<?php
// 前方一致で比較する
function check($str1, $str2) {
	$result = strncasecmp($str1, $str2, strlen($str1));
	echo "{$str2}は";
	
	if ($result == 0) {
		echo "{$str1}から始まる<br>", PHP_EOL;
	} else {
		echo "{$str1}から始まらない<br>", PHP_EOL;	
	}
}

check("ABC", "ABCDEF");
check("ABC", "abcdef");
check("ABC", "ＡＢＣＤＥＦ");
check("ABC", "xABCD");


?>