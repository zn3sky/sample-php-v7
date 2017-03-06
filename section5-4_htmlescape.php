<?php
$msg = "東京<--->京都 'Eat & Run' ツアー";
echo $msg , "<br>";
echo "<br>", PHP_EOL;

echo htmlspecialchars($msg);

echo "<br>", PHP_EOL;
echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'), PHP_EOL;
echo "<br>", PHP_EOL;

// htmlタグを取り除く
$msg = "<p><b>あああ</b>いいい<br></p><a href=\"#fragment\">ううう</a>";
echo $msg , "<br>";
echo strip_tags($msg), "<br>", PHP_EOL;

echo strip_tags($msg, "<p>"), "<br>", PHP_EOL;

?>