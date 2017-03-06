<?php

// 文字数から料金を計算する
function price($str) {
	$kakaku = 3000;
	//文字数を調べる
	$length = mb_strlen($str);
	// 11文字目から1文字100円増し
	if ($length > 10) {
		$kakaku += ($length - 10) * 100;
	}
	// 3桁位取り
	$kakaku = number_format($kakaku);
	$result = "{$length}文字{$kakaku}円";
	
	return $result;
}

$msg1 = "Hello World";
$msg2 = "ハローワールド";
echo $msg1, "：", price($msg1), "<br>"; 
echo $msg2, "：", price($msg2), "<br>"; 
echo "<br>";

// 文字列から文字を取り出す
$msg = "１２３４５６７８９０1234567890①②③";
echo $msg;
echo "<br>";
echo "文字数：", mb_strlen($msg), "<br>";//文字数
echo "5文字目から最後：", mb_substr($msg, 4), "<br>";
echo "5文字目から10文字：", mb_substr($msg, 4, 10), "<br>";
echo "最後から6文字：", mb_substr($msg, -6), "<br>";

// 半角英数字だけの場合
$id = "1234567890abcdefg";
echo $id;
echo "<br>";
echo "文字数：", strlen($id), "<br>";//文字数
echo "5文字目から最後：", substr($id, 4), "<br>";
echo "5文字目から10文字：", substr($id, 4, 10), "<br>";
echo "最後から6文字：", substr($id, -6), "<br>";


?>