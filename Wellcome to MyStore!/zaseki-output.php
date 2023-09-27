<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>座席の選択</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 23px; color: purple;}
</style>
</head>
<body>
<p>
<?php
switch ($_REQUEST['seat']) {
case 'テーブル':
	echo '人数を選択してください。（テーブル席1~24番席にご案内いたします！）';
	break;
case 'カウンター':
	echo '人数を選択してください。（カウンター席25~50番席にご案内いたします！）';
	break;
default:
	echo '人数を選択してください。';
	break;
}

?>
</p>
</body>
</html>



<form action="ninnzuu-output.php" method="post">
<select name="count">
<?php
$i=0;
while ($i<10) {
	echo '<option value="', $i, '">', $i, '</option>';
	$i++;
}
?>
</select>
<p><input type="submit" value="人数を確定する"></p>
</form>
<form action="zaseki.php" method="post">
<input type="submit" value="前の画面に戻る">
</form>

