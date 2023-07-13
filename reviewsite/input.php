<?php
    session_start();
    $dsn='mysql:dbname=reviewsite;charset=utf8';
    $user='root';
    $pass='yukino1371';
    $dbh = new PDO($dsn,$user,$pass);

    //フォームからの値をそれぞれ変数に代入
    if(isset($_POST['products'])) {
        $id = $_POST['product_id'];
        $name = $_POST['product_name'];
        $description = $_POST['product_description'];
        $cat = $_POST['product_cat'];
    
        $sql = "SELECT * FROM products ";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':product_id', $id);
        $stmt->bindValue(':product_name', $name);
        $stmt->bindValue(':product_description', $description);
        $stmt->bindValue(':product_cat', $cat);
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
        ?>

        <div class="col-xs-12">
        <h2>体幹 スキンケア</h2>
        <p>これを使うと、美男子からモテます！すごい化粧水です！モテるだけじゃなく肌が健康にもなります！すごいです！</p>
        <a href="detail.php">&raquo; 口コミを見る</a>
        <br><br>
    </div>
    <div class="col-xs-12">
        <h2>薬用クリアローション</h2>
        <p>これを使うと、くすみ肌が明るくなります！すごい化粧水です！すごいです！</p>
        <a href="detail.php">&raquo; 口コミを見る</a>
        <br><br>
    </div>
    <div class="col-xs-12">
        <h2>クリアエッセンスマスク</h2>
        <p>これを使うと、肌に透明感が出ます！すごいフェイスマスクです！肌に透明感が出ると幸せですよね！すごいです！</p>
        <a href="detail.php">&raquo; 口コミを見る</a>
        <br><br>
    </div>
    

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>



<form action="input.php" method="post">

<p>追加：<input type="submit" name="add" value="追加"></p>
<p>修正：<input type="submit" name="edit" value="修正"></p>
<p>削除：<input type="submit" name="delete" value="削除"></p>

</from>

</body>
</html>
