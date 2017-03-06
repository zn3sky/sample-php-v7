<pre>
<?php
	require_once("SoccerPlayer.php");
	
	
	$player1 = new SoccerPlayer("しんじ");
	$player1->who();
	$player1->play();
	echo "{$player1}<br>";
	
	require_once("Runner.php");

	$runner1 = new Runner("福士", 23);
	$runner1->who();
	$runner1->play();
	echo "{$runner1}<br>"
?>
</pre>