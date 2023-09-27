<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Thank you for coming to My Store!</title>
<style type="text/css">
body {background-color: ivory;}
p {font-size: 25px; color: skyblue;}
</style>
</head>
<body>
<p>

<?php
echo '本日はご来店ありがとうございました。<br>';
echo 'またのご来店を心よりお待ちしております。';
?>
<form action="start.php" method="post">
<input type="submit" value="最初の画面へ戻る">
</form>

</p>
</body>
</html>
