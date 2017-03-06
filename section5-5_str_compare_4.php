<?php
// 英単語をアルファベット順で比較する
function compare($a, $b) {
	if ($a < $b) {
		echo "{$a}、{$b}の順<br>", PHP_EOL;
	} else if ($a == $b) {
		echo "{$a}、{$b}は同じ<br>", PHP_EOL;
	} else {
			echo "{$b}、{$a}の順<br>", PHP_EOL;
	}
}

compare("apple", "apple");
compare("apple", "pen");
compare("apple", "android");
compare("apple", "APPLE");

?>