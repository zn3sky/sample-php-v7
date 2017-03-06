<?php
//文字列と数値の厳密な比較
function check($a, $b) {
	if ($a === $b) {
		echo "{$a}と{$b}は同じ<br>", PHP_EOL;
	
	} else {
		echo "{$a}と{$b}は違う<br>", PHP_EOL;
	}
}
check("7cm", "7cm");
check("7km", "7cm");
check("7日", 7);
check("PHP7", 7);
check("７", 7);
check("七", 7);
check("七", 0);
check("7", 7);
check(7, 7);

?>