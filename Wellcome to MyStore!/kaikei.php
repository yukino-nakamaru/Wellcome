<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お会計</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 23px; color: purple;}
</style>
<p>お客様の選択した商品の合計金額と、人数を入力してください。（半角数字）</p>
</head>
<body>
<p>

<form action="kaikei-output.php" method="post">
お客様のお食事 <input type="text" name="price"> 円
×
お客様の人数 <input type="text" name="count"> 名様
<br>
<form action="kaikei-output.php" method="post">
<input type="submit" value="お会計を見る">
</form>

</p>
</body>
</html>