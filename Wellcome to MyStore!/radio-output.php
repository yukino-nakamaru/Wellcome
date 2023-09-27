<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Wellcome!</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 23px; color: purple;}
</style>
</head>
<body>
<p>

<?php
switch ($_REQUEST['meal']) {
case '和食':
	echo '和食980円（焼き魚、煮物、味噌汁、御飯、果物）';
	break;
case '洋食':
	echo '洋食1050円（ジュース、オムレツ、ハッシュポテト、パン、コーヒー）';
	break;
case '中華':
	echo '中華1200円（春巻、餃子（3個）、卵スープ、炒飯、杏仁豆腐）';
	break;
}
echo 'をご提供いたします。<br>';
echo '次に、ご希望の座席を選択してください。'
?>
</p>

<form action="zaseki.php" method="post">
<input type="submit" value="座席を選択する">
</form>
<form action="radio.php" method="post">
<input type="submit" value="お食事を選びなおす">
</form>