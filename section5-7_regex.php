<?php
// -----------------------------------------------------------------------------
// preg_match
// -----------------------------------------------------------------------------

var_dump(preg_match("/46-49/u", "たしか49-46でした"));
echo "<br>";

var_dump(preg_match("/46-49/u", "たしか46-49でした"));
echo "<br>";

var_dump(preg_match("/46-49u", "たしか46-49でした"));// パターン式間違い：FALSE
echo "<br>";

// エスケープ
var_dump(preg_match("/\/image\//u", "hogehoge.com/image/xxxxxxx"));
echo "<br>";

var_dump(preg_match("/\/image\//u", "hogehoge.com/image"));
echo "<br>";

// #
var_dump(preg_match("#/image/#u", "hogehoge.com/image/xxxxxxx"));
echo "<br>";


// マッチした値の取り出し
$pattern = "/佐.+子/u";
$subject = <<< "names"
佐藤由紀
佐藤優子
佐々木裕子
佐子
佐 子

塩田智子
杉山薫
names;

// 最初の一致を取り出し
$result = preg_match($pattern, $subject, $matches);
// 実行結果をチェックする
if ($result === false) {
	echo "エラー：", preg_last_error();
} else {
	if ($result == 0) {
		echo "マッチした値はありません";
	} else {
		echo "「{$matches[0]}」がみつかりました<br>", PHP_EOL;

	}
}

// マッチしたものすべて取り出し
$result = preg_match_all($pattern, $subject, $matches);
// 実行結果をチェックする
if ($result === false) {
	echo "エラー：", preg_last_error();
} else {
	if ($result == 0) {
		echo "マッチした値はありません";
	} else {
		foreach ($matches[0] as $val) {
			echo "「{$val}」がみつかりました<br>", PHP_EOL;
		}
	}
}

// サブパターンも取り出し
$pattern = "/2013([A-F])-(..)/";// {年}{モデル}-{タイプ}
$subject = "2012A-aa 2012F-aa 2013A-bb 2012Z-aa 2013A-sx";
$result = preg_match_all($pattern, $subject, $matches);
if ($result === false) {
	echo "エラー：",  preg_last_error();
} else {
	if ($result == 0) {
		echo "マッチした形式はありません";
	} else {
		echo "見つかった型式：", implode("、", $matches[0]), "<br>", PHP_EOL;
		echo "モデル：", implode("、", $matches[1]), "<br>", PHP_EOL;
		echo "タイプ：", implode("、", $matches[2]), "<br>", PHP_EOL;
	}
}
?>