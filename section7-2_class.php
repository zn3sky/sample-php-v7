<pre>
<?php
class staff {
	public $name;
	public $age;

	function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}
	
	public function hello() {
		if (is_null($this->name)) {
			echo "こんにちは！<br>";
		} else {
			echo "こんにちは！{$this->name}です！<br>";
		}
	}
	
}

/*
$hana = new Staff();
$hana->name = "華";
$hana->age = 21;
$hana->hello();
var_dump($hana);

$taro = new Staff();
$taro->name = "太朗";
$taro->age = 41;
$taro->hello();
var_dump($taro);
*/
$jiro = new Staff("治郎", 33);
$jiro->hello();
var_dump($jiro);

?>
</pre>