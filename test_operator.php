<pre>
<?php
// -----------------------------------------------------------------------------
// テスト
// 演算子
// -----------------------------------------------------------------------------

// 代入演算子
$a = 100;
$b = $a + 1;
var_dump($a);
var_dump($b);

$a = $b = $c = 100;
var_dump($a);
var_dump($b);
var_dump($c);

// 複合代入演算子
$a = 0;
$a += 10;
echo $a;

echo "<br>";


// 算術演算子
$total= 80 + 40;
$result = $total - 5;
echo "合計{$total}、最終結果{$result}"; 
echo "<br>";

$kingaku = 5470;
$amari = $kingaku % 4;
$hitori = ($kingaku - $amari) / 4;
echo "ひとり{$hitori}円、不足{$amari}円";
echo "<br>";



// インクリメント、デクリメント
$a = 0;
$b = ++$a;

echo "\$aは{$a}、\$bは{$b}";
echo "<br>";


$a = 0;
$b = $a++;

echo "\$aは{$a}、\$bは{$b}";
echo "<br>";

// 文字のインクリメント、デクリメント
$a = "19";
$b = ++$a;

echo "\$aは{$a}、\$bは{$b}";
echo "<br>";

$a = "a";
$b = ++$a;

echo "\$aは{$a}、\$bは{$b}";
echo "<br>";


$a = "a";
$b = --$a;

echo "\$aは{$a}、\$bは{$b}";
echo "<br>";

// 宇宙船★php7～
$price = 250 * ($kosu ?? 2);// $kosuがnullなので2を使って計算される
var_dump($kosu);
echo $price;
echo "<br>";

// 整数と文字列を比較する
$hantei1 = ("99" == 99);
var_dump($hantei1);

$hantei2 = ("99" != 99);
var_dump($hantei2);

// 整数と文字列を比較する - 型も
$hantei1 = ("99" === 99);
var_dump($hantei1);

$hantei2 = ("99" !== 99);
var_dump($hantei2);
echo "<br>";
echo "<br>";


// 論理演算子
$test1 = TRUE;
$test2 = FALSE;
$hantei1 = $test1 && $test2;
$hantei2 = $test1 || $test2;
$hantei3 = !$test1;
var_dump($hantei1);// false
var_dump($hantei2);// true
var_dump($hantei3);// false

$hantei1 = ($test1 and $test2);
$hantei2 = ($test1 or $test2);

var_dump($hantei1);// false
var_dump($hantei2);// true
echo "<br>";
echo "<br>";

// ３項演算子
$a = mt_rand(0, 50);
$b = mt_rand(0, 50);

$bigger = ($a > $b) ?  $a : $b;
echo "大きな値は{$bigger}、\$aは{$a}、\$bは{$b}";
echo "<br>";
echo "<br>";

echo "\$a={$a} \$b={$b}なので", (($a > $b) ? "\$aがおおきい" : "\$bがおおきい");
echo "<br>";
echo "<br>";


// ビット演算子
$a = 1;
$b = ($a << 1);
var_dump($b);
$a = 1;
$b = ($a >> 1);
var_dump($b);

echo "<br>";
echo "<br>";

// キャスト演算子
// 整数と文字列を比較する - 型も
$hantei1 = ((int)"99" === 99);
var_dump($hantei1);
echo "<br>";
echo "<br>";

// 型演算子
$now = new DateTime();//true;
//$now = "aa";// false
$isDate = $now instanceof DateTime;
var_dump($isDate);

?>
</pre>