<pre>

<?php
	require_once("Milk.php");
	
	$myMilk = new Milk();
	echo "作成日：{$myMilk->theDate}<br>", PHP_EOL ;
	echo "消費期限：{$myMilk->limitDate}<br>", PHP_EOL ;
	
?>
</pre>