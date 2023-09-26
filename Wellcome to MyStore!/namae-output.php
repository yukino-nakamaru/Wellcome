<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Wellcome!</title>
<style type="text/css">
body {background-color: pink;}
p {font-size: 30px; color: purple;}
</style>
</head>
<body>
<p>
    <?php 
    if (isset($_REQUEST['user'])) {
        echo 'My Storeへようこそ、', htmlspecialchars($_REQUEST['user']), 'さん！';
    }?>
</p>
<form action="radio.php" method="post">
<input type="submit" value="お食事を選択する">
</body>
</html>
</form>
<form action="namae-nyuryoku.php" method="post">
<input type="submit" value="前の画面に戻る">
</form>

