<pre>
<?php
// 数字検索
$oklist = [1, 2, 13];
$numlist = [1, 3, 4, 5, 6];
function check($no) {
	global $oklist;
	if (in_array($no, $oklist)) {
		echo "{$no}はみつかりました<br>";
	} else {
		echo "{$no}はみつかりません<br>";
	}
}
foreach ($numlist as $val) {
	echo check($val);
}
?>
</pre>