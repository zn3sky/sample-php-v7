<?php
function check($target, $str) {
	$result = mb_substr_count($target, $str);
	echo "{$target}には{$str}が{$result}個ふくまれている。<br>", PHP_EOL;
}

check("AAAAAAAAAAAAAAABBBBBBBBBBBBBBBBBB", "AAA");

?>
