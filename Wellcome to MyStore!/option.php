<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>オプション選択</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 20px; color: purple;}
</style>
</head>
<body>

<p>追加オプションを希望の方は、追加オプションを選択してください。</p>

</body>
</html>

<form action="option-output.php" method="post">
<select name="option">
<?php
$option=['追加オプションなし', '和食：ご飯大盛り（＋50円）', '洋食：コーヒーおかわり（＋100円）', '中華：餃子6個に変更（＋100円）'];
$option=array('追加オプションなし', '和食：ご飯大盛り（＋50円）', '洋食：コーヒーおかわり（＋100円）', '中華：餃子6個に変更（＋100円）', );
foreach ($option as $op) {
	echo '<option value="', $op, '">', $op, '</option>';
}
?>
</select>
<p><input type="submit" value="確定"></p>
</form>