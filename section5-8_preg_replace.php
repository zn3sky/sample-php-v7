<?php
// 正規表現を使って検索置換
// クレジットカード番号を伏せ文字にする
function numbermask($subject) {
	$pattern = "/^\d{4}\s?\d{4}\s?\d{4}\s?\\d{2}(\d{2})$/";
	$rep = "**** **** **** **$1";
	$result = preg_replace($pattern, $rep, $subject);
	if (is_null($result)) {
		return "エラー：" . preg_last_error();
	} else if ($result == $subject) {
		return "番号エラー";
	} else {
		return $result;
	}
}
echo numbermask("1234 5678 1234 5678"), "<br>", PHP_EOL;
echo numbermask("1234567812345678"), "<br>", PHP_EOL;

?>