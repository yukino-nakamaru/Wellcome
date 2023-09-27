<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Let's enjoy eating!</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 23px; color: purple;}
</style>
</head>
<body>
<p>

<?php
date_default_timezone_set('Japan');
echo  'どうぞごゆっくりお食事をお楽しみください！';
echo '<p>', date('Y/m/d H:i:s'), '</p>';
echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';
//echo  'よろしければお食事のレビューにご協力お願いいたします。';
?>

</p>
</body>
</html>


<p>よろしければお食事のレビューにご協力お願いいたします!</p>


<form action="review.php" method="post">
<input type="submit" value="レビューを書く">
</form>

<form action="kaikei.php" method="post">
<input type="submit" value="レビューを書かずにお会計に進む">
</form>

<!-- <form action="tyuumon-kakuninn.php" method="post"> -->
<!-- <input type="submit" value="注文の確認"> -->
<!-- </form> -->