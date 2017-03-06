<?php
// ダブルクォート
// 変数を入れる
$theSize = "M";
$thePrice = 12000;
$msg = "$theSize サイズ、$thePrice 円";
echo $msg;
echo "<br>";
$msg = "{$theSize}サイズ、{$thePrice}円";
echo $msg;
echo "<br>";

// 特殊文字を入れる
$yen = 117;
echo "今日のレートは、\$1 = $yen 円です";
echo "<br>";

// シングル2クォート
$theSize = "M";
$thePrice = 12000;
$msg = '$theSize サイズ、$thePrice 円';
echo $msg;
echo "<br>";

$yen = 117;
echo '今日のレートは、$1 = $yen 円です';
echo "<br>";

echo "<br>";

echo 'そこは"Y\'S ROOM"です';
echo "<br>";

// ヒアドキュメント
$test = "aaa";
$msg = <<< "EOD"
ああああ
いいいい
うううう
"PHP $test"
EOD;
echo $msg;
echo "<br>";

// Nowdoc 構文
$test = "aaa";
$msg = <<< 'EOD'
ああああ
いいいい
うううう
"PHP $test"
EOD;
echo $msg;// 変数が展開されない
echo "<br>";
echo "<br>";

// フォーマット文字列
echo M_PI;
echo "<br>" . PHP_EOL;
printf('円周率：%.3f', M_PI);
echo "<br>";

$format = '最大値%1.1f、最小値%.1f';
$a = 15.69;
$b = 11.32;
printf($format, $a, $b);
echo "<br>";

$a = -5;
$b = 9;
printf('%+d', $a);
echo "、";
printf('%+d', $b);
echo "<br>";

$a = 7;
$b = 2380;
printf('番号は%03d <br>', $a);
printf("請求額は%'*6d円<br>", $b);

$a = "23ab";
printf("IDは%'#-8sです。 <br>", $a);
printf("IDは%'#+8sです。 <br>", $a);

$a = 83;
$b = 9201;
$c = "3-A";
printf('番号は%04dです<br>', $a);
printf('番号は%04dです<br>', $b);

// 小数点以下の桁数、値の文字数を指定する
$a = 10.2504;
$b = 3.1;
$c = "Hypertext Preprocessor";

printf('結果は%.2fです<br>', $a);
printf('結果は%.02fです<br>', $b);
printf('PHPは%.5s…<br>', $c);


// 型指定子
$per = 64.8;
printf('達成率は%.2f%%です', $per);
echo "<br>";

$year = 2017;
$seq = 523;
$type = "P7";
$id = sprintf('%04d%06d-%s', $year, $seq, $type);
echo "製品IDは", $id, "です";
echo "<br>";

$max = 15.69;
$min = 11.32;
$ave = 13.218;
$data = array($max, $min, $ave);
$format = '最大値%.1f、最小値%.1f、平均値%.1f';
vprintf($format, $data);
echo "<br>";

// 数値の3桁区切り
$price = 1234 * 2;
$kingaku = number_format($price);
echo $kingaku, "円";
echo "<br>";

?>