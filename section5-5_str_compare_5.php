<?php
function compareStr($a, $b) {
	$result = strcmp($a, $b);
	if ($result < 0) {
		echo "{$a}、{$b}の順<br>", PHP_EOL;
	} else if ($result === 0) {
		echo "{$a}、{$b}は同じ<br>", PHP_EOL;
	} else {
			echo "{$b}、{$a}の順<br>", PHP_EOL;
	}
}
compareStr("123", 99);
compareStr("A123", 99);
compareStr("099", 99);

?>