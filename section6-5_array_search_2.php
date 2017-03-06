<pre>
<?php
// 数字検索
$oklist = ["田中", "鈴木", "佐藤"];
$searchlist = ["山田", "山木", "田中"];

function check($name) {
	global $oklist;
	if (in_array($name, $oklist)) {
		echo "{$name}はみつかりました<br>";
	} else {
		echo "{$name}はみつかりません<br>";
	}
}
foreach ($searchlist as $val) {
	echo check($val);
}


?>
</pre>