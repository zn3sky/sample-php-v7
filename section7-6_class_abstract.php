<?php
abstract class ShopBiz {
	abstract function thanks();
	protected $uriage = 0;
	protected function sell($price) {
		if (is_numeric($price)) {
			echo "{$price}円です。";
			$this->uriage += $price;
		}
		
		$this->thanks();
	}
}

class MyShop extends ShopBiz {
	public function thanks() {
		echo "ありがとございました！";
	}
	
	public function hanbai($tanka, $kosu) {
		$price = $tanka * $kosu;
		$this->sell($price);
	}
	
	public function getUriage() {
		echo "売上合計は、{$this->uriage}円です。";
	}
}

$myObj = new MyShop();
$myObj->hanbai(240, 3);
echo "<br>";
$myObj->hanbai(400, 1);
echo "<br>";
$myObj->getUriage();
echo "<br>";
?>