<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お食事の選択</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 25px; color: purple;}
</style>
</head>
<body>
<p>お食事を選択してください。</p>
</body>
</html>


<form action="radio-output.php" method="post">
<p><input type="radio" name="meal" value="和食" checked>和食980円</p>
<p><input type="radio" name="meal" value="洋食">洋食1050円</p>
<p><input type="radio" name="meal" value="中華">中華1200円</p>
<p><input type="submit" value="確定"></p>
</form>
<form action="namae-nyuryoku.php" method="post">
<input type="submit" value="前の画面に戻る">
</form>