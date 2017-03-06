<?php
// 配列を作ってチーム分けする
$teamA = ["赤井一郎", "伊藤五郎", "上野信二"];
$teamB = ["江藤幸代", "小野幸子"];

function teamList($teamname, $namelist) {
	echo "{$teamname}", PHP_EOL ;
	echo "<ol>", PHP_EOL;
	for ($i=0; $i<count($namelist); $i++) {
		echo "<li>", $namelist[$i], "</li>", PHP_EOL;
	}
	echo "</ol>", PHP_EOL;
}

teamList("Aチーム", $teamA);
teamList("Bチーム", $teamB);

?>