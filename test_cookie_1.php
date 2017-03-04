<?php
$message = "hello";
$result = setcookie("message", $message);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>クッキー保存ページ</title>
</head>
<body>
<?php

echo "クッキー保存：";
echo ($result ? "OK" : "NG");
echo "<br>";
?>
<a href="test_cookie_2.php">次のページへ</a>
</body>
</html>
