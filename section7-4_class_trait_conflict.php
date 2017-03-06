<pre>
<?php
// メソッドの衝突を解消する
trait TaroTool {
	public function hello() {
		echo "ハロー！";
	}
	
	public function weekday() {
		$week = ["日", "月", "火", "水", "木", "金", "土"];
		$now = new DateTime();
		$w = (int)$now->format('w');
		$weekday = $week[$w];
		echo "今日は{$weekday}曜日です";
	}
}

trait HanaTool {
	public function hello() {
		echo "ごきげんよう";
	}
}

class MyClass {
	use TaroTool, HanaTool {
		TaroTool::hello as taroHello;
		HanaTool::hello as hanaHello;
		
		HanaTool::hello insteadof TaroTool;
	}
}

$myObj = new MyClass();
$myObj->hello();
echo "<br>";
$myObj->weekday();
echo "<br>";
$myObj->taroHello();
echo "<br>";
$myObj->hanaHello();

?>
</pre>