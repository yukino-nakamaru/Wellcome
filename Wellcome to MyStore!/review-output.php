<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>レビューを見る</title>
<style type="text/css">
body {background-color: ivory;}
p {font-size: 13px; color: goldenrod;}
</style>
</head>
<body>
<p>

<?php
$file='board.txt';
if (file_exists($file)) {
	$board=json_decode(file_get_contents($file));
}
$board[]=htmlspecialchars($_REQUEST['message']);
file_put_contents($file, json_encode($board));
foreach ($board as $message) {
	echo '<p>', $message, '</p><hr>';
}
?>

</p>
</body>
</html>

<form action="review-kannryou.php" method="post">
<input type="submit" value="レビューを投稿する">
</form>
<form action="review.php" method="post">
<input type="submit" value="レビューを訂正する">
</form>