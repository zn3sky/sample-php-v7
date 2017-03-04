<?php
session_start();
$_SESSION["test"] = "hogehoge";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>セッション開始ページ</title>
</head>
<body>
<a href="test_session_2.php">次のページへ</a>
</body>
</html>
