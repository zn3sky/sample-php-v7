<?php
$goods = [
	'id' => 'R56', 
	'size' => 'M',
	'price' => 2350
];
foreach ($goods as $key => $val) {
	echo "{$key}:{$val}<br>", PHP_EOL;
}

echo "<pre>";
var_dump($goods);

$goods['price'] = 3500;

var_dump($goods);

echo "</pre>";
?>