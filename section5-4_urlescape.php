<?php
$page = "PHP 7 サンプル.html";

// rawurlencode
$path = rawurlencode($page);
$url = "http://sample.com/{$path}";
echo "http://sample.com/{$path}";
echo "<br>";

// urlencode
$path = urlencode($page);
echo "http://sample.com/{$path}";
echo "<br>";

?>