<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お会計</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 20px; color: purple;}
</style>
</head>
<body>
<p>

<?php
$price=$_REQUEST['price'];
$count=$_REQUEST['count'];
echo $price, '円×';
echo $count, '名様＝';
echo $price*$count, '円でございます。';
?>

</p>
</body>
</html>

<form action="thankyou.php" method="post">
<input type="submit" value="OK">
</form>
<form action="kaikei.php" method="post">
<input type="submit" value="戻る">
</form>