<?php
// 全角／半角、ひらがな／カタカナ変換
$msg = "Ｈｅｌｌｏ！　ＷＯＲＬＤ！ＰＨＰ７";
echo $msg, "<br>";
echo mb_convert_kana($msg, "r"), "<br>";
echo mb_convert_kana($msg, "n"), "<br>";
echo mb_convert_kana($msg, "a"), "<br>";
echo mb_convert_kana($msg, "s"), "<br>";
echo mb_convert_kana($msg, "as"), "<br>";
echo "<br>";

// 全角／半角、ひらがな／カタカナ変換
$msg = "Hello,world!PHP7";
echo $msg, "<br>";
echo mb_convert_kana($msg, "R"), "<br>";
echo mb_convert_kana($msg, "N"), "<br>";
echo mb_convert_kana($msg, "A"), "<br>";
echo mb_convert_kana($msg, "S"), "<br>";
echo mb_convert_kana($msg, "AS"), "<br>";
echo "<br>";

// ひらかな→カタカナ
$yomi = "やまだはなこ";
echo $yomi, "<br>";
echo mb_convert_kana($yomi, "h"), "<br>";
echo mb_convert_kana($yomi, "C"), "<br>";;
echo "<br>";

// カタカナ→ひらかな
$yomi = "ﾐﾗﾝﾀﾞｶﾞｰ";
echo $yomi, "<br>";
echo mb_convert_kana($yomi, "HcV"), "<br>";;

// 英文字の大文字↔小文字
$msg = "Apple iPhone";
echo $msg, "<br>";
echo strtoupper($msg), "<br>";
echo strtolower($msg), "<br>";

// 単語の先頭文字だけ大文字にする
$msg = "hello world";
echo $msg, "<br>";
echo ucfirst($msg), "<br>";
echo ucwords($msg), "<br>";

$msg = "HELLO WORLD";
echo $msg, "<br>";
echo ucfirst($msg), "<br>";
echo ucwords($msg), "<br>";

// 不要な空白や改行を取り除く
$msg = "\tHello World!        \n\n";
echo "処理前：[";
echo $msg;
echo "]";
echo "<br>";

echo "処理後：[";
echo trim($msg);
echo "]";
echo "<br>";

// 不要な空白や改行を取り除く　－　指定文字
$msg = "\tHello World!        \n\n";
echo "処理前：[";
echo $msg;
echo "]";
echo "<br>";

echo "処理後：[";
echo trim($msg, "\n");
echo "]";
echo "<br>";



?>