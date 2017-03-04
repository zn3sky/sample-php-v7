<?php
$message = "";
if (isset($_COOKIE["message"])) {
	$message = $_COOKIE["message"];
} else {

}

// cookie削除
$isDel = setcookie("message", "", time() - 3600);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>クッキー確認ページ</title>
</head>
<body>
<?php

echo "クッキーの値：";
echo $message;
echo "<br>";


echo "クッキー削除結果：";
var_dump($isDel);
echo "<br>";

?>
<a href="test_cookie_1.php">前のページへ</a>
</body>
</html>
