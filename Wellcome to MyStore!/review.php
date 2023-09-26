<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>レビュー投稿</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 20px; color: purple;}
</style>
</head>
<body>

<p>本日のお食事のレビューを入力してください。</p>

</body>
</html>

<form action="review-output.php" method="post">
<input type="text" name="message">
<input type="submit" value="レビューを投稿する">
</form>

<form action="tyuumon-kannryou.php" method="post">
<input type="submit" value="前の画面に戻る">
</form>