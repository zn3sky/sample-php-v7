<pre>
<?php
echo "--- 配列の各要素に関数を適用する ---<br>";

// 通貨換算して表示するcallback関数
function echange($value) {
	global $dollarYen;
	$rate = $dollarYen["rate"];
	if ($rate == 0) {
		return;
	}
	$price = $value / $rate;
	$exPrice = sprintf('%.01f', $price);
	
	echo "[{$key}:{$value}]",$dollarYen["symbol"], $exPrice, "<br>";

	return $exPrice;
}

$yenPriceList = [2300, 1200, 4000, 10000];
$dollarYen = ["symbol" => '米$', "rate" => 112.50];

$result = array_map("echange", $yenPriceList);
var_dump($result);
var_dump($yenPriceList);
?>
</pre>