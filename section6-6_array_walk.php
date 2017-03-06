<pre>
<?php
echo "--- 配列の各要素に関数を適用する ---<br>";

// 通貨換算して表示するcallback関数
function echangeDisp($value, $key, $rateData) {
	$rate = $rateData["rate"];
	if ($rate == 0) {
		return;
	}
	$price = $value / $rate;
	$exPrice = sprintf('%.01f', $price);
	
	echo "[{$key}:{$value}]",$rateData["symbol"], $exPrice, "<br>";
}

$yenPriceList = [2300, 1200, 4000, 10000];
$dollarYen = ["symbol" => '米$', "rate" => 112.50];

$result = array_walk($yenPriceList, "echangeDisp", $dollarYen);
var_dump($result);
var_dump($yenPriceList);
?>
</pre>