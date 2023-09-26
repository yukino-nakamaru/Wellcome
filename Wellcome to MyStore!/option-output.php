<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>オプション確認</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 20px; color: purple;}
</style>
</head>
<body>
<p>

<?php
echo $_REQUEST['option'], 'でよろしいですか？';
?>

</p>
</body>
</html>

<form action="tyuumon-kannryou.php" method="post">
<input type="submit" value="OK">
</form>
<form action="option.php" method="post">
<input type="submit" value="オプションを選びなおす">
</form>