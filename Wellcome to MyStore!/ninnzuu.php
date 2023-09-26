<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>人数選択</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 17px; color: purple;}
</style>
</head>
<body>


<p>人数を選択してください。</p>

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
</form>
<form action="zaseki-output.php" method="post">
<input type="submit" value="前の画面に戻る">
</form>