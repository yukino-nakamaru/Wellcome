<?php
    if(isset($_POST['users'])) {
    $name = $_POST['user_name'];
    $mail = $_POST['user_email'];
    $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
// if(isset($_POST['users'])) {
    $dsn="mysql:host=localhost;dbname=reviewsite;charset=utf8";
    $user="root";
    $pass="yukino1371";
    $dbh = new PDO($dsn,$user,$pass);

    //MySQL接続
//try {
    //$dbh = new PDO($dsn, $user, $pass);
  //} catch (PDOException $e) {
    //exit('データベース接続失敗: ' . $e->getMessage());
  //}

    //フォームに入力されたmailがすでに登録されていないかチェック
    $sql = "SELECT * FROM users WHERE user_email = :user_email";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':user_email', $mail);
    $stmt->execute();
    $member = $stmt->fetch();
    //ブールの値がfalseでない、かつデータベースにユーザーが入力したアドレスが存在する
    if (!($member === false) && ($member['user_email'] === $mail)) {
         echo '同じメールアドレスが存在します。';
         $link = '<a href="signupform.php">戻る</a>';
     } else {

    //登録されていなければinsert 
    $sql = "INSERT INTO users(user_name, user_email, user_password) VALUES (:user_name, :user_email, :user_password)";
    $stmt = $dbh->prepare($sql);
    // $stmt->bindValue(':user_id', $id);
    $stmt->bindValue(':user_name', $name);
    $stmt->bindValue(':user_email', $mail);
    $stmt->bindValue(':user_password', $password);
    $stmt->execute();

    // 送信データをチェック
    if (isset($_POST)) {
        //必須データのチェック
        if(empty($name)){
            echo '名前は必須項目です。';
        }
        if(empty($mail)){
            echo 'E-メールは必須項目です。';
        } elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            echo '正しいEメールアドレスを指定してください。';
          }
        if(empty($password)){
            echo 'パスワードは必須項目です。';
        }
    }
    echo '会員登録が完了しました';
    $link = '<a href="loginform.php">ログインページ</a>';
 }
}
?>

<form action="signupform.php" method="post">

<h2>新規会員登録</h2>
<p>名前：<input type="text" name="user_name"></p>
<p>メールアドレス：<input type="text" name="user_email"></p>
<p>パスワード設定：<input type="password" name="user_password"></p>
<p>パスワード確認：<input type="password" name="user_password"></p>
<p><input type="submit" value="会員登録する"></p>
</from>
<p>すでに登録済みの方は<a href="loginform.php">こちら</a></p>