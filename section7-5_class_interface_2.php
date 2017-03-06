<?php
interface GameBook {
	function newGame($point);
	function play();
	function isAlive():bool;
}

class myGame implements GameBook {
	public $hitPoint;
	
	function __construct($point = 50) {
		$this->hitPoint = $point;
	}
	
	public function newGame($point = 50) {
		$this->hitPoint = $point;
	}

	// ゲーム開始
	public function play() {
		$num = random_int(0, 50);
		if ($num % 2 == 0) {
			echo "{$num}ポイント増えました！({$this->hitPoint})<br>";
			$this->hitPoint += $num;
		} else {
			echo "{$num}ポイント減りました！({$this->hitPoint})<br>";
			$this->hitPoint -= $num;
		}
	}
	
	// 勝敗のチェック
	public function isAlive():bool {
		return ($this->hitPoint > 0);
	}
}


$myPlayer = new myGame();

for ($i=0; $i<10; $i++) {
	$myPlayer->play();
	if (!$myPlayer->isAlive()) {
		echo "ゲームオーバー!!!<br>";
		break;
	}
}
echo "ゲーム終了";
?>