<?php
// 正規表現を使って検索置換
// パターンと置換文字を配列で指定
$pattern = ["/★★★開催日★★★/u", "/★★★開始時間★★★/u"];
$replacement = ["金曜日", "午後2:30"];
$subject = "次回は★★★開催日★★★の★★★開始時間★★★からです";
$result = preg_replace($pattern, $replacement, $subject);
echo $result;
?>