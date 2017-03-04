<?php
session_start();

$isSession = false;
if (isset($_SESSION["test"])) {
	if ($_SESSION["test"] == "hogehoge") {
		$isSession = true;
	} 
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>セッション確認ページ</title>
</head>
<body>
<?php
echo "セッション確認：";
echo ($isSession ? "OK" : "NG");
echo "<br>";

echo "セッション破棄：";
echo (session_destroy() ? "OK" : "NG");
echo "<br>";
?>
<a href="test_session_1.php">前のページへ</a>
</body>
</html>
