<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>人数確認</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 20px; color: purple;}
</style>
</head>
<body>
<p>
</body>
</html>

<?php
echo $_REQUEST['count'], '名様でよろしいですか？';
?>

</p>
</body>
</html>

<form action="option.php" method="post">
<input type="submit" value="OK">
</form>
<form action="ninnzuu.php" method="post">
<input type="submit" value="人数を選びなおす">
</form>