<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お食事の選択</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 23px; color: purple;}
</style>
</head>
<body>
<p>座席の種類を選択してください。</p>
</body>
</html>


<form action="zaseki-output.php" method="post">
<select name="seat">
<option value="指定しない">指定しない</option>
<option value="テーブル">テーブル</option>
<option value="カウンター">カウンター</option>
</select>
<p><input type="submit" value="確定して人数選択"></p>
</form>
<form action="radio.php" method="post">
<input type="submit" value="前の画面に戻る">
</form>